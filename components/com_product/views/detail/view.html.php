<?php

class ProductViewDetail extends View{
	
	function display(){
		//if ($this->category && $this->id) $this->setLayout('default');
		///else echo 'thong bao tu trong ProductViewDetail: chua cogi';
		
		//var_dump($this->productDetails);
		foreach ($this->productDetails AS $prodetail)
		$prodetail->addToCart = '<span class="add2cart" rel="index.php?option=com_cart&task=add2cart&id='.$prodetail->id.'"></span>';	
		
		
		if ($this->secType == 'product') $this->setLayout('mobile');
		if ($this->secType	== 'accessory') $this->setLayout('accessory');
		//else $this->setLayout();
		
		$this->_siteDocument->setTitle($this->title);
		
		
		
		
		
		
		$this->addScription();
	}
	
	function addScription(){
		$this->_siteDocument->addScript('libraries/js/mootools/mootools.js');
		$this->_siteDocument->addScript('libraries/js/mootools/add2cart.js');
		
		//$this->_siteDocument->addScript('templates/mobileshop/asset/components/com_product/js/jquery.js');
		//$this->_siteDocument->addScript('templates/mobileshop/asset/components/com_product/js/thickbox.js');
	}
} 