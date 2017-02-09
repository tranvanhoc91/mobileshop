<?php


class ProductModelFrontpage extends Model{
    protected $_dbo;
    protected $_secid;
    protected $_catid;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_product');
	}
	
	function action(){
		$this->setView('frontpage');
        
        $productNew = $this->getAllProduct('product',10);
        $this->assignToView('productNew',$productNew); 
        
        //assigntoView san pham
        $product_super_senior = $this->getAllProduct('product',10,3);
        $this->assignToView('product_super_senior',$product_super_senior);
        
        $product_senior = $this->getAllProduct('product',10,2);
        $this->assignToView('product_senior',$product_senior);
        
        $product_common = $this->getAllProduct('product',10,1);
        $this->assignToView('product_common',$product_common);
		
        //Linh kien san pham
        $accessoryNew = $this->getAllProduct('accessory',15);
        $this->assignToView('accessoryNew',$accessoryNew); 
        
		parent::action();
	}
	
    
    function getAllProduct($type='',$limit,$price=''){
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
		if ($type){
			$query .= " AND s.type = '$type' ";
		}
         
         if($price == 1){
            $query .= " AND price < 5000000";
         }
         if($price == 2){
            $query .= " AND price BETWEEN 5000000 AND  10000000 ";
         }
         
         if($price == 3){
            $query .= " AND price > 10000000";
         }
        
         $query .= " ORDER BY created_date ASC ";
		if ($limit) $query .= " LIMIT $limit ";


        $this->_dbo->setQuery($query);
        return $this->_dbo->loadObjectList();
    }
    
}