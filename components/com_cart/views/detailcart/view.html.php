<?php
class CartViewDetailcart extends View{
	
	function display(){
		$this->_siteDocument->setTitle("Chi tiết giỏ hàng");
		
		if ($this->detailcart){
			$this->setLayout('default');
			$this->includeScriptActionCart();
		}
		else 
			$this->setLayout('emptyCart');
	}
	
	function includeScriptActionCart(){
		$this->_siteDocument->addScript('libraries/js/mootools/mootools.js');
		$this->_siteDocument->addScript('libraries/js/mootools/updateNumberProduct.js');
		$this->_siteDocument->addScript('libraries/js/mootools/deleteIDSessionCart.js');
	}
	
}