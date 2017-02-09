<link rel="icon" href="templates/mobileshop/favico.ico" type="image/icon" />
<?php 
$this->addStyleSheet('templates/webshop/css/styles.css');
$this->addStyleSheet('templates/webshop/css/layout.css');

$this->addStyleSheet('templates/webshop/css/system.css');
$this->addStyleSheet('templates/webshop/css/general.css');

?>
<body>
<div class="wrapper">
		<div class="bg">
				<div class="bg_top"></div>
				<div class="bg_center">
				  <div class="wapper_container">
				  	<div class="header">
						<div class="logo"><div class="bannergroup"></div></div>				
					</div>
					<div class="menutop">
							{modules poss="topmenu" modules}
					</div>
					<div class="wapper_undermenu">
						<div class="wapper_undermenu_left">{modules poss="user1" modules}	</div>
						<div class="wapper_undermenu_right">{modules poss="user2" modules}</div>
						
					</div>
					<div class="shadow_undermenu"></div>
					<div class="content_container_c">
						<div class="left">
						{modules poss="left" modules} 
						<!-- 
			            	<div class="catergory">   
			    				<div class="catergory_title"><div class="catergory_text">	Menu sản phẩm</div></div>
								<div class="module_content"> 			
									<div class="glossymenu">
										<div class="submenu" id="sub13" contentindex="11c" style="display: none; "><div class="cb"></div></div>
									    	<div class="menu_bg" onmouseover="this.className=&#39;menu_bg_hover&#39;" onmouseout="this.className=&#39;menu_bg&#39;">
											<div class="menu_text submenuheader " headerindex="12h"><a style="margin-right:0px" href="http://hoanlong.com.vn/dien-thoai-di-dong/487.html">	Phụ kiện ĐTDĐ</a></div>
											<div class="cb"></div>
											</div>
										<div class="submenu" id="sub14" contentindex="12c" style="display: none; "><a href="http://hoanlong.com.vn/dien-thoai-di-dong/491-pin-a-sac-dtdd.html"><div class="sub_mn_text">Pin &amp; Sạc ĐTDĐ</div></a><a href="http://hoanlong.com.vn/dien-thoai-di-dong/489-trang-tri-dtdd.html"><div class="sub_mn_text">Trang trí ĐTDĐ</div></a><a href="http://hoanlong.com.vn/dien-thoai-di-dong/488-tai-nghe-dtdd.html"><div class="sub_mn_text">Tai nghe ĐTDĐ</div></a><div class="cb"></div></div>
									</div>  
								</div>
			
							</div>
							 -->
						</div>
					  	<div class="right">
							<div class="title_step">
						    	<ul>
						        	<li class="active">
						            	<div><span>Sản phẩm </span></div>
						       	 	</li>
						    	</ul>
							</div>
				 			<div class="wapper_sp_content_container">
								<div class="wapper_sp_content">
								</div>
								<div class="cb"></div>
							</div>
					 </div>
				 </div>			
				<div class="footer">{modules poss="footer" modules}</div>
			</div>
			<div class="bg_footer"></div>
		</div>
	</div>
</body>
