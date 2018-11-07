<?php
	
	$subscribed_emails = $hlp->get_subscribed_email();
	
	echo( '<div class="gencon icheight txt buttonmenuwithbg">' );
	echo( $hlp->getLinkAncHtml('acampstat',80,'asb rviewdash','export.php?action=dwnld','direct',20,'images/ic/new_ic/download_blue.png','Download') );
	echo( '</div>' );
	
	if( count( $subscribed_emails ) > 0 )
	{
		echo('<div class="txtheadwithbg" style="margin-top: 5px;">Current Users Subscribed: '.count( $subscribed_emails ).'</div>');
	}
	else
		echo('<div class="txtheadwithbg">Currently no users are subscribed</div>');
	
?>