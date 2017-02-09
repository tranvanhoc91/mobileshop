<?php
class SearchViewDefault extends View{
	var $title;
	function display(){
		
		$this->setTitleSearchResult();
		$this->setLayout('default');
		
		$this->_siteDocument->setTitle("Tìm kiếm sản phẩm");
	}
	
	function setTitleSearchResult(){
		return $this->title = 'Kết quả tìm kiếm sản phẩm';
	}
	
	function includeCssProduct(){
		global $siteDocument;
		//$siteDocument->addStyleSheet('')
	}
} 