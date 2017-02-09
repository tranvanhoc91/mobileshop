<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_search/mod_search.php');
?>

<form id="form-search" name="form-search-product" action="index.php?option=com_search" method="get">
<div class="wapper_search">
    <div class="wapper_search_item">
    <input type="hidden" name="option" value="com_search" />
<ul>
    <li><input class="fieldsearch" type="text" name="keyword" value="<? if ($keyword) echo $keyword; else echo 'Từ khóa tìm kiếm'; ?>" onfocus="if(this.value=='Từ khóa tìm kiếm')
{this.value=''};" onblur="if(this.value==''){this.value='Từ khóa tìm kiếm'};"/></li>
     <li><?php $searchObject->selectManufacturerProduct(); ?></li>
     <li><?php $searchObject->selectOperatingSystemProduct(); ?></li>
	<li>
    	<select name="price" id="searchprice">
        				<option value="0">Chọn giá sản phẩm</option>
        				<option value="1">Dưới 1 triệu</option>
        				<option value="2">Từ 1 - 3 triệu</option>
        				<option value="3">Từ 3 - 5 triệu</option>
        				<option value="4">Từ 5 - 10 triệu</option>
        				<option value="5">Từ 10 - 20 triệu</option>
        				<option value="6">Trên 20 triệu</option>
        </select>
    </li>
	<li><button class="button-search" type="submit">Search</button></li>  
</ul>
<div class="clear"></div>
    </div>
             
</div>
 </form>