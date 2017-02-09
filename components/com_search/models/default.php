<?php

class SearchModelDefault extends Model{
    protected $_dbo;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_search');
	}
	
	function action(){
		$this->setView('default');
		
		$this->assignToView('products', $this->getProductSearch());
		//truy van lay ve tong so record cho viec phan trang
		$this->assignToView('total',$this->getTotalProductSearch());
		
		
		parent::action();
	}
	
	function getProductSearch(){
		//$query = " SELECT * FROM `products` WHERE `trash`=0 AND `published` = 1  ";
		$query = "SELECT p.id,p.title,p.price,p.thumb_image,c.alias,p.full_description,s.alias as salias,
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
                            AND s.type		= 'product'
                            ";
			
		if ($this->keyword == '' || $this->keyword=='Từ khóa tìm kiếm') {
			$query .= '';
		}else {
			$query .=" AND (p.title LIKE '%$this->keyword%') ";
		}
		
		
		if($this->manid){
			$query .= " AND manufacturer_id = $this->manid   ";
		}//end this->man_id
		
		if($this->osid){
			$query .= " AND product_os_id = $this->osid   ";
		}//end this->man_id
		
		if ($this->price ){
			switch ($this->price){
				case 1: 
					$query .= " AND price < 1000000";
					break;
				case 2:
					$query .= " AND price BETWEEN 1000000 AND  3000000 ";
					break;
				case 3:
					$query .= " AND price BETWEEN 3000000 AND  5000000 ";
					break;
				case 4:
					$query .= " AND price BETWEEN 5000000 AND  10000000 ";
					break;
				case 5:
					$query .= " AND price BETWEEN 10000000 AND  20000000 ";
					break;
				case 6:
					$query .= " AND price > 20000000 ";
					break;
				default:
					$query .= "";
					break;
			}
		}
		
		
		if ($this->limitStart && $this->limit) {
			$query .= " LIMIT $this->limitStart,$this->limit ";
		}
		
		//truy van du lieu
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
	function getTotalProductSearch(){
		//$query = "  SELECT COUNT(id) FROM `products` WHERE `trash`=0 AND `published` = 1  ";
		
		$query = "SELECT COUNT(p.id)
                       FROM products p
                       LEFT JOIN categories c ON p.category_id = c.id
                       LEFT JOIN sections s ON c.section_id = s.id
                       WHERE p.trash = 0 
                            AND p.published = 1
                            AND c.published = 1
                            AND s.published = 1 
                            AND s.type		= 'product'
                            ";
		
		if ($this->keyword == '' || $this->keyword=='Từ khóa tìm kiếm') {
			$query .= '';
		}else {
			$query .=" AND (p.title LIKE '%$this->keyword%') ";
		}
		
		
		if($this->manid){
			$query .= " AND manufacturer_id = $this->manid   ";
		}//end this->man_id
		
		if($this->osid){
			$query .= " AND product_os_id = $this->osid   ";
		}//end this->man_id
		
		if ($this->price ){
			switch ($this->price){
				case 1: 
					$query .= " AND price < 1000000";
					break;
				case 2:
					$query .= " AND price BETWEEN 1000000 AND  3000000 ";
					break;
				case 3:
					$query .= " AND price BETWEEN 3000000 AND  5000000 ";
					break;
				case 4:
					$query .= " AND price BETWEEN 5000000 AND  10000000 ";
					break;
				case 5:
					$query .= " AND price BETWEEN 10000000 AND  20000000 ";
					break;
				case 6:
					$query .= " AND price > 20000000 ";
					break;
				default:
					$query .= "";
					break;
			}
		}
		
		
		if ($this->limitStart && $this->limit) {
			$query .= " LIMIT $this->limitStart,$this->limit ";
		}
		
		//truy van du lieu
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadResult();
	}
	
    
}