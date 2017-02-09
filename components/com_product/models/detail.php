<?php


class ProductModelDetail extends Model{
    protected $_dbo;
    protected $_secid;
    protected $_catid;
    private $_property;
    var $sectionType;
    
	function __construct(){
        global $dbo;
	   $this->_dbo = $dbo;
       
		parent::__construct('com_product');
	}
	
	function action(){
		$this->setView('detail');
        $this->getIdByAliasSection();
        $this->getIdByAliasCategory();
         
        
        //assignTOView sectionalias
        $this->assignToView('section',$this->section);
        //assignTOView cateogryalias
        $this->assignToView('category',$this->category);
        
        $this->sectionType	= $this->getTypeSection($this->_secid);
        $this->assignToView('secType', $this->sectionType->type);
        
        
		if ($this->id){
			$this->assignToView('id', $this->id);
			$productDetails = $this->getProductDetail();
		    $this->assignToView('productDetails',$productDetails); 
		    $this->updateHitsProduct();
		    
		    //Lay ve nhung san pham cung gia
		   $samePriceProduct = $this->getSamePriceProducts($this->id);
		   $this->assignToView('samePriceProduct', $samePriceProduct);
		   
		   //Lay ve duong link cua san pham dang xem -> lam viec dat dang link cho tab slider
		   $route = $this->getLink($this->id);
		   $this->assignToView('route', $route);
		}
        
		
		$this->assignToView('title', $this->getTitle($this->id));
		
		parent::action();
	}
	
	function getTitleCategory($calias){
		if($calias){
            $this->_dbo->setQuery("SELECT id,title FROM categories WHERE alias='$calias' AND published = 1 ");
           return $this->_dbo->loadObject();
        }
        return false;
	}
	
    function getIdByAliasSection(){
        if($this->section){
            $this->_dbo->setQuery("SELECT id FROM sections WHERE alias='$this->section' AND published = 1 ");
            $secid = $this->_dbo->loadObject();
            return $this->_secid = $secid->id;
        }
        return false;
    }
    
    function getIdByAliasCategory(){
        if($this->category){
            $this->_dbo->setQuery("SELECT id FROM categories WHERE alias='$this->category' AND published = 1 ");
            $catid = $this->_dbo->loadObject();
            return $this->_catid = $catid->id;
        }
        return false;
    }
    
    function getTypeSection($secid){
    	 $this->_dbo->setQuery("SELECT type FROM sections WHERE id= $secid ");
         return $this->_dbo->loadObject();
    }
    
    
    /****************Cac phuong thuc lay ve cac thong tin cua 1 san pham*******************/
    
    function getProductDetail(){
    	$query = " SELECT p.*
                       FROM products p
                       LEFT JOIN categories c ON p.category_id = c.id
                       RIGHT JOIN sections s ON c.section_id = s.id
                       WHERE p.trash = 0 
                            AND p.published = 1
                            AND c.published = 1
                            AND s.published = 1
                            AND p.id = $this->id
                     ";
        $this->_dbo->setQuery($query);
        return $this->_dbo->loadObjectList();
    }
    
    
    function getProductAttributeRelation($table,$properties,$id){
		$this->_dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $this->_dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
    }
    
    
	function getAttributeSimple($properties,$pid){
		$this->_property = $properties;
		$this->_dbo->setQuery("SELECT $this->_property FROM products WHERE id = $pid ");
		$results =  $this->_dbo->loadObject();
		if ($results->$properties == 1) echo 'Có';
		else echo 'Không';
    }
    
    
    function updateHitsProduct(){
    	$this->_dbo->setQuery("UPDATE products SET hits = hits+1 WHERE id = $this->id ");
    	return $this->_dbo->query();
    }   
    
    function getTitle($id){
    	$query = "SELECT title FROM products WHERE id = '$id' ";
    	$this->_dbo->setQuery($query);
    	return $this->_dbo->loadResult();
    }
    
    
    /**
     * Lay ve cac san pham dong gia voi sp dang xem
     * @param unknown_type $id
     */
   	function getSamePriceProducts($id){
   		$priceCurrent = $this->getPriceProduct($id);
   		
   		$query = "SELECT p.id AS id,p.title AS title,p.price AS price,p.thumb_image,c.alias AS calias,p.full_description AS product_info,s.alias as salias,
				o.title as os, m.value as memory, r.title as camera,p.cpu,display_type,p.pin,p.alias AS alias
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
					AND p.id <> $id
					AND price BETWEEN ( $priceCurrent - 500000) and ($priceCurrent + 500000)
				";
   		
   		$query .= " ORDER BY price ASC ";
   		$query .= " LIMIT 10";
   		$this->_dbo->setQuery($query);
   		return $this->_dbo->loadObjectList();
   	}
   	
   	/**
   	 * Lay ve gia cua san pham dang xem
   	 * @param unknown_type $id
   	 */
   	function getPriceProduct($id){
   		$this->_dbo->setQuery("SELECT price FROM products WHERE id = $id");
   		return $this->_dbo->loadResult();
   	}
    
   	function getLink($id){
   		$query = "SELECT p.id AS id,p.alias AS alias, c.alias AS calias,s.alias as salias
		   		FROM products p
		   		LEFT JOIN categories c ON p.category_id = c.id
		   		LEFT JOIN sections s ON c.section_id = s.id
		   		WHERE p.trash = 0
		   		AND p.id = $id
   		";
   		 
   		$this->_dbo->setQuery($query);
   		return $this->_dbo->loadObjectList();
   	}
}