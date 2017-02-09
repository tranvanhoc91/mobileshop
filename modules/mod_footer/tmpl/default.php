<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_footer/mod_footer.php');

global $siteDocument;
?>
<div class="inner">
	<div class="ja-copyright">
		<div class="bannergroup"></div>
		<?php foreach ($params AS $param){ ?>
			<small><?php echo $param->getElementsByTagName('copyright')->item(0)->nodeValue?></small>
			<small><?php echo $param->getElementsByTagName('author')->item(0)->nodeValue?></small>
			<small><?php echo $param->getElementsByTagName('address')->item(0)->nodeValue?></small>
		<?php } ?>
	</div>
	
</div>


<div class="button_template" style="float: right;">
<form name="frmtmpl" action="index.php?option=com_template&task=changeTmpl" method="post">
	<select name="tmpl" onChange="frmtmpl.submit();" size="1" style="border: none;">
	<?php foreach ($tmpl AS $t) { ?>
		<option <?php if ($t->title == $siteDocument->_template)  echo 'selected = "selected"; '?> value="<?php echo $t->id; ?>"><?php echo $t->title; ?></option>
	<?php } ?>
	</select>
</form>
</div>
