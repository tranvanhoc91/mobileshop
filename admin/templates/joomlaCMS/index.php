
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MobileShop - Administrator</title>
        <link rel="icon" href="templates/joomlaCMS/favicon.ico" type="image/gif" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="Refresh" content="3600" >
        <?php require_once('head.inc.php'); ?>
    </head>
    <body id="minwidth-body">
        <div id="border-top" class="h_green">
            <div>
                <div>
                	<span class="title" style="padding-left:100px">Hệ thống siêu thị điện thoại di động - MobileShop</span>
                    <span class="version" >Version 1.0 Alpha</span>
                </div>
            </div>
        </div>
        <div id="header-box">
            <div id="module-status">
                <span class="preview">
                    <a target="_blank" href="../">Preview</a>
                </span>
                <a href="#">
                	<?php 
                	global $dbo;
                	$dbo->setQuery("SELECT COUNT(id) FROM contact WHERE view = 0 AND Trash = 0");
                	$contact = $dbo->loadResult();
                	?>
                    <a href="index.php?option=contact"><span class="no-unread-messages"><?php echo $contact; ?></span></a>
                </a>
                <span class="loggedin-users">1</span>
                <span class="logout">
                    <a href="index.php?task=logout">Logout</a>
                </span>
            </div>
            <div id="module-menu">

                <!-- BEGIN: Menu -->
                <ul class="menuTiny" id="menuTiny">
                    <li><a href="#" class="menuTinyLink">Site</a>
                        <ul>
                            <li><a class="icon-16-cpanel" href="index.php">Control panel</a></li>
                            <li><a class="icon-16-user" href="index.php?option=users">User Manager</a></li>
                            <li><a class="icon-16-user" href="index.php?option=invoice">Invoice Manager</a></li>
                            <li><a class="icon-16-config" href="index.php?option=config">Global Configuration</a></li>
                            <li><a class="icon-16-media" href="index.php?option=media">Media Manager</a></li>
                            <li><a class="icon-16-logout" href="index.php?task=logout">Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="menuTinyLink">Menus</a>
                        <ul>
                            <li><a class="icon-16-menu" href="index.php?option=menutypes">Menu Type</a></li>
                            <li><a class="icon-16-menu" href="index.php?option=menus">Menu Manager</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menuTinyLink">Content</a>
                        <ul>
                        	<li><a class="icon-16-article" href="index.php?option=articles">Article Manager</a></li>
                            <li><a class="icon-16-trash" href="index.php?option=articles&task=trash">Article Trash</a></li>
                            <li><a class="icon-16-section" href="index.php?option=sections">Section Manager</a></li>
                            <li><a class="icon-16-category" href="index.php?option=categories">Category Manager</a></li>
                            <li><a class="icon-16-product" href="index.php?option=products">Products Manager</a></li>
                            <li><a class="icon-16-trash" href="index.php?option=products&task=trash">Products Trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="menuTinyLink">Components</a>
                    	<ul>
                    		<li><a class="icon-16-component" href="index.php?option=poll">Poll Manager</a></li>
                    		<li><a class="icon-16-component" href="index.php?option=order">Order Manager</a></li>
                    		<li><a class="icon-16-component" href="index.php?option=component">Component</a></li>
                    		<li><a class="icon-16-component" href="index.php?option=contact">Contact</a></li>
                    		<li><a class="icon-16-component" href="index.php?option=manufacturer">Manufacturer</a></li>
                        	<!-- <li><a class="icon-16-component" href="index.php?option=banner">Banner</a></li>
                        	<li><a class="icon-16-component" href="index.php?option=support">Support</a></li>
                        	<li><a class="icon-16-component" href="index.php?option=weblinks">Weblinks</a></li>
                        	<li><a class="icon-16-component" href="index.php?option=advertisiment">Advertisiment</a></li> -->
                        </ul>
                    </li>
                    <li><a href="#" class="menuTinyLink">Extensions</a>
                    	<ul>
                            <li><a class="icon-16-module" href="index.php?option=modules">Module Manager</a></li>
                            <li><a class="icon-16-themes" href="index.php?option=templates">Templates Manager</a></li>
                            <li><a class="icon-16-language" href="#">Language Manager</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="menuTinyLink">Help</a>
                    	<ul>
                    		<li><a class="icon-16-help" href="index.php?option=help">Help</a></li>
                            <li><a class="icon-16-info" href="index.php?option=module">info</a></li>
                        </ul>
                    </li>
                </ul>
                <script type="text/javascript">
                    var menu=new menu.dd("menu");
                    menu.init("menuTiny","menuTinyHover");
                </script><!-- END: Menu -->	
            </div><!-- end module-menu -->
            <div class="clr"></div>
        </div><!-- end header-box -->
        
        <div id="content-box">
            <div class="border">
                <div class="padding">
                
                    <form id="mainform" action="" method="post" enctype="multipart/form-data">
                        <div id="toolbar-box">
                            <div class="t"><div class="t"><div class="t"></div></div></div>
                            
                            <div class="m">
                            	<div class="toolbar" >
	                            	<?php t_display();  ?>
                            	 </div>
                            </div>
                            
                            <div class="clr"></div>
                            <div class="b"><div class="b"><div class="b"></div></div></div>
                        </div><!-- end toolbar-box -->
                        <div class="clr"></div>
                        
                        <!-- 
                        <div id="submenu-box">
                            <div style="border:1px solid #CCCCCC; padding:5px">
                                <ul id="submenu">
                                    <li><a href="#" class="active">Group manager</a> </li>
                                    <li><a href="#">Member manager</a></li>
                                </ul>
                                <div class="clr"></div>
                            </div>
                        </div>	 -->
                        <!-- end submenu-box -->

                        <!-- BEGIN: element-box -->
                        <div id="element-box">
                            <div class="t"><div class="t"><div class="t"> </div></div></div>
                            <div class="m">
                            	<?php Message::dumpMessage(); ?>
                				<?php a_display(); ?>
                            </div>
                            <div class="clr"></div>
                            <div class="b"><div class="b"> <div class="b"> </div></div></div>
                        </div>
                        <!-- END: 	element -->
                    </form>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <!-- end content-box -->
        
        <div id="border-bottom"><div><div></div></div></div>
        <div id="footer">
            <p class="copyright">
			Copyright © 2012 <a target="_black" href="../index.php">www.mobileshop.com</a>  All Rights Reserved.</p>
			<div style="font-size:11px;color:#000000;text-align:center;">
				<h3 id="r1">Lớp CN09A - Khoa Công Nghệ Thông Tin - Trường Đại học Giao Thông Vận Tải TpHCM</h3>
				<script type="text/javascript">
					var r1=document.getElementById("r1"); //get span to apply rainbow
					var myRainbowSpan=new RainbowSpan(r1, 0, 360, 255, 50, 18); //apply static rainbow effect
					myRainbowSpan.timer=window.setInterval("myRainbowSpan.moveRainbow()", myRainbowSpan.speed);
				</script>
			</div>
        </div>
    </body>
</html>
