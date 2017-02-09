 <div class="unitcenter"> 
    <table><tbody><tr><td>   
    	<?php 
    	$productObject = new ProductModelSection;
 		if ($this->productSection){
        	echo $this->buildSwitchLayoutButtons();
        }
 		?>
        <div class="hcattitle">
            <h2 class="title-component"><?php echo $this->sectionTitle; ?></h2>
        </div> 
        <?php  foreach($this->productSection AS $product){ ?>
	    	<div class='product_info_list'>
	    		<a href="san-pham/detail/<?php echo $this->sectionAlias.'/'.$product->alias.'/'.$product->id.'/'; ?>"><img class="thumbproduct" src="images/product/thumb/<?php echo $product->thumb_image; ?>" ></a>
	    		<div class="abtract" >
	    			<h3 class="title"> <?php echo $product->title; ?></h3>
		            <ul class="description_product">
		            	<li><b>Giá bán: </b>&nbsp;&nbsp;&nbsp;<span class="redFontBold"><?php echo number_format($product->price,0);?> VND</span> </li>
		            	<?php 
		            	if ($product->product_os_id)
		            		echo " <li><b>Hệ điều hành: </b>&nbsp;&nbsp;&nbsp;".ucfirst($productObject->getProductAttributeRelation( 'product_os','title',$product->product_os_id))."</li>";
		            	?>
		                <li><b>Nhà sản xuất:  </b><?php echo $productObject->getProductAttributeRelation( 'manufacturer','name',$product->manufacturer_id);?></li>
		                <li><b>Bảo hành:  </b><?php echo $product->warranty;?> Tháng</li>
		                <li><b>Số lượng:  </b><?php echo $product->quantity;?></li>
		            </ul> 
	    		</div>           
	   		</div>
	   	<?php } ?>
    </td></tr></tbody></table>
</div>

<?php $this->pageNav->displayPaginationFontEnd(); //phan trang ?>
