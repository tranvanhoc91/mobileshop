<?php

class ProductModelDefault extends Model{
    protected $_dbo;
    protected $_secid;
    protected $total;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_product');
	}
	
	function action(){
		$this->setView('default');
        
        $product = $this->getAllProduct('product');
        $this->assignToView('product',$product); 
        
        $accessory	=	$this->getAllProduct('accessory');
        $this->assignToView('accessory',$accessory);
        
		parent::action();
	}
	
    
    function getAllProduct($type){
         $query = " SELECT p.id,p.title,p.price,p.thumb_image,c.alias,p.full_description,s.alias as salias,
        				  o.title as os, m.value as memory, r.title as camera,p.cpu,display_type,p.pin
                       FROM products p
                       LEFT JOIN categories c ON p.category_id = c.id
                       LEFT JOIN sections s ON c.section_id = s.id
                       LEFT JOIN product_os o ON p.product_os_id = o.id
                       LEFT JOIN product_memory m ON p.memory_internal = m.id
                       LEFT JOIN product_camera r ON p.product_camera_id = r.id
                       WHERE p.trash = 0 
                            AND p.published = 1
                            AND c.published = 1
                            AND s.published = 1
                     ";
       
        if ($type)	$query .=  " AND s.type = '$type' ";
        
		$query .= " ORDER BY created_date DESC ";
		
		$query .= " LIMIT $this->limitstart,$this->limit";

        $this->_dbo->setQuery($query);
        return $this->_dbo->loadObjectList();
    }
    
}