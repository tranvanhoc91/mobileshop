<?php

class ProductViewDefault extends View{
	
	function display(){
		$this->setLayout('default');
		$this->_siteDocument->setTitle("Sản phẩm - MobileShop");
	}
} 