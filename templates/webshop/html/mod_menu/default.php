<?php
defined('_JEXEC') or die('Restricted access');

require_once (MODULE.'/mod_menu/mod_menu.php');
?>
<div class="nav">
<div id="ja-mainnav">
    <ul class="menu clearfix" id="ja-cssmenu">
    <?php foreach ($menuList AS $menu) { ?>
    	<li class="item2"><div><a href="<?php echo $menu->malias.'/'; ?>"><span><?php echo $menu->mtitle; ?></span></a></div></li>
    <?php } ?>
    </ul>
</div>
</div>
<!-- 
<div id="ja-mainnav">
	<ul class="menu clearfix" id="ja-cssmenu">
		<li class="item2"><div><a href="http://hoanlong.com.vn/may-vi-tinh-a-linh-kien.html"><span>Máy vi tính &amp; linh kiện</span></a></div></li>
	</ul>
</div>

-->