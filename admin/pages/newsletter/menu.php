<script type="text/javascript"> <!--
<?php
	echo("menuInit = function() { try { 
		var menuid = 'TAB_USERS';
		
		var areaTopMargin = 15;
		var areaBaseMargin = 25;
		
		var areaTopMarginCB = function(me,stab)
		{								
			h = \"<div style='overflow:hidden;width:100%;height:\" + areaTopMargin + \";background-color: \" + stab.extraBackdrop + \"'>\";
			h += '</div>';
			
			return('');
		};
		
		var areaBaseMarginCB = function( me,stab )
		{
			var h = '<table width=100% height=\"'+areaBaseMargin+'px\"><tr><td align=right valign=center id=orgtxt><div style=\"color:#000;\"><a class=\"txthead\" target=\"_blank\" style=\"text-decoration:none;\" href=\"http://mgtech.in\">Powered by Macgregor Technology Pvt Ltd.</a>&#160;&#160;&#160;&#160;&#160;&#160;</div></td></tr></table>';
			return( h );
		};
		
		var doc=document;
		
		var tabs = new CTabs.tabs(menuid,{
			tabBackground: 'transparent',
			useFullArea: true,
			userTabControl: true, 
			tabSideIsOn: true,
			tabSideCB: function(me)
			{
				return('<div><a class=awtxt href=# title=Refresh onClick=\"' + me.getJSRun('refSelectedIFrame()') + '\">Refresh</a></div>');
			} ,
			areaBackGroundColour: '#ebf2f8',
			tabHeadBackGroundColour: '#ebf2f8',
			roundCorners: false,
			areaBaseMarginCB: areaBaseMarginCB,
			areaBaseMargin:areaBaseMargin
		} );
		
		tabs.addIFrameTab( menuid + 'All',{ name: 'All', iframeURL:'$me?b=newsletter_all', txtColor: '#28A9D3', txtSelectColor: '#28A9D3', tabLImage: 'images/tabs/tabl.png', tabTImage: 'images/tabs/tabt.png', tabRImage: 'images/tabs/tabr.png', extraBackdrop: '#28A9D3', borderSelect: '#fff 1px solid', userTabControl: false } );
		
		tabs.setHTML(0);
	} catch(e) { } } ");
?>
// --></script>

