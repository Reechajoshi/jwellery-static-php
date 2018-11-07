<?php
	
	require( 'admin/conf/admin-vars.php' );
	require( 'admin/helper/class.helper.php' );
	
	$hlp = new chlp();
	$email = $_GET[ 'email' ];
	
	if( $hlp->save_newsletter( $email ) )
		echo( "1" );
	else
		echo( "0" );
	
?>