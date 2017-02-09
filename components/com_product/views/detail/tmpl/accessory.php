<?php 

global $siteDocument;
//$siteDocument->addScript('libraries/js/jquery/jquery.min.js');
$siteDocument->addScript('libraries/js/active-tabs.js');

$productObject = new ProductModelDetail;
foreach ($this->productDetails AS $prodetail)
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
                <li class="underline_li"><b>Bảo hành: </b> <?php echo $prodetail->warranty;?> Tháng</li>
                <li class="underline_li"><b>Nhà sản xuất:  </b><?php echo $productObject->getProductAttributeRelation( 'manufacturer','name',$prodetail->manufacturer_id);?></li>
                <li class="underline_li"><b>Số lượt xem: </b><?php echo $prodetail->hits; ?></li>
                <p class="cart"><span class="add2cart" rel="?option=order&task=add2cart&id=<?php echo $prodetail->id;?>&format=json" ></span></p>
            </ul>            
            
        </td>
    </tr>
</tbody></table>


    
<ol id="toc">
    <li>
    	<a title='featured' class="active tab" href="http://localhost/mobileshop/san-pham/detail/phu-kien-dtdd/day-cap/23/#" >
    		<span>Tính năng</span>
    	</a>
    </li>
    <li><a title='image' class="tab" href="http://localhost/mobileshop/san-pham/detail/phu-kien-dtdd/day-cap/23/#"><span>Hình ảnh</span></a></li>
</ol>

<div id="featured" class="content">
	<?php echo $prodetail->description; ?>    
</div>
<div id="image" class="content">
 	hinh anh
</div>


</div>
