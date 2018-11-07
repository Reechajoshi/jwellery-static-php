
<div id="cat_container">
	<div id="cat_title_container">
		<div id="cat_title">
			<div id="cat_small_left_arr_container" style="height: 99%;width: 10px;display: inline-block;">
				<a href="#" onClick="CHelp.scroll_category_name('prev'); return false;">
					<div id="cat_small_arr_div" style="display:table;height:99%;width:100%;">
						<div id="cat_small_arr_row_div" style="display:table-row">
							<div id="cat_small_arr_td_div" style="vertical-align:middle;display:table-cell;text-align:center;">
								<img height="10px;" src="img/general/left_arrow_big.png" />
							</div>
						</div>
					</div>
				</a>
			</div>
			
			
			<div id="cat_ttl_container" style="height: 99%;width: 8%;display: inline-block;vertical-align:top;">
				<div id="cat_name" style="margin-top:4px;">Necklaces</div>
			</div>
			
			
			<div id="cat_small_right_arr_container" style="height: 99%;width: 10px;display: inline-block;">
				<a href="#" onClick="CHelp.scroll_category_name('next'); return false;">
					<div id="cat_small_arr_div" style="display:table;height:99%;width:100%;">
						<div id="cat_small_arr_row_div" style="display:table-row">
							<div id="cat_small_arr_td_div" style="vertical-align:middle;display:table-cell;text-align:center;">
								<img height="10px;" src="img/general/right_arrow_big.png" />
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div id="cat_content_container">
	
		<div id="cat_content">
			<div id="cat_large_left_arr_container" style="height: 93%;width: 20px;display: inline-block; vertical-align:top;">
				<a href="#" onClick="CHelp.scroll_category_desc('prev'); return false;">
					<div id="cat_large_arr_div" style="display:table;height:99%;width:100%;">
						<div id="cat_large_arr_row_div" style="display:table-row">
							<div id="cat_large_arr_td_div" style="vertical-align:middle;display:table-cell;text-align:center;">
								<img src="img/general/left_arrow_big.png" />
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<div id="cat_img_container" style="height: 93%;width: 94%;display: inline-block;vertical-align:top;">
				<img id="cat_img0" src="img/necklace/NL_34206.jpg" />
				<img id="cat_img1" src="img/necklace/NL_34206_ZOOM.jpg" />
				<img id="cat_img2" style="display:none;"  src="/img/bracelets/BLI_1617.jpg" />
			</div>
			
			<div id="cat_large_right_arr_container" style="height: 93%;width: 20px;display: inline-block;vertical-align:top;">
				<a href="#" onClick="CHelp.scroll_category_desc('next'); return false;">
					<div id="cat_large_arr_div" style="display:table;height:99%;width:100%;">
						<div id="cat_large_arr_row_div" style="display:table-row">
							<div id="cat_large_arr_td_div" style="vertical-align:middle;display:table-cell;text-align:center;">
								<img src="img/general/right_arrow_big.png" />
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<div style="bottom: 10px;margin-top:5px;width:100%;height:22px;text-align:center;background:#000;color:#FFF;">
				<div id="category_desc_cont" style="margin-top:4px;padding-top: 2px;">NL 34206 - Black Onyx and Diamond Necklace</div>
			</div>
		</div>
		
	</div>
</div>
<?php
if( isset( $_GET[ 'b' ] ) )
	{
		$catname = $_GET[ 'b' ];
		//echo($catname);
		echo('<script>');
		//echo('alert("catname '.$catname.'");');
		echo('CHelp.show_cat_details("'.$catname.'");');
		echo('</script>');
			
	}	
?> 