<?php

	require_once 'conf/admin-vars.php';
	require_once 'helper/class.helper.php';

	$hlp = new chlp();
	
	if( isset( $_GET[ 'action' ] ) )
	{
		if( $_GET[ 'action' ] == 'dwnld' )
		{
			$hlp->create_newsletter_csv();
		}
	}

?>