<?php
	echo('<table style="margin: 0 auto; width:75%;min-width:1026px;">');
	echo( '<tr width="100%">
					<td align="center"> ');
	
	if( isset( $_GET[ 'a' ] ) )
	{
		require( 'lib/pages/'.$_GET[ 'a' ].'.php' );
	}	
	else
	{
		echo('<div id="slider">
						<img class="active" style="width:1025px;height:468px;" src="img/home/img01.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img02.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img03.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img04.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img05.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img06.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img07.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img08.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img09.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img10.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img11.jpg" alt="1" />
						<img style="width:1025px;height:468px;" src="img/home/img12.jpg" alt="1" />
			</div>');
		
	}
	
	echo( '</td><!-- table cell close -->
				</tr><!-- table row close -->
			</table><!-- table close -->' );
	//echo('</div>');
?>