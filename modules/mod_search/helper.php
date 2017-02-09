<?php
defined('_JEXEC') or die('Restricted access');

class modSearchHelper extends ModuleObject{
	private $_manufacturer;
	private $_os;
	
	function __construct(){
		parent::__construct('mod_search');
	}
	
	function selectOperatingSystemProduct(){
		$this->_dbo->setQuery("SELECT id,title
							  FROM `product_os` 
							  ORDER BY id ASC");
		$this->_os = $this->_dbo->loadObjectList();
		echo '<select name="product_os_id">';
			echo '<option value="0">Chọn hệ điều hành</option>';
		foreach ($this->_os AS $os){
			echo '<option value="'.$os->id.'">'.$os->title.'</option>';
		}
		echo '</select>';
	}
	
	
	function selectManufacturerProduct(){
		$this->_dbo->setQuery("SELECT id,`name`
							  FROM `manufacturer` 
							  ORDER BY id ASC");
		$this->_manufacturer = $this->_dbo->loadObjectList();
		
		echo '<select name="manufacturer_id" >';
			echo '<option value="0">Chọn nhà sản xuất</option>';
		foreach ($this->_manufacturer AS $man){
			echo '<option value="'.$man->id.'">'.$man->name.'</option>';
		}
		echo '</select>';
	}
	
}
