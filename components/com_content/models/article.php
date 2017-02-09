<?php
class ContentModelArticle extends Model{
    
	function __construct(){
		parent::__construct('com_content');
	}
	
	function action(){
		$this->setView('article');
		$content = $this->getArticle($this->id,$this->secid,$this->catid,$this->menuItem);
		
		$this->assignToView('content', $content);
		
		
		//Lay ve metadata
		if ($this->id){
			$rows = $this->getMeta($this->id);
			
			$meta = new stdClass();
			
			foreach ($rows AS $row)
				$meta->title 		= 	$row->title;
			$meta->keyword		=	$row->metakey;
			$meta->desc			=	$row->metadesc;
				
			$this->assignToView('meta', $meta);
		}
		
		
		$this->updateHitsArticle($this->id);
		
		parent::action();
	}
	
	
	function getArticle($id, $secid = '', $catid='',$menuItem=''){
		//neu co menuid : cua menu : gioi-thieu, tuyen-dung, bao-hanh
		if ( isset($menuItem) && $menuItem != '' ){
			$query = "SELECT a.title, a.`fulltext` 
			FROM articles AS a 
			LEFT JOIN categories AS c ON c.id = a.category_id 
			WHERE a.published = 1 
				AND c.alias = '$menuItem' 
				AND trash = 0 
			LIMIT 1;
			";
		}else{
			$query = "SELECT  title, `introtext`, `fulltext`,  author,
						DATE_FORMAT(created ,' %d/%m/%Y <span>%H:%i</span> ' ) as created
					FROM articles 
					WHERE published = 1 
						  AND trash = 0
						  AND id = $id
						  ";
			if ($secid){
				$query .= " AND section_id = $secid";
			}
	
			if ($catid){
				$query .= " AND category_id = $catid ";
			}
		}
		
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
	function getCatidByMenuId($mid){
		$query = "SELECT catid
					FROM menu
					WHERE id = $mid";
		$this->_dbo->setQuery($query);
		$catid = $this->_dbo->loadResult();
		return $catid;
	}
	
	
	function getMeta($id){
		$query = "SELECT title,metakey,metadesc 
		FROM articles 
		WHERE id = ". $id;
		$this->_dbo->setQuery($query);
		$meta =  $this->_dbo->loadObjectList();
		return $meta;
	}
	
	
	function updateHitsArticle($id){
		$query = "UPDATE articles SET hits = hits + 1 WHERE id = ". $id;
		$this->_dbo->setQuery($query);
		
		$this->_dbo->query();
	}
	
}