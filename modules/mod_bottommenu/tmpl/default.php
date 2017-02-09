<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_footer/mod_footer.php');
?>

<div class="ja-footnav clearfix">
	<ul class="ja-links">
		<li class="layout-switcher">
			<a class="ja-tool-switchlayout" href="javascript:location.reload(true)" title="Desktop Version"><span>Refesh</span></a></li>
		<li class="top"><a href="/vnzenscom/#Top" title="Back to Top">Trên cùng</a></li>
	</ul>
	
	<ul id="mainlevel-nav">
	<?php foreach ($menuList As $menu) { ?>
		<li class="ja-firstitem">
			<a href="<?php echo $menu->malias; ?>/" class="mainlevel-nav"><?php echo $menu->mtitle; ?></a>
		</li>
	<?php } ?>
	</ul>
</div>