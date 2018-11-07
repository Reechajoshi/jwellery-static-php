<?php
	include_once( "class.db.php" );
	
	class chlp{
		var $_isIE = false;
		var $_db = false;
		var $_db_datastore = false;
		
		function chlp($db_connect = true)
		{
			GLOBAL $DB_NAME, $DB_USER, $DB_PASS;
			
			if( $db_connect )
				$this->_db = new cdb( $DB_NAME, $DB_USER, $DB_PASS );
			
			$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
			$this->_isIE = (strpos($ua,"msie")!==false);
			$this->_isGecko = (strpos($ua,"gecko")!==false);
		}
		
		function getLinkAncHtml($aid,$w,$asb,$anc,$clCB,$imgh,$imgl,$txt,$parentTab = 'TAB_ORGANIZATIONS',$direct = false )
		{
			$clEvnt = 'onclick';
			
			if($anc=='#')
				$clCB .= ';return(false);';
			else if(strpos($clCB,'direct')===0)
				$clCB = 'window.location.replace("'.$anc.'");return(false);';
			else if(strpos($clCB,'confirm')===0)
			{
				if( $direct )
					$clCB = 'if('.$clCB.') { window.location.replace("'.$anc.'"); } return(false);';
				else
					$clCB = 'if('.$clCB.') { CTabs.getTabObject("'.$parentTab.'").submitFormData("'.$anc.'"); } ;return(false);';			
			}	
			else if($clCB=='')
				// $clCB = 'CTabs.getTabObject(window.menuid).submitFormData("'.$anc.'");return(false);';
				$clCB = "document.location.replace(\"$anc\");return(false);";
				
			return("<div class='$asb'>
				<a id=$aid href=# $clEvnt='$clCB' target=_self class=acur>
					<table width=$w border=0><tr><td align=center valign=top><img height=$imgh border=0 src='$imgl' /></td></tr>
					<tr><td align=center valign=top><span id=txt>$txt</span></td></tr></table>
				</a>
			</div>");
		}
		
		function echo_err($m, $align = "left")
		{
			$c='txtheadwithbg';
			echo("<div style='text-align:$align' class='$c gencon'> $m </div>");
		}
		
		function echo_ok($m, $align = "left")
		{
			$c='txtheadwithbg';
			echo("<div style='$align' class='$c gencon'> $m </div>");
		}
		
		function getDisplayPageComboHTML($parent_tab,$cnt,$frm_submit,$frmname,$page_num,$page_display_sz)
		{
			$page_sz = ceil( $cnt/$page_display_sz );
			$page_combo = "<div id=pagingcombo style='text-align:right;padding-right:10px;'>
							<select name=pageCombo onChange='CUtil.getParentByName(this,\"$frmname\").action=\"$frm_submit\";CUtil.getParentByName(this,\"$frmname\").submit();'>";
			
			$cs = 1;$ce = $page_sz;
			$cbo_resize = false;
			
			if( $page_sz>12 )
			{
				$cbo_resize = true;
				if( $page_num>7 )
					$cs = $page_num-5;
				if( $page_sz>($page_num+5) )	
					$ce = $page_num+5;
			}
			
			if( $cbo_resize )
			{
				$page_combo .= "<option value=1".( ( $page_num==1 )?(' SELECTED '):('') ).">Page 1</option>";
				for( $c = $cs;$c<=$ce;$c++ )
				{
					if( !($c==1 || $c==$page_sz) )
						$page_combo .= "<option value=$c ".( ( $page_num==$c )?(' SELECTED '):('') )." >Page $c</option>";
				}	
				$page_combo .= "<option value=$page_sz ".( ( $page_num==$page_sz )?(' SELECTED '):('') )." >Page $page_sz</option>";	
			}
			else
			{
				for( $c = 1;$c<=$page_sz;$c++ )
					$page_combo .= "<option value=$c ".( ( $page_num==$c )?(' SELECTED '):('') )." >Page $c</option>";
			}
			$page_combo .= "</select>
							</div>";
			return($page_combo);
		}
		
		function searchBox($parent_tab,$frmsubmit,$srctxt,$comboHTML,$frmname='srccontent',$name_ext = false,$beforeCombo = false,$submit_btn = false)
		{
			echo( "<div><form method=post action='$frmsubmit' name=$frmname id=$frmname ><div ><input type=hidden value='$srctxt' name='cbosrctxt' /><div><table class=txt style='width:96%;' ><tr><td style='width:60px;' >Search :</td><td id=srcinputcl style='width:550px;'><div style='padding-bottom:2px;' >" );
			
			if( $submit_btn )
			{
				echo( "<input type=text name='srctxt".( ( $name_ext !== false )?( $name_ext ):( '' ) )."' id=searchclient style='width:525px;' value='$srctxt' ></div></td>" );
			}
			else
			{
				echo( "<input type=text name='srctxt".( ( $name_ext !== false )?( $name_ext ):( '' ) )."' id=searchclient style='width:500px;' value='$srctxt' onKeyPress='if( CUtil.isKeyEnterPressed(event)) { CUtil.getParentByName( this,\"$frmname\" ).submit(); }' ></div></td>" );
			}
			
			if( $submit_btn )
			{
				echo( "<td><div><input type='submit' value='Search' class='roundbutton'/></div></td>" );
			}
			
			echo( ( ( $beforeCombo )?( "<td style='text-align:right;' id=cmbtd >$beforeCombo</td>" ):( "" ) )." ".( ( $comboHTML )?( "<td style='text-align:right;' id=cmbtd >$comboHTML</td>" ):( "" ) )."</tr></table></div></form></div>" );
		}
		
		function echoFileHeader($contenttype,$filename,$size,$asattachment = true)
		{
			header( "Content-Type: $contenttype" );
			header( "Content-Disposition: ".( ( $asattachment )?( "attachment" ):( "inline" ) )."; filename=\"".basename($filename)."\"");
			header( "Accept-Ranges: bytes" );
			header( "Content-Length: $size" );
			header( "Connection: keep-alive" );
		}
		
		function convertToBytes($size,$form = 'GB')
		{
			if( $form == 'GB' )
				$size = $size*1073741824;
			else if( $form == 'MB' )
				$size = $size*1048576;
			else if( $form == 'KB' )
				$size = $size*1024;
			return( $size );
		}
		
		function trimText($str,$size=100)
		{
			if( strlen( $str ) > ($size - 3) )
				return( substr( $str,0,$size-3 )."..." );
			else
				return( $str );
		}
		
		function getunqid($s)
		{
			return(md5(uniqid(time(),true).$s));
		}

		function is_array_numeric( $arr)
		{
			foreach($arr as $val)
			{
				if(!(is_numeric( $val ) ))
					return false;
			}
			return true ;
		}
		
		function check_numeric( $o_fax ,  $o_pin  )
		{	
			$ret_val = true ; //Check is_numeric only if user entered values otherwise ignore
			
			if( strlen( $o_landline ) > 0 && !( is_numeric( $o_landline) )  ) $ret_val = false ;
			if( strlen( $o_fax ) > 0 && !( is_numeric( $o_fax) )  )  $ret_val = false ;
			if( strlen( $o_pin ) > 0 && !( is_numeric( $o_pin) )  )  $ret_val = false ;
			//if( !($this->is_array_numeric( $o_coord_mob ) ) )  $ret_val = false ;
			return  $ret_val;
		}
		
		function get_date_in_dmy($date , $show_hms=false) 
		{
			if($date=="0000-00-00 00:00:00")
			{
				return '';
			}
			else
			{
				if(!$show_hms)
					return date("d-m-Y",strtotime( $date )) ;
				else
				{
					return date("d-m-Y h:i",strtotime( $date )) ;
				}
			}
		}
		
		function convert_str_to_ttl_case( $str )
		{
			for( $i = 0; $i < strlen( $str ); $i++ )
			{
				if( $str[ $i ] == '_' )
				{
					$str[ $i ] = ' ';
					$str[ $i + 1 ] = strtoupper( $str[ $i + 1 ] );
				}
				else if( $i == 0 )
				{
					$str[ $i ] = strtoupper( $str[ $i ] );
				}
			}
			return $str;
		}
		
		function get_combo(  $opt_val_arr, $opt_txt_arr, $dd_title, $dd_name, $block_div_style = "", $ttl_style = "", $selected = "" , $text_box_style="width:200px;") //Added new parameter , needed for uneditable combo box
		{
			$html = '<div style="'.$block_div_style.'">
						<div style="'.$ttl_style.'">'.$dd_title.'</div>
						<select name="'.$dd_name.'" id="'.$dd_name.'" style="'.$text_box_style.'">' ;
			
			
			
			for( $i = 0; $i < count( $opt_val_arr ); $i++ )
			{
				$html.='<option value="'.$opt_val_arr[ $i ].'" '.( ( strtolower( $opt_val_arr[ $i ] ) == strtolower( $selected ) ) ? ( "selected" ) : ( "" ) ).'> '.$opt_txt_arr[ $i ].'</option>' ;
				/*
				$html.='<option value="'.$opt_val_arr[ $i ].'" '.( ( strtolower( $opt_val_arr[ $i ] ) == strtolower( $selected ) ) ? (
				"selected " ) : ( "" ) ).' '.( ( $un_editable )?( "disabled")?("") ).'> '.$opt_txt_arr[ $i ].'</option>' ;
				*/
				
				//$html.='<option value="'.$opt_val_arr[ $i ].'" '.( ( strtolower( $opt_val_arr[ $i ] ) == strtolower( $selected ) ) ? ( ($un_editable)?( "selected " ):( "disabled") ) : ( "" ) ).'> '.$opt_txt_arr[ $i ].'</option>' ;
				
				/* $condition = 
				$html.='<option value="'.$opt_val_arr[ $i ].'" '.( ( strtolower( $opt_val_arr[ $i ] ) == strtolower( $selected ) ) ? ( ($un_editable)?( "selected " ):( "disabled") ) : ( "" ) ).'> '.$opt_txt_arr[ $i ].'</option>' ; */
			}
			
			$html.= '</select></div>' ;
			
			return ($html);
			
		}
		
		function convert_date_dmy_to_ymd($date)
		{
			if(strlen($date) == 0)
			{
				return '';
			}
			
			$d_create = date_create($date);
		
			$ymd = date_format($d_create,"Y-m-d h:i:s");
			
			return $ymd ;
		}
		
		function generate_pdf( $file_destination , $file_source , $file_pdf_name )
		{
			if(file_put_contents($file_destination, $file_source))
			{		
				$cmd = "xvfb-run -a -s '-screen 0 640x480x16' wkhtmltopdf --dpi 200 --page-size A4 '$file_destination' '$file_pdf_name'" ;
				
				exec( $cmd,$outa, $retv);
				
				if($retv == 0 )
				{
				}
				else
				{
					$this->echo_err(" Failed to generate the PDF , Please contact support");
				}
				
				@unlink($file_destination) ;
			}
		}
		
		function validate_appointment( $post_params )
		{
			$error_msg_arr = array( 
								"name" => "Please Enter the Name", 
								"email" => "Please Enter Email ID", 
								"phone" => "Please Enter Phone No", 
								"message" => "Please Enter The Message", 
								"make_app_date" => "Please Select Appointment Date", 
								"make_app_time" => "Please Select Appointment Time"
							);
			
			foreach( $post_params as $parameter )
			{
				if( strlen( $parameter ) == 0 )
				{
					$_continue = false;
					$err_msg = $error_msg_arr[ $parameter ];
				}
				else
					$_continue = true;
			}
			
			if( $_continue )
			{
				$appointment_full_time = $post_params['make_app_date'].' '.$post_params['make_app_time'];
				$appointment_time = strtotime( $appointment_full_time );
				$current_time = time();
				if( $current_time > $appointment_time )
				{
					$this->show_alert( "Please Select Date Afterr Today" );
				}
				else
				{
					return ( ( $this->save_appointment( $post_params ) ) ? ( true ) : ( false ) );
				}
			}
			else
			{
				$this->show_alert( $err_msg );
			}
		}
		
		function save_appointment( $app_details )
		{
			// send mail to $APPOINTMENT_EMAIL_ID
			global $APPOINTMENT_EMAIL_ID;
			$_continue = true;
			
			$sender_name = $app_details[ 'name' ];
			$sender_email = $app_details[ 'email' ];
			$message = $app_details[ 'message' ];
			$message .= "\nAppointment Date: ".$app_details[ 'make_app_date' ]." ".$app_details[ 'make_app_time' ];
			
			$encrypted_app_details = base64_encode( $app_details[ 'name' ].'|'.$app_details[ 'make_app_date' ].'|'.$app_details[ 'make_app_time' ] );
			
			
			if( isset( $app_details[ 'chcknewsletter' ] ) )
			{
				if( $this->save_newsletter( $sender_email ) )
					$_continue = true;
				else	
					$_continue = false;
			}
			
			if( $_continue )
			{
				if( $this->sendmail( $sender_name, $sender_email, $message ) )
					return true;
				else
				{
					$this->show_alert( "Couldn't Send Mail right now. Please try after some time." );
					return false;
				}
			}
		}
		
		function save_newsletter( $email )
		{
			$subscribed_emails = $this->get_subscribed_email();
			$id = $this->getunqid( $email );
			
			if( !in_array( $email, $subscribed_emails ) )
			{
				$insert_query = "insert into newsletter( id, u_email, subscribe_date ) values( '$id', '$email', now() ) ON DUPLICATE KEY UPDATE u_email = '$email' , subscribe_date = now(); ";		
				return ( ( $res = $this->_db->db_query( $insert_query ) !== false ) ? ( true ) : ( false ) );
			}
			
			return true;
		}
		
		function get_subscribed_email()
		{
			$q = "select * from newsletter ORDER BY subscribe_date desc;";
			$subscribed_emails = array();

			if( $res = $this->_db->db_query( $q ) )
			{
				while( ( $row = $this->_db->db_get( $res ) ) !== false )
				{
					$subscribed_emails[] = $row[ 'u_email' ];
				}
			}
			return $subscribed_emails;
		}
		
		function create_newsletter_csv()
		{
			$subscribed_emails = $this->get_subscribed_email();
			
			header('Content-Disposition: attachment; filename="rms_newsletter.csv"');
			header('Content-Description: File Transfer');      
			header('Content-Type: application/octet-stream');
			header('Content-Transfer-Encoding: binary');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Expires: 0');
			
			echo('"Email"'."\r\n");
			foreach( $subscribed_emails as $email )
			{
				echo( '"'.$email.'"'."\r\n" );
			}
		}
		
		function show_alert( $msg )
		{
			echo( '<script>
				alert("'.$msg.'");
			</script>' );
		}
		
		function get_long_date( $date_string )
		{
			$date_string = str_replace( ":", "-", $date_string );
			$date_details_arr = explode( "-", $date_string );
			return $date_details_arr;
		}
		
		function sendmail( $sender_name, $sender_email, $email_message )
		{
			global $APPOINTMENT_EMAIL_ID, $APPOINTMENT_EMAIL_SUBJ;
			
			$headers = 'From: '.$sender_name.'<'.$sender_email.">";
			
			return ( ( mail( $APPOINTMENT_EMAIL_ID, $APPOINTMENT_EMAIL_SUBJ, $email_message, $headers ) ) ? ( true ) : ( false ) );
		}

	}
?>