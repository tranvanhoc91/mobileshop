 <div class="unitcenter"> 
 	{modules poss="slideshow" modules}
 	<div class="space"></div>
 	
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Điện thoại di động</h2>
        </div>        
        <?php 
        foreach($this->product AS $product){
        	echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$product->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật </p><p><ul><li>Hệ điều hành: ".$product->os."</li> <li>CPU:".$product->cpu."</li> <li>Bộ nhớ trong: ".$product->memory."</li> <li>Camera: ".$product->camera."</li> <li>Màn hình: ".$product->display_type."</li> <li>Pin: ".$product->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($product->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
            echo '                              
                    <a href="san-pham/detail/'.$product->salias.'/'.$product->alias.'/'.$product->id.'/">
                        <img src="images/product/thumb/'.$product->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$product->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($product->price,0).'</span>
                </div>';
        }
        ?>                         
    </td></tr></tbody></table>
    
    <div class="space"></div>
    <div class="space"></div>
    <table><tbody><tr><td>   
        <div class="hcattitle">
            <h2 class="title-component">Linh kiện sản phẩm</h2>
        </div>        
        <?php 
        foreach($this->accessory AS $accessory){
        	echo  "<div class='product_info'>";
            echo        ' <a href="san-pham/detail/'.$accessory->salias.'/'.$accessory->alias.'/'.$accessory->id.'/">
                        <img src="images/product/thumb/'.$accessory->thumb_image.' " height="50" width="50" />                                    
                    </a>
                    <div class="product_title">
                        <span>'.$accessory->title.'</span> <br>                        
                    </div>
                    <span class="redFont">'.number_format($accessory->price,0).'</span>
                  
                </div>';
            
        }
        ?>                         
    </td></tr></tbody></table>
    
    
</div>

