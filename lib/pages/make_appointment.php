<div id="make_appointment_container" style="width:100%">
<?php
	
	$show_form = true; // set to false if mail sent successfully(show new design) else, show form
	if( isset( $_POST[ 'make_app_submit' ] ) && $_POST[ 'make_app_submit' ] == 'submit' )
	{
		if( $hlp->validate_appointment( $_POST ) )
		{
			$show_form = false;
		}
	}
	
	if( $show_form )
	{
		echo( '<div id="make_app_info" style="width: 100%;height: 476px;" >
			<div id="make_app_img_div_container" style="width:59%;float:left;">
				<div style="width:100%;">
					<div style="display:table;height:100%;width:100%;">
						<div style="display:table-row;">
							<div style="display:table-cell;vertical-align:middle;">
								<img style="width:100%" id="our_story_img" src="/img/boutiques/_SP_8454_b.jpg" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="make_app_form_div_container" style="width:40%;height:100%;float:right;text-align:center;">
				<div id="make_app_addr_container" style="margin-top:6px;margin-left:15px;">
					<div id="make_appo_addr_line"">
						Ramniklal & Sons Jewellers   <br>
						62/64 Zaveri House  <br>
						Hughes Road  <br>
						Mumbai 400 007
					</div>
					<div id="make_appo_addr_line" style="margin:15px 0;">
						+91 22 23630818 |  23618384 <br>
						<a href="mailto:sales@ramniklal.in">sales@ramniklal.in</a>
					</div>
					<div id="make_appo_addr_line" style="margin:15px 0;">
						Monday - Saturday <br>
						11:00 AM to 7:00 PM
					</div>
				</div>
				
				<div id="make_app_form_container" style="margin-left:15px;">
					<form onsubmit="return validate_make_appointment_frm();" action="index.php?a=make_appointment" method="post">
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Name:
							</div>
							<div style="display:inline-block;width:80%;">
								<input type="text" name="name" id="name" class="form_input_text" value="'.$_POST[ 'name' ].'">
							</div>
						</div>
						
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Email:
							</div>
							<div style="display:inline-block;width:80%;">
								<input type="text" name="email" id="email" class="form_input_text"  value="'.$_POST[ 'email' ].'">
							</div>
						</div>
						
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Phone:
							</div>
							<div style="display:inline-block;width:80%;">
								<input type="text" name="phone" id="phone" class="form_input_text" value="'.$_POST[ 'phone' ].'">
							</div>
						</div>
						
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Message:
							</div>
							<div style="display:inline-block;width:80%;">
								<textarea rows="5" cols="12" name="message" id="message" class="form_input_text">'.$_POST[ 'message' ].'</textarea>
							</div>
						</div>
						
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Date:
							</div>
							<div style="display:inline-block;width:80%;">
								<input name="make_app_date" id="make_app_date" class="form_input_text" value="'.$_POST[ "make_app_date" ].'">
							</div>
						</div>
						
						<div id="make_app_form_field">
							<div style="display:inline-block;width:60px;vertical-align:top;">
								Time:
							</div>
							<div style="display:inline-block;width:80%;">
								<input name="make_app_time" id="make_app_time" class="form_input_text" value="'.$_POST[ 'make_app_time' ].'">
							</div>
						</div>
						
						<div id="make_app_form_field" style="margin:15px 0;">
							<input type="checkbox" id="chcknewsletter" name="chcknewsletter" value="Newsletter">
							<label for="chcknewsletter">Please add me to the Newsletter</label>
						</div>
						
						<div id="make_app_form_field" class="make_app_btn">
							<button class="make_app_submit" name="make_app_submit" style="background:transparent; border:none;padding: 0;cursor: pointer;" type="submit" value="submit">
								<img height="22px" src="../../img/general/MAA-Button_1.png">
							</button>
						</div>
						
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>' );
	}
	else
	{
		$name = $_POST[ 'name' ];
		$appointment_date_str = $_POST[ 'make_app_date' ].'-'.$_POST[ 'make_app_time' ];
		$appointment_date = $hlp->get_long_date( $appointment_date_str );
		$month = intval( $appointment_date[ 1 ] );
		
		$full_date_format = $appointment_date[ 0 ].', '.$MONTH_ARR[ $month ].' '.' '.$appointment_date[ 2 ].' '.$appointment_date[ 3 ].':'.$appointment_date[ 4 ];
			
		// if mail sent successfully, $show_form is set to false. show new design.
		echo( '<div id="appointment_success_container">
				<div style="display:table-row">
					<div id="appointment_success_div">
						<div id="appointment_success_title">
							Thank You!
						</div>
						<div class="appointment_success_det">
							Dear '.$name.',<br>
							Thank you for scheduling an appointment with Ramniklal & Sons Jewellers. A representative of Ramnikalal & Sons Jewellers will confirm your appointment and address any additional needs or requests within 48 hours. If you have questions or need to reschedule your appointment please contact us by phone or email at the contact information listed below.
						</div>
						<div class="appointment_details">
							Appointment Details: <br>
							'.$full_date_format.'
						</div>
						<div class="location_and_contact_info">
							Location & Contact Information:<br>
							Ramnikalal & Sons Jewellers<br>
							62/64 Zaveri House, Hughes Road<br>
							Mumbai, MH 400 007<br>
							+91 22 23630818 | 23618384<br>
							<a href="mailto: info@rmsjewellers">info@rmsjewellers</a>
						</div>
						<div id="continue_shopping_container">
							<a href="index.php?a=category">
							<div id="continue_shopping_button">
								CONTINUE SHOPPING
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>' );
	}
	
	?>
</div>