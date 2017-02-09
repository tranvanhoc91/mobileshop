<?php
class ContentController extends Controller{
	
	function __construct(){
		$this->getView();		
		$this->getModel();
	   parent::__construct('com_content');
	}
	
	function action(){
		$section = $this->getSection();
		$category = $this->getCategory();
		$id = Request::get('id');
		
		if ($section  && !$category  && !$id) {
			$this->setModel('section');
			$this->assignToModel('secid', $this->getIdByAlias('sections', $section));
		}
		if ($section && $category && !$id) {
			$this->setModel('category');
			$this->assignToModel('secid', $this->getIdByAlias('sections', $section));
			$this->assignToModel('catid', $this->getIdByAlias('categories', $category));
		}
		if ($id || $this->_menuItem) {
			$this->setModel('article');
			$this->assignToModel('secid', $this->getIdByAlias('sections', $section));
			$this->assignToModel('catid', $this->getIdByAlias('categories', $category));
			$this->assignToModel('menuItem', $this->_menuItem);
			
			$this->assignToModel('id', $id);
		}
		
		
		
		/*
		
		$view = Request::get('view','blog');
		if (isset($view) && $view == 'blog'){
			$section = $this->getSection();
			$category = $this->getCategory();
			
			if ($category && $section) $this->setModel('category');
			if ($section && !$category) $this->setModel('section');
		}
		
		
		
		
		
		if ($this->_view) $this->setModel($this->_view);
		
		if ($this->_menuItem) 		$menuid = $this->getId('menu', $this->_menuItem);
		if ($this->_section) 		$section = $this->getId('sections', $this->_section);
		if ($this->_category) 		$category = $this->getId('categories', $this->_category);
		
		switch ($this->_view){
			case 'section':
				$this->assignToModel('secid', $section);
				break;
			case 'category':
				break;
			case 'article':
				if ($this->_menuItem) {
					$this->assignToModel('menuid', $menuid);
				}
				if ($this->_section && $this->_category && $this->_id){
					$this->assignToModel('secid', $section);
					$this->assignToModel('category', $section);
					$this->assignToModel('artid', $this->_id);
				}
				break;
		}
		*/
		parent::action();
	}
	
	function getModel(){
		$this->_section = addslashes(Request::get('section'));
		$this->_category = addslashes(Request::get('category'));
		$this->_menuItem = addslashes(Request::get('menuItem'));
		$this->_id = addslashes(Request::get('id'));
	}
	
	function getView(){
		$this->_view = addslashes(Request::get('view'));
	}
	
	function getSection(){
		$section =  addslashes(Request::get('section','tin-tuc'));
		return $section;
	}
	
	function getCategory(){
		$category = addslashes(Request::get('category'));
		return $category;
	}
	
	function getId(){
		$id = (int)addslashes(Request::get('id'));
		return $id;
	}
	
	
	function getIdByAlias($table,$alias){
		$query = "SELECT id FROM $table WHERE alias = '$alias'";
		$this->_dbo->setQuery($query);
		$row = $this->_dbo->loadResult();
		return $row;
	}
	
	/*
	function getId($table,$propety){
		$query = "SELECT id FROM $table WHERE alias = '$propety'";
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadResult();
	}
	
	*/
	
}
	
	
	