<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_category/mod_category.php');
//$this->addScript('templates/mobileshop/asset/modules/mod_category/js/ga.js');
//$this->addScript('templates/mobileshop/asset/modules/mod_category/js/jquery.min.js');
//$this->addScript('templates/mobileshop/asset/modules/mod_category/js/accordion.js');
?>
<?php if ($categories){ ?>
<div class="catergory">     
	<div class="catergory_title"><div class="catergory_text"><a style="color:white;" href="san-pham/default/<?php echo $sectionAlias; ?>/"><?php echo $modTitle; ?></a></div></div> 
        <div class="category"> 
        	<div id="category-content">
        		<?php foreach ($categories AS $category){ ?>
        		<div class="glossymenu">
					<div class="submenu" id="sub13" contentindex="11c" style="display: none; "><div class="cb"></div></div>
					<div class="menu_bg" onmouseover="this.className=&#39;menu_bg_hover&#39;" onmouseout="this.className=&#39;menu_bg&#39;">
						<div class="menu_text submenuheader " headerindex="12h"><a href="<?php echo 'san-pham/default/'.$category->salias.'/'.$category->calias.'/'; ?>"><?php echo $category->ctitle; ?></a></div>
						<div class="cb"></div>
					</div>
				</div>  
	        <?php }   ?>
			 </div>
        </div> 
</div>
<?php }   ?>
