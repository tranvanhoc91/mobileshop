<?php
defined('_JEXEC') or die('Restricted access');

class modCategoryHelper extends ModuleObject{
	var $_secid;
	
	function __construct(){
		parent::__construct('mod_category');
		$this->_secid = $this->getSectionId();
	}
	
	
	function getSectionId(){
		$this->_dbo->setQuery("SELECT id
								FROM sections
								WHERE type = 'product' AND  published = 1 
								LIMIT 1 ");
		$sectionid = $this->_dbo->loadObject();
		return $sectionid->id;
	}
	
	function getCategory(){
		if ($this->_secid){
			$this->_dbo->setQuery(" SELECT categories.id as cid,categories.title as ctitle,categories.alias as calias, 
									sections.id as sid, sections.alias as salias 
								    FROM categories
    								    INNER JOIN sections
    								    ON categories.section_id = sections.id
								    WHERE categories.published = 1
        								AND  sections.published = 1
        								AND categories.section_id = $this->_secid
        								AND  parent_id = 0	 
								    ORDER BY categories.ordering DESC
								 ");
			return $this->_dbo->loadObjectList();
		}else return NULL;
	}
	
	function getSubCategory($pid){
		if ($pid){
			$this->_dbo->setQuery("SELECT id,title,alias 
							FROM categories
							WHERE published = 1
							AND  parent_id = $pid
							ORDER BY ordering DESC ");
			return $this->_dbo->loadObjectList();
		}else return NULL;
	}
	
}