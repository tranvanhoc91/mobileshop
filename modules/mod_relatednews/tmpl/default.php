<?php
defined('_JEXEC') or die('Restricted access');

require_once (MODULE.'/mod_relatednews/mod_relatednews.php');



?>

<div id="modulenews">
	<div class="moduleheader">
		<h2 class="moduletitle"><?php echo $moduletitle;?></h2>
	</div>
	<div class="modulecontent">
		<ul class="relatednews">
		<?php foreach ($relatedArticles AS $article) { ?>
			<li><a href="<?php echo Request::get('section').'/'.$article->calias.'/'.$article->aalias.'/'.$article->id; ?>/"><?php echo $article->title?></a><span>(<?php echo $article->created; ?>)</span></li>
		<?php } ?>
		</ul>
	</div>
</div>