<?php 
global $siteDocument;
$siteDocument->addScript('libraries/js/active-tabs.js');

$productObject = new ProductModelDetail;
foreach ($this->productDetails AS $prodetail)
	$state = ($prodetail->quantity > 0) ? 'Còn hàng' : 'Hết hàng';
	
?>

<div class="unitcenter"> 
<table id="mobile-detail">
    <tbody><tr>
        <td style="width: 179px; text-align:center;">
            <a class="thickbox" href="images/product/<?php echo $prodetail->full_image; ?>" style="width:340px !important; height:190px" title="">
            	<img src="images/product/thumb/<?php echo $prodetail->thumb_image; ?>" style="width:140px !important; height:190px">
            </a> 
        </td>
        <td class="td_lefttop" style="text-align:left;width:450px;">
            <h3 class="redFont"> <?php echo $prodetail->title; ?></h3>
            <ul>
                <li class="underline_li"><b>Giá bán: </b>&nbsp;&nbsp;&nbsp;<span class="redFontBold"><?php echo number_format($prodetail->price,0).'&nbsp;&nbsp;'.$productObject->getProductAttributeRelation( ' product_currency','code',$prodetail->product_currency_id); ?></span> </li>
                <li class="underline_li"><b>Hệ điều hành: </b>&nbsp;&nbsp;&nbsp; <?php echo ucfirst($productObject->getProductAttributeRelation( 'product_os','title',$prodetail->product_os_id)); ?></li>
                <li class="underline_li"><b>Trọng lượng: </b>  <?php echo $prodetail->weight.'&nbsp;g'; ?></li>
                <li class="underline_li"><b>Bảo hành: </b> <?php echo $prodetail->warranty;?> Tháng</li>
                <li class="underline_li"><b>Khuyến mãi: </b><span class="redFontBold"> <?php echo ucfirst($productObject->getProductAttributeRelation( 'product_discount','description',$prodetail->product_discount_id)); ?></span></li>
                <li class="underline_li"><b>Nhà sản xuất:  </b><?php echo $productObject->getProductAttributeRelation( 'manufacturer','name',$prodetail->manufacturer_id);?></li>
                <li class="underline_li"><b>Số lượt xem: </b><?php echo $prodetail->hits; ?></li>
                <li class="underline_li"><b>Tình trạng: </b> <font color="red"><?php echo $state; ?></font></li>
                <?php 
                	if ($prodetail->quantity > 0){
                		echo '<p class="cart">'.$prodetail->addToCart.'</p>';
                	}
                ?>
            </ul>            
            
        </td>
    </tr>
</tbody></table>

<?php 
//Set link cho href cua the a trong tab slider
foreach ($this->route AS $route){
	$link = 'san-pham/detail/'.$route->salias.'/'.$route->alias.'/'.$route->id.'/#';
}
	
?>
<ol id="toc">
    <li><a title="feature" class="active tab" href="<?php echo $link; ?>"><span>Tính năng</span></a></li>
    <li><a title="image" class="tab" href="<?php echo $link; ?>"><span>Hình ảnh</span></a></li>
    <li><a title="comment" class="tab" href="<?php echo $link; ?>" ><span>ý kiến</span></a></li>
</ol>

