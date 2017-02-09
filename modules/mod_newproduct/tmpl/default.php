<?php
defined('_JEXEC') or die('Restricted access');

require_once (MODULE.'/mod_newproduct/mod_newproduct.php');

?>


<div class="unit<?php echo $position; ?>" >      
        <div class="title-block"><span class="title-block"><?php echo $modTitle; ?></span></div>
        <div class="category"> 
        	<div id="category-content">
        	<?php 
	        foreach ($rows AS $row){ ?>
	        <div id="line">
	        	<div class="item"  onmouseover="Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p><?php echo $row->title; ?><p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: <?php echo $row->os; ?></li> <li>CPU:<?php echo $row->cpu; ?></li> <li>Bộ nhớ trong: <?php echo $row->memory; ?></li> <li>Camera: <?php echo $row->camera; ?></li> <li>Màn hình: <?php echo $row->display_type; ?></li> <li>Pin: <?php echo $row->pin; ?></li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: <?php echo number_format($row->price,0); ?> VND</p></div></div>',WIDTH,300,ABOVE,true)" onmouseout="UnTip()" >
		        	<a class="linkpro" href="san-pham/detail/<?php echo $row->salias; ?>/<?php echo $row->alias; ?>/<?php echo $row->id; ?>/">
		        		<div class="thumb">
		        			 <img class="thumb_image_product" src="images/product/thumb/<?php echo $row->thumb_image; ?> " height="45" width="45" />      
		        		</div>
		        		<div class"item-info">
		        			<h4 class="item-title"><?php echo $row->title; ?></h4>
		        			<span class="price"><?php echo number_format($row->price,0); ?> VND </span>
		        		</div>
		        	</a>
	        	</div>
	        </div>
	        <?php }   ?>
			 </div>
        </div> 
</div>  
