/* Brown color: #d5c598 */
<?php
//echo("<br/>".$_SERVER["HTTP_USER_AGENT"]."<br/>");
$_isMAC = (strpos( $_SERVER["HTTP_USER_AGENT"], "Macintosh") !== false);
?>



html, body {
	min-height:100%; padding:0; margin:0;
}

body {
	font-family: baskvl;
}

a {
	color: #000;
}

input, textarea {
	font-family: baskvl;
}

/* fonts */
@font-face {
    font-family: baskvl;
    src: url(font/baskvl.ttf);
}

@font-face {
    font-family: gothic;
    src: url(font/gothic.ttf);
}

.clear{
	clear: both;	
}

#wrapper , #newsletter_overlay {
	position:absolute; top:0; bottom:0; left:0; right:0;overflow:auto;min-width:1088px;text-align: center;
}

#lodo_div {
	height: 100px;
	margin: 0 auto;
	text-align: center;
}

#logo_place {
	margin-top:5px;
}

.top_menu {
	text-decoration: none;
}

.bottom_menu_selected, .bottom_menu_deselected {
	margin: 0px 20px;
	text-decoration:none;
}

.bottom_menu_selected , .bottom_menu_deselected:hover  {
	border-bottom: 1px solid black;
	font-weight: bold;
	
}

.soc_icons , .privacy_policy{
	margin: 0px 5px;
}

.privacy_policy {
	text-decoration: none;
}

.privacy_policy:hover {
	font-weight: bold;
	border-bottom: 1px solid black;
}

#footer_menu li{
	color: #fff;
}

#footer_menu {
	display: table;
	margin: 0 auto;
	font-family: gothic;
	font-size: 10pt;
	letter-spacing: 7px;
}

#footer_menu ul, #social_icons ul{
	display: table-row;
}

#footer_menu li, #social_icons li{
	display: table-cell;
	vertical-align: middle;
}

#main_content_container{
	min-height: 470px;
	position: relative;
	/* overflow: hidden; */
	padding-top: 10px;
	font-size: 14px;
	text-align:center;
}

.main_content_titles {

	font-weight:bold;
	<?php
	if($_isMAC)
		echo("font-size: 16px;");
	else
		echo("font-size: 14px;");
	?>
}

.main_content_titles_services {

	font-weight:bold;
	<?php
	if($_isMAC)
		echo("font-size: 18px;");
	else
		echo("font-size: 16px;");
	?>
}


#footer_container {
	height: 60px;
}

#footer_info{
	/* width: 65%; */
	margin: 0 auto;
	font-family: gothic;
	font-size: 10pt;
	letter-spacing: 4px;
	padding-bottom: 2px;
}

#copyright{
	float:left;
	color: #d5c598;
	letter-spacing: 3.5px;
}

#social_icons{
	display: table;
	float:right
}


#img_div {
	height: 300px;
	width: 700px;
}

#r_arr , #l_arr{
	height:7px;
	width: 5px;
}

.home_bottom {
	width:100px;
	bottom: 0;
    left: 250px;
}
#slider {
    width: 1025px; /* important to be same as image width */
    height: 470px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
	margin:0 auto;
}

#slider img {
	position:absolute;
	left: 0px;
	z-index:1
}

#slider img.active {
	z-index:3
}

.sliderImage, .slider1Image {
    position: relative;
	display: none;
}

.sliderImage span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 200px;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #000;
    display: none;
}

.slider1Image span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 694px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.clear {
	clear: both;
}
.sliderImage span strong, .slider1Image span strong {
    font-size: 14px;
}
.top {
	top: 0;
	left: 0;
}
.bottom {
	bottom: 0;
    left: 180px;
}
.left {
	top: 0;
    left: 0;
	width: 110px !important;
	height: 280px;
}
.right {
	right: 0;
	bottom: 0;
	width: 90px !important;
	height: 290px;
}
ul { list-style-type: none;}

.header_menu_selected  a{
	color: #d5c598;
	font-weight:bold;
}

.header_menu_deselected  a{
	color:#fff;
}

.header_menu_deselected a:hover{
	color: #d5c598;
}

