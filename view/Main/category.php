<?php
	$mode = 'product';
	for($i=1;$i<10;$i++){
					echo "	<tr>
								<td bgcolor='#FFFFFF'>
									<table width='100%'  border='0' cellspacing='0' cellpadding='0'>
										<tr><td><a href='index.php?mode={$mode}&menu=menu0{$i}'><img src='images/main_menu0{$i}_off.png' width='176' height='30' border='0'  onmouseover=img_change('on') onmouseout=img_change('off')></a></td></tr>
									</table>
								</td>
							</tr>
						";
	}

?>
