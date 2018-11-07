<?php
	header("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	
	
	require( 'conf/admin-vars.php' );
	require( 'helper/class.helper.php' ) ;
	
	
	$me = $_SERVER[ "PHP_SELF" ];
	$hlp = new chlp();
	
	
	echo('<html><head>');
	echo('<title>RMS Admin</title>');
	
	if( isset( $_GET['a'] ) || isset( $_GET['b'] ) )
	{
		if( $_GET['a']=='t' )
		{
			echo('</head>');
			require('inc/frmtop.php');
		}
		else if( $_GET['a']=='r' )
		{
			require( 'inc/head.php' );//only required for TAB 
			
			require( 'inc/menu_main.php' );
			echo( '</head>' );
			echo( '<body onload=menuInit(); ></body>' );
		}
		else if( $_GET['a']=='newsletter' ) 
		{
			require_once( 'inc/head.php' );//only required for TAB 
			require( 'pages/newsletter/menu.php' );
			echo( '</head>' );
			echo( '<body onload="menuInit();"></body>' );
		}
		else if( $_GET['b']=='newsletter_all' )
		{
			echo( '<link rel="stylesheet" type="text/css" href="styles/ui.css_x.php">' );
			require( 'inc/head.php' );//only required for TAB 
			echo('</head>');
			require('pages/newsletter/all.php');
		}
	}
	else
	{
		echo("</head><frameset rows='40,*'>
		<frame src='$me?a=t' frameborder=0 marginheight=0 marginwidth=0 name=ft noresize=noresize scrolling=no />
		<frame src='$me?a=r' frameborder=0 marginheight=0 marginwidth=0 name=fb noresize=noresize scrolling=auto />
		</frameset>");
	}	
	echo('</html>');
	
?>