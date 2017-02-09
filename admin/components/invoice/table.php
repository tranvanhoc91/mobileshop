<?php
class TableInvoice extends Table {
	var $id 						= null;
	var $user_id					= null;
	var $order_name 				= null;
	var $order_address 				= null;
	var $order_phone				= null;
	var $order_email				= null;
	var $delivery_name				= null;
	var $delivery_address			= null;
	var $delivery_phone				= null;
	var $delivery_email				= null;
	var $comment					= null;
	var $created					= null;
	
	function __construct(){
		parent::__construct('invoice','id');	
	}
}