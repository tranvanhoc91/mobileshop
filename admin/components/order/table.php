<?php
class TableOrder extends Table {
	var $id 						= null;
	var $invoice_id						= null;
	var $product_id						= null;
	var $quantity				= null;
	var $price						= null;
	var $created 				= null;
	
	function __construct(){
		parent::__construct('order_detail','id');	
	}
}