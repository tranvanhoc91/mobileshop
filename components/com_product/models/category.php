<?php

class ProductModelCategory extends Model{
    protected 	$_dbo;
    public  	$_secid;
    public 		$_sectionTitle;
    public		$_catid;
    public 		$_catTitle;
    public 		$total;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_product');
	}
	
	function action(){
		 $this->setView('category');
        $this->getValueByAliasSection();
        $this->getValueByAliasCategory();
        
		$productCategory		= $this->getProductByCategory();
		$this->assignToView('productCategory', $productCategory);
		
		$this->total	= $this->getTotalProduct();
		$this->assignToView('total', $this->total);
		
		$pageNav = new Pagination($this->total,$this->limitstart,$this->limit);
		$this->assignToView('pageNav',$pageNav);
		
		$this->assignToView('sectionAlias',$this->section); //$this->section dc lay tu ben controller
		$this->assignToView('sectionTitle',$this->_sectionTitle);
		$this->assignToView('categoryAlias',$this->category); //$this->category (calias) dc lay tu ben controller
		$this->assignToView('categoryTitle',$this->_catTitle);
       
		//
		$this->assignToView('title', $this->getTitle($this->category));
		
		parent::action();
	}
	
    function getValueByAliasSection(){
    	if($this->section){
            $this->_dbo->setQuery("SELECT id,title FROM sections WHERE alias='$this->section' AND published = 1 ");
            $section = $this->_dbo->loadObjectList();
            foreach ($section AS $s){
            	$this->_secid			= 	$s->id;
            	$this->_sectionTitle	=	$s->title;
            }
        }
    }
    
	function getValueByAliasCategory(){
    	if($this->section){
            $this->_dbo->setQuery("SELECT id,title FROM categories WHERE alias='$this->category' AND published = 1 ");
            $category = $this->_dbo->loadObjectList();
            foreach ($category AS $c){
            	$this->_catid			= 	$c->id;
            	$this->_catTitle		=	$c->title;
            }
        }
    }
    
    
    function getProductByCategory(){
        $query = " SELECT p.title,p.price,p.thumb_image,p.alias,p.id,p.manufacturer_id,product_discount_id,product_os_id,
        				  o.title as os, m.value as memory, r.title as camera,p.cpu,display_type,p.pin,quantity
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
        if ($this->_secid){
        	$query .= " AND p.section_id = ".$this->_secid;
        }
        
    	if ($this->_catid){
        	$query .= " AND c.id = $this->_catid  OR c.parent_id = $this->_catid ";
        }
        
		$query .= " ORDER BY created_date ASC ";
		$query .= " LIMIT $this->limitstart,$this->limit";

        $this->_dbo->setQuery($query);
        return $this->_dbo->loadObjectList();
    }
    
	function getTotalProduct(){
		$query = " SELECT COUNT(p.id) 
					FROM `products` p
					INNER JOIN categories c
					ON c.id = p.category_id
					WHERE trash=0 
						AND p.published=1 
				";
		if ($this->_secid){
        	$query .= " AND p.section_id = ".$this->_secid;
        }
        
    	if ($this->_catid){
        	//$query .= " AND c.id = $this->_catid  OR c.parent_id = $this->_catid ";
        	$query .= " AND c.id = $this->_catid OR c.parent_id = $this->_catid ";
        }
        
        if ($this->limistart && $this->limit){
        	$query .= " LIMIT $this->limitstart,$this->limit";
        }
		
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
    
    function getTitle($category){
    	$query = "SELECT title FROM categories WHERE alias = '$category' ";
    	$this->_dbo->setQuery($query);
    	return $this->_dbo->loadResult();
    }
    
    
}