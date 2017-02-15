<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_search/mod_search.php');
?>

<div class="unit<?php echo $modPositon; ?>" >      
	<div class="title-block" ><span class="title-block"><?php echo $modTitle; ?></span></div>
	<div class="content-block"> 
		<form id="form-search" name="form-search-product" action="index.php?option=com_search" method="get">
        	<input type="hidden" name="option" value="com_search" />
        	<div align="center" class="search_item">
        		<input class="fieldsearch" type="text" name="keyword" onfocus="if(this.value=='Từ khóa tìm kiếm')
{this.value=''};" onblur="if(this.value==''){this.value='Từ khóa tìm kiếm'};"/>
			</div>
        	<div align="center" class="search_item">
        		<?php $searchObject->selectManufacturerProduct(); ?>
        	</div>
        	<div align="center" class="search_item">
        		<?php $searchObject->selectOperatingSystemProduct(); ?>
        	</div>
        	<div align="center" class="search_item" >
        		<select name="price" id="searchprice">
        				<option value="0">Chọn giá sản phẩm</option>
        				<option value="1">Dưới 1 triệu</option>
        				<option value="2">Từ 1 - 3 triệu</option>
        				<option value="3">Từ 3 - 5 triệu</option>
        				<option value="4">Từ 5 - 10 triệu</option>
        				<option value="5">Từ 10 - 20 triệu</option>
        				<option value="6">Trên 20 triệu</option>
        		</select>
        	</div>
        	<div align="center" class="search_item" id="btnserach"><button class="button-search" type="submit"></button></div>
        </form>
	</div> 
</div>  