#chcknewsletter{
	margin-left: 0px;
	vertical-align: bottom;
}


#newsletter_submit_btn {
	background-image: url(../img/general/submit_btn.png);
    background-position:  0px 0px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
	border: none;
	width:63px;
	height:17px;
	cursor: pointer;
}

#make_app_submit {
	margin: 0px;
}

.form_input_text {
	width: 95%;
}

#privacy_pol_div{
	text-align: left;
}

#appointment_success_container {
	display: table;
	height: 470px;
	margin: 0 auto;
}

#appointment_success_div {
	display: table-cell;
	vertical-align: middle;
	width: 765px;
}

#appointment_success_title {
	font-size: 18px;
	margin: 10px 0;
}

#appointment_success_det {
	margin: 10px 0;
}

#appointment_details {
	margin: 10px 0;
}

/* Contact Page */


.contact_submit_btn {
	background-image: url(../img/general/Send_1.png);
    background-position:  0px 0px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    width: 52px;
    height: 20px;
	cursor: pointer;
	border: 0;
}

.contact_submit_btn:hover {
	background-image: url(../img/general/Send_2.png);
}

#location_and_contact_info {
	margin: 10px 0;
}

#continue_shopping_container{
	margin: 10px 0;
}

#continue_shopping_button {
	display: inline-block;
	padding: 5px 10px;
	background: black;
	color: white;
}

/* Category Style */

#cat_title_container {
	height: 25px;
	width: 1025px;
}

#cat_content {
	height: 440px;
	width: 100%;
}

/* Common Height */
#cat_container {
	width: 100%;
	height:476px;
}

#header_logo {
	color: #d5c598;
	font-size:18px;
	font-weight:bold;
}



ul.pureCssMenu ul{display:none}
ul.pureCssMenu li:hover>ul{display:block}
ul.pureCssMenu ul{position: absolute;left:-1px;top:98%;}


ul.pureCssMenu ul {
	background-color:#000;
}

ul.pureCssMenu table {border-collapse:collapse}ul.pureCssMenu {
	display:block;

}

ul.pureCssMenu li{
	display:inline;
	margin:0px 0px 0px 2px;
	font-size:0px;
}

ul.pureCssMenu a, ul.pureCssMenu li.dis a:hover, ul.pureCssMenu li.sep a:hover {
	display:inline;

	text-align:center;
	text-decoration:none;
	padding:0px  42px ;
	/*font:normal 12px Trebuchet MS,Tahoma; */
	font-family: gothic;font-size: 10pt;letter-spacing: 7px;
}

ul.pureCssMenu ul a {
	text-align:center;
	padding-top:10px;
}

ul.pureCssMenu span{
	overflow:hidden;
}

ul.pureCssMenu ul li {
	text-align:center;
	width:100%;
}
ul.pureCssMenu ul a {
	text-align:center;
	
}
ul.pureCssMenu li.sep{
	text-align:left;
	padding:0px;
	line-height:0;
	height:100%;
}

	
ul.pureCssMenu ul li.sep span{
	height:3px;
}
ul.pureCssMenu li:hover{
	position:relative;
}



ul.pureCssMenu img.over{display:none}
ul.pureCssMenu li.dis a:hover img.over{display:none !important}
ul.pureCssMenu li.dis a:hover img.def {display:inline !important}

ul.pureCssMenu a:hover ul{display:block
 }
 
 ul.pureCssMenu {
	padding:0px;
	margin:0px;
 }
 
 ul.pureCssMenu ul a{
	padding:2px 0px;
	font-size: 11px;
	color:#fff;
	font-weight:normal;
	text-align:center;
	display:block;
 }
 
 ul.pureCssMenu ul li{
	padding:10px 0px;
	width:100%;
 }
 
ul.pureCssMenu ul a:hover{
	color: #d5c598;
}
  
<!--ul.pureCssMenu li:hover>a>span{	background-image:url(./images/arrv_white.gif);
} 
ul.pureCssMenu a:hover span{	_background-image:url(./images/arrv_white.gif)}
ul.pureCssMenu ul span,ul.pureCssMenu a:hover table span{background-image:url(./images/arr_white.gif)}-->

