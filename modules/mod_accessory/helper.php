<?php
defined('_JEXEC') or die('Restricted access');

class modAccessoryHelper extends ModuleObject{
	
	function __construct(){
		parent::__construct('mod_accessory');
	}
	
	function getAllAccesory(){
		$this->_dbo->setQuery("SELECT categories.title as ctitle,categories.alias as calias,parent_id,sections.alias as salias
								FROM categories
								INNER JOIN `sections`
								ON  `sections`.id = categories.section_id 	
								WHERE categories.published = 1 
								AND sections.type = 'accessory'
								ORDER BY categories.ordering ASC
							  ");
		return $this->_dbo->loadObjectList();
	}
	
}