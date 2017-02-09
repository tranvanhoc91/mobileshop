 <div class="unitcenter"> 
    <table><tbody><tr><td>   
    	<?php 
    	$productObject = new ProductModelCategory;
 		if ($this->productCategory){
        	echo $this->buildSwitchLayoutButtons();
        }
 		?>
        <div class="hcattitle">
            <h2 class="title-component"><?php echo $this->categoryTitle; ?></h2>
        </div> 
        <?php  foreach($this->productCategory AS $product){ ?>
	    	<div class='product_info_list'>
	    		<a href="san-pham/detail/<?php echo $this->sectionAlias.'/'.$product->alias.'/'.$product->id.'/'; ?>"><img class="thumbproduct" src="images/product/thumb/<?php echo $product->thumb_image; ?>" ></a>
	    		<div class="abtract" >
	    			<h3 class="title"> <?php echo $product->title; ?></h3>
		            <ul class="description_product">
		            	<li class="underline_li"><b>Giá bán: </b>&nbsp;&nbsp;&nbsp;<span class="redFontBold"><?php echo number_format($product->price,0);?> VND</span> </li>
		                <li class="underline_li"><b>Hệ điều hành: </b>&nbsp;&nbsp;&nbsp; <?php echo ucfirst($productObject->getProductAttributeRelation( 'product_os','title',$product->product_os_id)); ?></li>
		                <li class="underline_li"><b>Nhà sản xuất:  </b><?php echo $productObject->getProductAttributeRelation( 'manufacturer','name',$product->manufacturer_id);?></li>
		                <?php $quantity =  ($product->quantity>0) ? $product->quantity : 'Hết hàng'; ?>
		                <li class="underline_li"><b>Số lượng:  </b><?php echo $quantity;?></li>
		            </ul> 
	    		</div>           
	   		</div>
	   	<?php } ?>
    </td></tr></tbody></table>
</div>

<?php $this->pageNav->displayPaginationFontEnd(); //phan trang ?>
