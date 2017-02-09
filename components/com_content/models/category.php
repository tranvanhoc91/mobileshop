<?php
class ContentModelCategory extends Model{
    
	function __construct(){
		parent::__construct('com_content');
	}
	
	function action(){
		$this->setView('category');
		$results = $this->getList($this->secid, $this->catid);
		$this->assignToView('contents', $results);
		parent::action();
	}
	
	
	function getList($sid,$cid){
		$order = "   ORDER BY created	DESC ";
		$query = "SELECT a.id as id, a.title as title,introtext,a.image as image,a.alias as aalias,
					s.alias as salias, c.alias as calias
					FROM articles as a
					LEFT JOIN sections as s ON a.section_id = s.id
					LEFT JOIN categories as c ON a.category_id = c.id
					WHERE a.section_id = $sid
						AND a.category_id = $cid 
						AND a.trash = 0
						ANd a.published = 1
						ANd s.published = 1
						ANd c.published = 1
					";
		$query .= $order;
		$this->_dbo->setQuery($query);
		$rows = $this->_dbo->loadObjectList();
		return $rows;
	}
	
}