<?php

require_once (dirname(__File__).DS.'helpers'.DS.'route.php');

class ProductController extends Controller{
    protected 		$_dbo;
	public 			$_view;
	public 			$_section;
    public 			$_category;
    public 			$template;
    public 			$_id;
    var 			$limitstart;
    var 			$limit;
	
	function __construct(){
	    global $dbo;
	    $this->_dbo = $dbo;
	    $this->limitstart = Request::get('limitstart',0);
        $this->limit		= Request::get('limit',20);
	   parent::__construct('com_product');
	}
	
	function action(){
		 $this->getView();
         $this->getSection();
         $this->getCategory();
         $this->getID();
         
        if($this->_view == 'default') {
        	if ($this->_section) $this->setModelSection();
        	if ($this->_section && $this->_category) $this->setModelCategory();
        	if (!$this->_section && !$this->_category) $this->setModelDefault();
        }
        if($this->_view == 'detail') $this->setModelDetail();
        if(!$this->_view OR $this->_view == 'frontpage') $this->setModelFrontpage();
		parent::action();
	}
	
	//lay ve kieu hien thi view= grid / list/ detail / frontpage
	function getView(){
		return $this->_view = addslashes(Request::get('view','frontpage'));
	}
	
	function getSection(){
		return $this->_section	= 	addslashes(Request::get('section'));
	}
	
	function getCategory(){
		return $this->_category	=	addslashes(Request::get('category'));
	}
	
	function getID(){
		$this->_id	= (int)Request::get('id');
		return $this->_id;
	}
	
	
	function setModelDefault(){
		$this->setModel('default');
        $this->assignToModel('limitstart', $this->limitstart);
        $this->assignToModel('limit', $this->limit);
	}
	
	function setModelSection(){
		$this->setModel('section');
        $this->assignToModel('section',$this->_section);
        $this->assignToModel('limitstart', $this->limitstart);
        $this->assignToModel('limit', $this->limit);
	}
	
	function setModelCategory(){
		$this->setModel('category');
        $this->assignToModel('section',$this->_section);
        $this->assignToModel('category',$this->_category);
        $this->assignToModel('limitstart', $this->limitstart);
        $this->assignToModel('limit', $this->limit);
	}
	
	
	function setModelDetail(){
		$this->setModel('detail');
        $this->assignToModel('section',$this->_section);
        $this->assignToModel('category',$this->_category);
        $this->assignToModel('id',$this->_id);
	}
    
    
    function setModelFrontpage(){
		$this->setModel('frontpage');
         $this->assignToModel('limitstart', $this->limitstart);
        $this->assignToModel('limit', $this->limit);
	}
	
    
}
	
	
	