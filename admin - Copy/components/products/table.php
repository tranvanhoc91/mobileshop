<?php
class TableProducts extends Table {
	var $id 						= null;
	var $title						= null;
	var $alias						= null;
	var $thumb_image				= null;
	var $full_image					= null;
	var $price						= null;
	var $published					= null;
	var $section_id					= null;
	var $category_id				= null;
	var $manufacturer_id			= null;
	var $short_description			= null;
	var $full_description			= null;
	var $weight						= null;
	var $width						= null;
	var $height						= null;
	var $thickness					= null;
	var $product_discount_id		= null;
	var $product_currency_id 		= null;
	var $product_style_id 			= null;
	var $video_call 				= null;
	var $recording 					= null;
	var $recording_call				= null;
	var $java						= null;
	var $music 						= null;
	var $radio 						= null;
	var $tivi 						= null;
	var $wifi 						= null;
	var $blutouch 					= null;
	var $gps 						= null;
	var $gprs 						= null;
	var $contact 					= null;
	var $message 					= null;
	var $email						= null;
	var $product_camera_id 			= null;
	var $product_simcard_id 		= null;
	var $product_connection_id 		= null;
	var $memory_internal 			= null;
	var $product_memorycard_id		= null;
	var $product_ram_id				= null;
	var $product_os_id 				= null;
	var $display_type 				= null;
	var $display_px 				= null;
	var $display_size				= null;
	var $display_touch_id			= null;
	var $cpu		 				= null;
	var $pin		 				= null;
	var $quantity					= null;
	var $warranty					= null;
	var $hits						= null;
	var $ordering					= null;
	var $access						= null;
	var $created_date 				= null;
	var $created_by 				= null;
	var $modified_by				= null;
	var $trash						= null;
	
	function __construct(){
		parent::__construct('products','id');	
	}
}