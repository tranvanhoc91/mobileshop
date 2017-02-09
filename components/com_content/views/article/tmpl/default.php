<?php foreach ($this->content AS $content ) ?>

<div class="unitcenter"> 
	<div id="news_slideshow"></div>
	<div news_conten>
		<div id="new_content_list">
		<div id="main" class="column grid-9 ">
      	<div id="main-content" class="region clear-block">
        <div id="VietAd"><div class="view view-frontpage view-id-frontpage view-display-id-page view-dom-id-1">
    		 <div class="view-content">
	        	<div class="pane-content">
    			<div id="node-34592" class="clearfix node node-type-story"><div class="node-inner">
  				<?php if (!Request::get('menuItem')){ ?>
  				<div class="byline">
  					<img src="http://vtcdn.com/sites/default/files/imagecache/avatar-mini/pictures/noavatar2.jpg" alt="" class="imagecache imagecache-avatar-mini" width="27" height="27" />
  					<a href="/user/thatvovan" title="Xem thông tin thành viên thatvovan" class="username">
  						<span class="username user-registered"><?php echo $content->author; ?></span>
  					</a>
  					<p class="date"><?php echo $content->created; ?></p>
  				</div>  
  				<?php }	?>
  				
      			<div class="node-title">
		      		<h2 class="title front"><?php echo $content->title; ?></h2>
			    </div>
  				<div class="content node-content">
  					<?php echo $content->fulltext; ?>
				</div>
				</div></div> <!-- /node-inner, /node -->
  				</div>
    		</div>
    	</div> </div>
  		</div>
  		</div>
		</div><!-- end new_content_list -->
	</div>
	<?php 
		if ( !Request::get('menuItem') )
			echo '{modules poss="relatednews" modules}';
	?>
</div>
