<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_poll/mod_poll.php');

global $siteDocument;
$siteDocument->addScript( MODULE.'/'.'mod_poll'.'/'.'asset'.'/'.'js'.'/'.'jquery-1.3.2.js' );
//$siteDocument->addScript( MODULE.'/'.'mod_poll'.'/'.'asset'.'/'.'js'.'/'.'poll.js');
$siteDocument->addStyleSheet(MODULE.'/'.'mod_poll'.'/'.'asset'.'/'.'css'.'/'.'style.css');
?>

<div class="unitright" >      
        <div class="title-block"><span class="title-block"><?php echo $modTitle; ?></span></div>
        <div class="category"> 
        	<div id="category-content">
        	
        	
        	<div id="message" style="display: none;">
            </div>
            <div id="waiting" style="display: none;">
                Please wait<br />
                <img src="modules/mod_poll/asset/images/ajax-loader.gif" title="Loader" alt="Loader" />
            </div>
            
            <div class="test"></div>
        	<form name="pollForm" action="index.php" id="pollForm" method="post" di>
        	
			<table  border="0" cellspacing="0" cellpadding="1" align="center" class="poll">
			<thead>
				<tr>
					<td><h3 class="title_poll"><?php echo $poll->title; ?></h3></td>
				</tr>
			</thead>
				<tbody><tr>
					<td align="center">
						<table class="pollstableborder" cellspacing="0" cellpadding="0" border="0">
						<tbody>
						<?php foreach ($options AS $option) { ?>
							<tr>
								<td class="sectiontableentry2" valign="top">
									<input class="option" type="radio" name="vote[<?php echo $poll->id; ?>]" value="<?php echo $option->id; ?>" />
								</td>
								<td class="sectiontableentry2" valign="top">
									<label class="vote_option" for="vote-option"><?php echo $option->option;?> </label>
								</td>
							</tr>
						<?php } ?>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td>
						<div align="center" style="padding-top:10px;">
							<input type="hidden" name="option" value="com_poll" />
							<button type="submit" class="button" id="voteButton" name="task" value="vote" >Bình chọn</button>&nbsp;
							<button type="submit" class="button" id="viewPollButton"  >Kết quả</button>
						</div>
					</td>
				</tr>
			</tbody></table>
			 </form>
			 
			 
			 
			 
			 </div>
        </div> 
</div>  
