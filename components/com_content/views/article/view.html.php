<?php
class ContentViewArticle extends View{
	function display(){
		$this->setLayout('default');
		
		switch (Request::get('menuItem')){
			case 'tuyen-dung':
				$this->_siteDocument->setTitle('Tuyển dụng');
				break;
			case 'bao-hanh':
				$this->_siteDocument->setTitle("Bảo hành");
				break;
			case 'gioi-thieu':
				$this->_siteDocument->setTitle("Giới thiệu");
				break;
			default:
				$this->_siteDocument->setTitle($this->meta->title);
				$this->_siteDocument->setKeywords($this->meta->keyword);
				$this->_siteDocument->setDescription($this->meta->desc);
		}
	}
}