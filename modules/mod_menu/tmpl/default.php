<?php
defined('_JEXEC') or die('Restricted access');

require_once (MODULE.'/mod_menu/mod_menu.php');
?>

<div id="top-menu">
    <table border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td style="background-color:Black !important; width:1100px; border:0;">
            <ul id="menu">
            	<?php foreach ($menuList AS $menu) { ?>
            		<li id="home"><a href="<?php echo $menu->malias.'/'; ?>"><b><?php echo $menu->mtitle; ?></b></a></li>
            	<?php } ?>
            	<li style="font-size:14px;float:right;padding:8px 100px 0 0px;font-style:italic;color:yellow;"><script type="text/javascript" src="libraries/js/day.js"></script> <span id="clock"></span></li>
            </ul>
            </td>
        </tr>
    </tbody></table>
</div>
