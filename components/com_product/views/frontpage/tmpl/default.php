<!--  

<div class="unitcenter">
    <div>
		<div id="lofslidecontent45" class="lof-slidecontent" style="width:676px !important; height:auto !important;">
		<div class="preload">
		
		<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/images/image1-small.jpg" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/images/image2-small.jpg" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/images/image3-small.jpg" alt="" /><span>35 Amazing Logo Designs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/images/image4-small.jpg" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
	      </ul>

	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<img src="images/images/image1.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/images/image2.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
				<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/images/image3.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >35 Amazing Logo Designs</a></h2>
				<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
	         </div>
	    </div>

	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/images/image4.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
				<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
	         </div>
	    </div>
		</div>
	</div>
		
		
		
		</div>
	    </div> 
    </div>
 </div>  
-->

 <div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Sản phẩm mới nhất</h2>
        </div>        
        <?php 
        foreach($this->productNew AS $productNew){
        	echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$productNew->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: ".$productNew->os."</li> <li>CPU:".$productNew->cpu."</li> <li>Bộ nhớ trong: ".$productNew->memory."</li> <li>Camera: ".$productNew->camera."</li> <li>Màn hình: ".$productNew->display_type."</li> <li>Pin: ".$productNew->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($productNew->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
            echo  '<a href="san-pham/detail/'.$productNew->salias.'/'.$productNew->alias.'/'.$productNew->id.'/">
                        <img src="images/product/thumb/'.$productNew->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$productNew->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($productNew->price,0).'</span>';
                    
            echo '</div>';
            
        }
        ?>                         
    </td></tr></tbody></table>
    <div class="space"></div>
    
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Sản phẩm siêu cao cấp (Trên 10Tr)</h2>
        </div>        
        <?php 
        foreach($this->product_super_senior AS $product_super_senior){
        	echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$product_super_senior->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: ".$product_super_senior->os."</li> <li>CPU:".$product_super_senior->cpu."</li> <li>Bộ nhớ trong: ".$product_super_senior->memory."</li> <li>Camera: ".$product_super_senior->camera."</li> <li>Màn hình: ".$product_super_senior->display_type."</li> <li>Pin: ".$product_super_senior->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($product_super_senior->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
            echo '                            
                    <a href="san-pham/detail/'.$product_super_senior->salias.'/'.$product_super_senior->alias.'/'.$product_super_senior->id.'/">
                        <img src="images/product/thumb/'.$product_super_senior->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$product_super_senior->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($product_super_senior->price,0).'</span>
                  
                </div>';
        }
        ?>                         
    </td></tr></tbody></table>
    <div class="space"></div>
    
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Sản phẩm cao cấp (Từ 5-10Tr)</h2>
        </div>        
        <?php 
        foreach($this->product_senior AS $product_senior){
        	echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$product_senior->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: ".$product_senior->os."</li> <li>CPU:".$product_senior->cpu."</li> <li>Bộ nhớ trong: ".$product_senior->memory."</li> <li>Camera: ".$product_senior->camera."</li> <li>Màn hình: ".$product_senior->display_type."</li> <li>Pin: ".$product_senior->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($product_senior->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
            echo '                            
                    <a href="san-pham/detail/'.$product_senior->salias.'/'.$product_senior->alias.'/'.$product_senior->id.'/">
                        <img src="images/product/thumb/'.$product_senior->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$product_senior->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($product_senior->price,0).'</span>
                    
                </div>';
        }
        ?>                         
    </td></tr></tbody></table>
    <div class="space"></div>
    
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Sản phẩm phổ thông (Dưới 5Tr)</h2>
        </div>        
        <?php 
        foreach($this->product_common AS $productCommon){
        	echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$productCommon->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: ".$productCommon->os."</li> <li>CPU:".$productCommon->cpu."</li> <li>Bộ nhớ trong: ".$productCommon->memory."</li> <li>Camera: ".$productCommon->camera."</li> <li>Màn hình: ".$productCommon->display_type."</li> <li>Pin: ".$productCommon->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($productCommon->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
            echo '                             
                    <a href="san-pham/detail/'.$productCommon->salias.'/'.$productCommon->alias.'/'.$productCommon->id.'/">
                        <img src="images/product/thumb/'.$productCommon->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$productCommon->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($productCommon->price,0).'</span>
                   
                </div>';
        }
        ?>                         
    </td></tr></tbody></table>
    <div class="space"></div>
    
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Linh kiện mới</h2>
        </div>        
        <?php 
        foreach($this->accessoryNew AS $accessoryNew){
        	echo  "<div class='product_info' >";
            echo '                             
                    <a href="san-pham/detail/'.$productCommon->salias.'/'.$accessoryNew->alias.'/'.$accessoryNew->id.'/">
                        <img src="images/product/thumb/'.$accessoryNew->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$accessoryNew->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($accessoryNew->price,0).'</span>
                   
                </div>';
        }
        ?>                         
    </td></tr></tbody></table>
    <div class="space"></div>
    
</div>

