<?php
defined('_JEXEC') or die('Restricted access');

class modHotnews extends ModuleObject{
	
	function __construct(){
		parent::__construct('mod_hotnews');
	}
	
	
	function _buildQuery(){
		$sql = " SELECT p.id AS id,p.title AS title,p.price AS price,p.thumb_image,c.alias AS calias,p.full_description AS product_info,s.alias as salias,
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
		ORDER BY p.created_date DESC 
		LIMIT 5";
		
		return $sql;
	}
	
	function getProducts(){
		$query = $this->_buildQuery();
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
}