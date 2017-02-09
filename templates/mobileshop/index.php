<link rel="icon" href="templates/mobileshop/favico.ico" type="image/icon" />
<?php 
//include mootools 

$this->addStyleSheet('templates/mobileshop/css/style.css');
$this->addStyleSheet('media/system/css/pagination.css');
$this->addStyleSheet('media/system/css/message.css');


$this->addScript('libraries/js/validateField.js');
$this->addScript('libraries/js/massage-system.js');
//nut cuon len dau trang
$this->addScript('libraries/js/jquery/jquery-1.4.1.min.js');
$this->addScript('libraries/js/scrollBackToTop.js');

//slideshow
$this->addScript('templates/mobileshop/js/swfobject.js');

?>


<body>


<script src="libraries/js/jquery/wz_tooltip.js" language="javascript"></script>
<div id="toplogo">
	<div align="center">
		<img src="templates/mobileshop/images/banner/logo-1080px.png" alt="" width="1080" height="160">
		<!--  
	    <div id="flashcontent">  
	        <script type="text/javascript">  
	            var so = new SWFObject("templates/mobileshop/images/banner/banner.swf", "mymovie", "1080", "160", "8");  
	            so.addParam("menu", "false");  
	            so.write("flashcontent");  
	        </script>  
	    </div>  
	    -->
	</div> 
</div>
<div id="wrapperMaster">
	<div id="top">
	<div style=" height:10px; width:auto;"></div>
		{modules poss="topmenu" modules}
	</div><!-- end top -->
	
    <div id="left">
		{modules poss="left" modules}     
		<?php 
			global $dbo;
			$option		=	Request::get('option');
			$section 	=	Request::get('section');
			$article	=	Request::get('id');
			
			if ($option == 'com_content' && $section == 'tin-tuc'){
				//bat module bai viet moit nhat/xem nhieu
				if ($article){
					//bat mod tin xem nhieu
				}
				$dbo->query();
			}
		?>
	</div><!-- end left -->
	
	<div id="center">
		<div id="breadcrumbs">{modules poss="breadcrumbs" modules}</div>
	    <div id="render_messager">{message}</div>
	    <div id="component">{component}</div>
	</div> <!-- END center -->
    <div id="right">
    	{modules poss="right" modules}   
    	<?php 
			global $dbo;
			$option		=	Request::get('option');
			$proid	=	Request::get('id');
			
			if (isset($proid) && isset($option) == 'com_product') {
				$query = "UPDATE modules SET published = 1 WHERE module = 'mod_relative_price_product' ";
			}else {
				$query = "UPDATE modules SET published = 0 WHERE module = 'mod_relative_price_product' ";
			}
			$dbo->setQuery($query);
			$dbo->query();
		?>
		
	</div><!-- end right -->
   
</div><!-- end wrapperMaster -->

<div id="bottom"> 
   	<div id="ja-footer" class="wrap">
		<div class="main">
			{modules poss="bottommenu" modules} 
			{modules poss="footer" modules} 	
		</div>
	</div>	
</div><!-- end bottom -->	

</body>
