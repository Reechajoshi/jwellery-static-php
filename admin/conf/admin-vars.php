<?php
	$DB_NAME = $DB_USER = $DB_PASS = "rms" ;
	$DISPLAY_PER_PAGE = 10 ;
	
	$DATA_DESTINATION = "data/";
	$DOCUMENT_ROOT = realpath ($_SERVER['DOCUMENT_ROOT'])."/";
	$TEMP_WORKING_DIR = $DOCUMENT_ROOT.'admin/temp/' ; // since server root temp directory cause problem, we have created temp directory in admin so that it can be accessed throughout the site.
	
	$tmpA = explode('/',$_SERVER['SERVER_PROTOCOL']);
	$SERVER_PROTO = strtolower($tmpA[0]);
	$SERVER_HOST = $_SERVER['HTTP_HOST'] ;
	
	$HOST_URL = $SERVER_PROTO."://".$SERVER_HOST ;
	
	$IMG_CGI = "/admin/cimg.php";
	
	$DWN_FILE='dwn.x' ;
	
	$SESS_UNAME = $SESS_ID = $SESS_USER_ID = "" ;
	
	// $APPOINTMENT_EMAIL_ID = "sales@ramniklal.in";
	$APPOINTMENT_EMAIL_ID = "richa@mgtech.in";
	$APPOINTMENT_EMAIL_SUBJ = "Appointment Details";
	
	$MONTH_ARR = array( "January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December" );
	
	
?>