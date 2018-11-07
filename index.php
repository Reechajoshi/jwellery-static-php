<?php
	
	require( 'admin/conf/admin-vars.php' );
	require( 'admin/helper/class.helper.php' );
	
	$hlp = new chlp();
	
?>

<html>
	<head>
	<title>
	Ramniklal & Sons Jewellers
	</title>
	<link rel="stylesheet" href="/stylesheet/main.css.php">
	<link rel="stylesheet" href="/stylesheet/jquery-ui.css">
	<link rel="stylesheet" href="/stylesheet/jquery-ui-timepicker-addon.css">
    <script src="/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="/js/s3Slider.js"></script> -->
	<script type="text/javascript" src="/js/helper.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-sliderAccess.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	</head>
	<body>
		<div id="wrapper">
			
			<?php 
				require( 'lib/inc/header.php' );
				require( 'lib/inc/main_content.php' );
				require( 'lib/inc/footer.php' );
			?>	
			
		</div>
		
		<div id="newsletter_overlay" style="width:100%;height:100%;display:none;">

			<div id="newsletter_cell_div" style="margin-top:-90px;margin-left:-210px;width:402px;height:180px;top:50%;left:50%;position:absolute">
				<div id="newsletter" style="margin:0 auto;width:400px;border:2px solid black;font-size:12px;background:#fff;">
					<div id="newsletter_close_button" style="width:100%;text-align:right;">
						<a href="#" onclick="hide_newsletter();return false;"><img src="img/general/close1.png" style="height: 15px;width: 15px;margin-right: 5px;margin-top: 5px;" /></a>
					</div>
					
					<div id="newsletter_welcome_div" style="width:100%;">
						Welcome To 
					</div>
					
					<div id="newsletter_logo" style="width:100%;margin:10px 0;">
						<img src="img/general/logo.png" width="375px" />
					</div>
					
					<div id="newsletter_msg" style="width:95%;margin:0 auto;">
						Join our email list for exclusive updates about new products and special events. Please enter your email address below: 
					</div>
					
					<form method="post" onsubmit="validate_newsletter(); return false;">
					<div id="newsletter_email_input" style="width:100%;margin:10px 0;">
						<input type="text" id="newsletter_email" style="width:80%;">
					</div>
					
					<div id="newsletter_email_input" style="width:100%;margin:15px 0;">
						<input type="submit" id="newsletter_submit_btn" value="">
							<!-- <img src="img/general/submit_btn.png" /> -->
					</div>
					</form>
				</div>

			</div>
		</div>
	</body>
</html>
