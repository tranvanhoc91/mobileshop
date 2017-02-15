<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_support/mod_support.php');
?>
<div class="unit<?php echo $modPositon; ?>" >      
	<div class="title-block" ><span class="title-block"><?php echo $modTitle; ?></span></div>
	<div class="content-block"> 
		<?php foreach ($params AS $param){ ?>
			<div class="line">
				<p>
					<a><center>
						<img src="modules/mod_support/assign/images/skype-128.png?u=<?php echo $param->getElementsByTagName('nickname')->item(0)->nodeValue; ?>&amp;m=g&amp;t=2"></center>
					</a>
				</p>
				<p>
					<center>
						<?php echo $param->getElementsByTagName('fullname')->item(0)->nodeValue . "  " . $param->getElementsByTagName('phone')->item(0)->nodeValue; ?> 
					</center>
				</p>
			</div>
		<?php } ?>
	</div> 
</div>  