<?php


class SearchController extends Controller{
    protected $_dbo;
    var $keyword		= null;
    var $manid			= null;
    var $osid			= null;
    var $price			= null;
	
	function __construct(){
	   global $dbo;
	   $this->_dbo = $dbo;
	   parent::__construct('com_search');
	}
	
	function action(){
		$this->setModel('default');
		$this->getRequestSearch();
		$this->assignToModel('keyword', $this->keyword);
		$this->assignToModel('manid', $this->manid);
		$this->assignToModel('osid', $this->osid);
		$this->assignToModel('price', $this->price);
		$this->assignToModel('limitStart', Request::get('limitstart',0));
		$this->assignToModel('limit', Request::get('limit',10));
		parent::action();
	}
	
	function getRequestSearch(){
		$this->keyword = addslashes(Request::get('keyword'));
		$this->manid	= (int)Request::get('manufacturer_id');
		$this->osid		= (int)Request::get('product_os_id');
		$this->price	= (int)Request::get('price');
	}
	
	
}
	
	
	