<div class="content" id="feature">
    <table class="tableBorder100percent">
    <tbody>
        <tr>
            <td class="td_lefttopBold" colspan="2">KÍCH THƯỚC</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Kích thước</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->height.' x '.$prodetail->width.' x '.$prodetail->thickness ;?> mm</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Trọng lượng</td>
            <td style="Border-bottom:1px black dotted !important;"><?php echo $prodetail->weight; ?></td>
        </tr>
        <tr>
            <td class="td_lefttopBold" colspan="2">Hiển thị</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Loại</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->display_type; ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Kích thước</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->display_px.' , '. $prodetail->display_size; ?></td>
        </tr>
        <tr>
            <td class="td_lefttopBold" colspan="2">BỘ NHỚ</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Danh bạ</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->contact;?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Tin nhắn</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->message;?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Email</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->email;?>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Bộ nhớ trong</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getProductAttributeRelation( 'product_memory','value',$prodetail->memory_internal);?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Ram</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getProductAttributeRelation( 'product_memory','value',$prodetail->product_ram_id);?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Hỗ trợ thẻ nhớ</td>
            <td style="border-bottom:1px black dotted !important;">microSD, hỗ trợ lên đến <?php echo $productObject->getProductAttributeRelation( 'product_memory','value',$prodetail->product_memorycard_id);?></td>
        </tr>
        <tr>
            <td class="td_lefttopBold" colspan="2">KẾT NỐI DỮ LIỆU</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">GPRS</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('gprs', $prodetail->id); ?></td>
        </tr>
		<tr>
            <td style="border-bottom:1px black dotted; width: 134px;">GPS</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('gps', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Wifi</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('wifi', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Bluetouch</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('blutouch', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Hỗ trợ kết nối</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getProductAttributeRelation( 'product_connection','title',$prodetail->product_connection_id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Hỗ trợ Sim</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getProductAttributeRelation( 'product_simcard','title',$prodetail->product_simcard_id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Mạng hỗ trợ</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo 'chua xong'; ?></td>
        </tr>
        <tr>
            <td class="td_lefttopBold" colspan="2">TRÒ CHƠI & ỨNG DỤNG&nbsp;</td>
        </tr>
        
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Hệ điều hành</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getProductAttributeRelation( 'product_os','title',$prodetail->product_os_id); ?>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Camera chính</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo ucfirst($productObject->getProductAttributeRelation( 'product_camera','title',$prodetail->product_camera_id)); ?>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Bộ xử lý</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->cpu; ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Radio</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('radio', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Ghi âm</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('recording', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Ghi âm cuộc gọi</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('recording_call', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Ngôn ngữ</td>
            <td style="border-bottom:1px black dotted !important;">Tiếng anh, tiếng việt&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Xem tivi</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('tivi', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Java</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $productObject->getAttributeSimple('java', $prodetail->id); ?></td>
        </tr>
        <tr>
            <td class="td_lefttopBold" colspan="2">PIN</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Pin chuẩn</td>
            <td style="border-bottom:1px black dotted !important;"><?php echo $prodetail->pin; ?>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Chờ</td>
            <td style="border-bottom:1px black dotted !important;">Lên đến 480 giờ&nbsp;</td>
        </tr>
        <tr>
            <td style="border-bottom:1px black dotted; width: 134px;">Đàm thoại</td>
            <td style="border-bottom:1px black dotted !important;">Lên đến 6 giờ 30 phút&nbsp;</td>
        </tr>
    </tbody>
    
    </table>
    
    
    
</div>

<!-- tab 2 -->
<div class="content" id="image" align="center">
    <img src="images/product/test/1.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/2.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/3.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/4.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/5.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/6.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/7.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/8.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
    <img src="images/product/test/9.jpg" style="padding-bottom: 10px;  !important; width:550px !important">
</div>
 
 <!-- tab 3 -->
<div class="content" id="poll">
        <div style="margin-left:50px; font-size:13pt">Hãy <a href="Login.aspx">Đăng Nhập</a> hoặc <a href="dangkythanhvien.aspx">Đăng Ký thành viên</a> để chia sẽ ý kiến của bạn về sản phẩm</div>
        
    <div style="text-align:right; padding:10px 10px 0 0"></div>
    <div id="_ctl0_cphCONTENT_Comment" style="width:640px;">
	<fieldset>
		<legend>
			Ý kiến của bạn đọc
		</legend>
	</fieldset>
</div>
</div>



<div name="space"></div>
<div name="space"></div>
<div class="block_botton">
<table><tbody><tr><td> 
		<div name="space"></div>
		<div class="hcattitle">
            <h2 class="title-component">Sản phẩm đồng giá</h2>
        </div>  
        <?php 
        foreach($this->samePriceProduct AS $product){
			echo  "<div class='product_info' onmouseover=\"Tip('<div class=\'wztooltip\'> <div class=\'wzheader\'><p>".$product->title."<p></div><div class=\'wzcontain\'><div class=\'div-contain\'><p class=\'label\'>Tính năng nổi bật của sản phẩm: </p><p><ul><li>Hệ điều hành: ".$product->os."</li> <li>CPU:".$product->cpu."</li> <li>Bộ nhớ trong: ".$product->memory."</li> <li>Camera: ".$product->camera."</li> <li>Màn hình: ".$product->display_type."</li> <li>Pin: ".$product->pin."</li></ul></p><div></div><div class=\'wzfooter\'><p>Giá bán: ".number_format($product->price,0)." VND</p></div></div>',WIDTH,300,ABOVE,true)\" onmouseout=\"UnTip()\">";
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
</div>
</div>
