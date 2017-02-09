<?php
defined('_JEXEC') or die('Restricted access');

class modMenuHelper extends ModuleObject{
	protected  $menuPosition;
	
	function __construct(){
		parent::__construct('mod_menu');
		$this->menuPosition = $this->getPositionModule();
	}
	function getAllMenu(){
		$this->_dbo->setQuery("	
								SELECT menu.id as mid, parent_id, menu.alias as malias, menu.title as mtitle,
										component,link
								FROM menu INNER JOIN menu_type ON menu_type_id = menu_type.id
									INNER JOIN components ON component_id = components.id
								WHERE menu.published = 1
									AND components.published = 1 	
									AND menu_type.menutype = '$this->menuPosition'
								ORDER BY menu.ordering ASC
							  ");
		return $this->_dbo->loadObjectList();
	}
	
	/*
	function getAllMenu(){
		$this->_dbo->setQuery("SELECT menu.id as mid ,menu.title as mtitle,alias,component/link 
								FROM menu
								INNER JOIN `menu_type`
								ON  `menu_type`.id = menu.menu_type_id
								WHERE menu.published = 1 
								AND menu_type.menutype = '$this->menuPosition'
								ORDER BY ordering ASC
							  ");
		return $this->_dbo->loadObjectList();
	}
	*/
	
}