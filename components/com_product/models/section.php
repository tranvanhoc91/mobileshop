<?php

class ProductModelSection extends Model{
    protected $_dbo;
    protected $_secid;
    protected $_sectionTitle;
    protected $total;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_product');
	}
	
	function action(){
		 $this->setView('section');
        $this->getIdByAliasSection();
        
		$productSection		= $this->getProductBySection();
		$this->assignToView('productSection', $productSection);
		
		$this->total	= $this->getTotalProduct();
		$this->assignToView('total', $this->total);
		
		$pageNav = new Pagination($this->total,$this->limitstart,$this->limit);
		$this->assignToView('pageNav',$pageNav);
		
		$this->assignToView('sectionAlias',$this->section);
		$this->assignToView('sectionTitle',$this->_sectionTitle);
       
		
		//get title, keyword, description
		$this->assignToView('title', $this->getTitle($this->section));
		
		parent::action();
	}
	
    function getIdByAliasSection(){
    	if($this->section){
            $this->_dbo->setQuery("SELECT id,title FROM sections WHERE alias='$this->section' AND published = 1 ");
            $section = $this->_dbo->loadObjectList();
            foreach ($section AS $s){
            	$this->_secid			= 	$s->id;
            	$this->_sectionTitle	=	$s->title;
            }
        }
    }
    
    
    function getProductBySection(){
    	if ($this->_secid == 1){
       		$query = " SELECT p.title,p.price,p.thumb_image,p.alias,p.id,p.manufacturer_id,product_discount_id,product_os_id,
        				  o.title as os, m.value as memory, r.title as camera,p.cpu,display_type,p.pin,p.quantity,warranty
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
                            AND p.section_id = $this->_secid
                     ";
    	}
    	if ($this->_secid == 2){
    		$query = " SELECT title,price,thumb_image,alias,id,manufacturer_id,quantity,warranty
                       FROM products p
                       WHERE p.trash = 0 
                            AND published = 1
                            AND section_id = $this->_secid
                     ";
    	}
		$query .= " ORDER BY created_date ASC ";
		
		$query .= " LIMIT $this->limitstart,$this->limit";

        $this->_dbo->setQuery($query);
        return $this->_dbo->loadObjectList();
    }
    
	function getTotalProduct(){
	$query = " SELECT COUNT(p.id) 
					FROM `products` p
					INNER JOIN sections s
					ON s.id = p.section_id
					WHERE trash=0 
						AND p.published=1 
						AND p.section_id = $this->_secid
				";
	/*
		if ($this->_secid){
        	$query .= " AND p.section_id = ".$this->_secid;
        }
      */  
        /*
        if ($this->limistart && $this->limit){
        	$query .= " LIMIT $this->limitstart,$this->limit";
        }
        */
        
        $this->_dbo->setQuery($query);
        return $this->_dbo->loadResult();
    }
    
	function getProductAttributeRelation($table,$properties,$id){
		$this->_dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $this->_dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
    }
    
    
    
    function getTitle($section){
    	$query = "SELECT title FROM sections WHERE alias = '$section' ";
    	$this->_dbo->setQuery($query);
    	return $this->_dbo->loadResult();
    }
}