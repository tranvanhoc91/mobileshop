<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_accessory/mod_accessory.php');

?>

<div class="unit<?php echo $modPositon; ?>" >      
	<div class="title-block" ><span class="title-block"><a href="san-pham/default/<?php echo $sectionAlias.'/'; ?>"><?php echo $modTitle; ?></span></a></div>
	<div class="content-block"> 
		<div class="menuLeft"> 
          <ul> 
          <?php 
          	foreach ($accessories AS $accessory){ ?>
          		<li><a href="san-pham/default/<?php echo $accessory->salias.'/'.$accessory->calias.'/'; ?>" title="<?php echo $accessory->ctitle; ?>/"><?php echo $accessory->ctitle; ?></a></li> 
          <?php }
          ?>
          </ul> 
        </div> 
	</div> 
</div>  