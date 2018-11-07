$(document).ready(function() {

	$( "#make_app_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
	$( "#make_app_time" ).timepicker();
	//CHelp.show_cat_details('Necklaces');
	
	var img1 = new Image();
	img1.src = 'img/home/DSC_0864.jpg'; 
	var img2 = new Image();
	img2.src = 'img/home/DSC_0886.jpg'; 
	var img3 = new Image();
	img3.src = 'img/home/DSC_0957.jpg'; 
	var img4 = new Image();
	img4.src = 'img/home/DSC_1006.jpg'; 
	var img5 = new Image();
	img5.src = 'img/home/DSC_1042.jpg'; 
	var img6 = new Image();
	img6.src = 'img/home/DSC_1095.jpg'; 
	
	
	if( $("#slider").is( ":visible" ) )
	{
		setInterval('cycleImages()', 5000);
	}
	
	$("#map_div").each(function(){
		var embed ="<iframe style='float:left;' width='100%' height='100%' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe><div style='clear:both;'></div>";
		$(this).html(embed);
	});
	
	
	// setting on hover colors for all links
	// #d5c598
	
	// first topnav
	$("#social_icons").find('li').each(function(){  
		$(this).find( ".soc_icons" ).each(function(){
			var img_id = $(this).attr('id');
			$(this).hover(function(){
				$(this).find('img').attr('src','/img/general/'+img_id+'_hover.png');
			},
			function(){
				$(this).find('img').attr('src','/img/general/'+img_id+'.png');
			});
		});
	});
	
	$(".make_app_submit").hover( function(){
								$(this).find('img').attr('src','../img/general/MAA-Button_2.png');
							} , 
						function(){
							$(this).find('img').attr('src','../img/general/MAA-Button_1.png');
							} ); 
							
							
							
	$( "#menu1" ).hover( function(){
								$("#menu1_submenu").show();
							} , 
						function(){
							$("#menu1_submenu").hide();
							} ); 
							
	$( "#menu1_submenu" ).hover( function(){
								$("#menu1_submenu").show();
							} , 
						function(){
							$("#menu1_submenu").hide();
							} ); 
							
	/* $( "#menu1" ).hover( function(){
								$("#menu1_submenu").css("display", "block");
							} , 
						function(){
							$("#menu1_submenu").css("display", "none");
							} ); */
							
					 
					 
		});
		
	

$( window ).resize(function() {
  $( "#newsletter_overlay" ).css("height", "100%");
});

function cycleImages(){
	var $active = $('#slider .active');
	console.log( $active );
	var $next = ($active.next().length > 0) ? $active.next() : $('#slider img:first');
	$next.css('z-index',2);
	console.log( $next );
	$active.fadeOut(1500,function(){
		$active.css('z-index',1).show().removeClass('active');
		$next.css('z-index',3).addClass('active');
	});
}
	
function validate_make_appointment_frm()
{
	var validate_arr = [] , curr_time , app_time , app_date , curr_date , current_full_date;
	app_time = $( '#make_app_time' ).val();
	app_date = $( '#make_app_date' ).val();
	
	curr_date = CHelp.get_current_date("date");
	curr_time = CHelp.get_current_date("time");
	
	validate_arr["name"] = "Please Enter the Name";
	validate_arr["email"] = "Please Enter the Email";
	validate_arr["phone"] = "Please Enter the Phone";
	validate_arr["message"] = "Please Enter the Message";
	validate_arr["make_app_date"] = "Please Select Appointment Date";
	validate_arr["make_app_time"] = "Please Select Appointment Time";
	
	var mandatory_arr = [ "name" , "email", "phone" , "message", "make_app_date", "make_app_time", "chcknewsletter" ];
	
	for( i=0 ; i<mandatory_arr.length ;i++ )
	{
		if( $("#"+mandatory_arr[i]).val().trim().length == 0 )
		{
			alert( validate_arr[mandatory_arr[i]] );
			return false;
		}
	}
	
	if( CHelp.compare_date( curr_date, app_date ) == false ) // returns false if first date is greater than second
	{
		alert( "Please Select a Date after today" );
		return false;
	}
	
	return true;
}


function validate_inquiry_form()
{
	alert( "rrr" );
	var validate_arr = [];
	
	validate_arr["name"] = "Please Enter the Name";
	validate_arr["email"] = "Please Enter the Email";
	validate_arr["phone"] = "Please Enter the Phone";
	validate_arr["message"] = "Please Enter the Message";
	validate_arr["make_app_date"] = "Please Select Appointment Date";
	validate_arr["make_app_time"] = "Please Select Appointment Time";
	
	var mandatory_arr = [ "name" , "email", "phone" , "message", "make_app_date", "make_app_time", "chcknewsletter" ];
	
	for( i=0 ; i<mandatory_arr.length ;i++ )
	{
		if( $("#"+mandatory_arr[i]).val().trim().length == 0 )
		{
			alert( validate_arr[mandatory_arr[i]] );
			return false;
		}
	}
}

function display_newsletter()
{
	$("#newsletter_overlay").show();
	
	var window_width = $(window).width();
	var window_height = $(window).height();
	
	$("#newsletter_overlay").css( "width", window_width+"px" );
	$("#newsletter_overlay").css( "height", window_height+"px" );
	$("#newsletter_overlay").css( "background", "rgba(0, 0, 0, 0.5)" );
}

function hide_newsletter()
{
	$("#newsletter_email").val('');
	
	$("#newsletter_overlay").hide();
}

function validate_newsletter()
{
	var newsletter_email = $("#newsletter_email").val();
	if( newsletter_email == '' )
	{
		alert( "Please enter the email id" );
	}
	else
	{
		$.ajax({
			url: 'ajax.php',
			data: { "email" : newsletter_email },
			success: function( result ) {
				alert( "Thank you for subscribing" );
				hide_newsletter();
				console.log( result );
			},
			error: function( error ) {
				alert( "Something went wrong. Please try again later" );
				console.log( error );
			}
		});
	}
}