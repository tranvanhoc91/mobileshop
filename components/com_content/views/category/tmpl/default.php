<div class="unitcenter"> 
	<div id="news_slideshow"></div>
	<div news_conten>
		<div id="new_content_list">
			
		<div id="main" class="column grid-9 ">
      	<div id="main-content" class="region clear-block">
        <div id="VietAd"><div class="view view-frontpage view-id-frontpage view-display-id-page view-dom-id-1">
    		 <div class="view-content">
        	<div class="views-row views-row-1 views-row-odd views-row-first">
        	
       
        	
        	<?php foreach ($this->contents AS $content) { ?>
				<div id="node-34586" class="clearfix node node-teaser node-type-story"><div class="node-inner">
				  <div class="node-teaser-view">
				  <div class="views-field-field-thumbnail-value"><img style="border:none;" <?php if($content->image) echo 'src="images/article/thumb/'.$content->image.'"'; else echo 'src="media/system/images/no-image.jpg"'; ?> onerror="javascript:loaddefimages(this.id);" class="imagecache-istar-front-latest-articles"></div>
				  <h2 class="views-field-title">
				    <a href="<?php echo $content->salias.'/'.$content->calias.'/'.$content->aalias.'/'.$content->id; ?>/" title="<?php echo $content->title; ?>"><?php echo $content->title; ?></a>
				  </h2>
				
				  <div class="node-teaser-content">
				  <span class="date">08:26</span> <?php echo $content->introtext; ?> </div>
				  </div>
				</div>
				</div> <!-- /node-inner, /node -->
			<?php } ?>
        		
  			</div>
    		</div>
    	</div> </div>
  		</div>
  		</div>
		</div><!-- end new_content_list -->
	</div>
</div>