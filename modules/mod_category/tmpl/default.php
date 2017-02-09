<?php
defined('_JEXEC') or die('Restricted access');

require_once (MODULE.'/mod_category/mod_category.php');


$this->addScript('templates/mobileshop/asset/modules/mod_category/js/ga.js');
$this->addScript('templates/mobileshop/asset/modules/mod_category/js/jquery.min.js');
$this->addScript('templates/mobileshop/asset/modules/mod_category/js/accordion.js');
?>


<?php if ($categories){ ?>
<div class="unit<?php echo $modPosition; ?>" >      
        <div class="title-block"><span class="title-block"><a href="san-pham/default/<?php echo $sectionAlias; ?>/"><?php echo $modTitle; ?></a></span></div>
        <div class="category"> 
        	<div id="category-content">
        	<?php 
	        foreach ($categories AS $category){ ?>
	        	<h3 class="title-category"><a href="<?php echo 'san-pham/default/'.$category->salias.'/'.$category->calias.'/'; ?>"><?php echo $category->ctitle; ?></a></h3>
	        	<div style="display: block;" class="accordion">
	        	<?php $subItems = $categoryObject->getSubCategory($category->cid);
	        	if ($subItems){
	        		foreach ($subItems AS $subItem) { ?>
	        		<ul id="menuList">
						<li><a href="<?php echo 'san-pham/default/'.$category->salias.'/'.$subItem->alias.'/'; ?>"><span class="sub_mn_text"><?php echo $subItem->title; ?></span></a></li>
					</ul>
	        	<?php } }  ?>
	        	</div>
	        <?php }   ?>
			 </div>
        </div> 
</div>  
<?php }   ?>