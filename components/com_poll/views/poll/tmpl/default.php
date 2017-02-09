<?php 
defined('_JEXEC') or die('Restricted access');
require 'components/com_poll/views/poll/vote.php';
foreach ($pTitle AS $poll);
?>

<div class="unitcenter" > 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Bình chọn ý kiến</h2>
        </div>  
        <div class="com_content">
        	<div class="pollarea">
        		<div  class="title_poll"><?php echo $poll->text; ?></div>
        		<div class="content_poll">
        		<table class="pollstableborder" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr class="sectiontableentry0">
						<td width="100%" colspan="3">
							co		</td>
					</tr>
					<tr class="sectiontableentry0">
						<td align="right" width="25">
							<strong>1</strong>&nbsp;
						</td>
						<td width="30">
							50%
						</td>
						<td width="300">
							<div class="polls_color_1" style="height:4px;width:50%"></div>
						</td>
					</tr>
					<tr class="sectiontableentry1">
						<td width="100%" colspan="3">
							khong 		</td>
					</tr>
					<tr class="sectiontableentry1">
						<td align="right" width="25">
							<strong>1</strong>&nbsp;
						</td>
						<td width="30">
							50%
						</td>
						<td width="300">
							<div class="polls_color_2" style="height:4px;width:50%"></div>
						</td>
					</tr>
					<tr class="sectiontableentry0">
						<td width="100%" colspan="3">
							khong co y kien gi		</td>
					</tr>
					<tr class="sectiontableentry0">
						<td align="right" width="25">
							<strong>0</strong>&nbsp;
						</td>
						<td width="30">
							0%
						</td>
						<td width="300">
							<div class="polls_color_3" style="height:4px;width:0%"></div>
						</td>
					</tr>
				</tbody>
				</table>
        		</div>
        	</div>
        </div>
</td></tr></tbody></table>
</div>
