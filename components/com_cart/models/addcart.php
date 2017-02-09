<?php
//hien thi san pham len tren trang
class CartModelAddcart extends Model {
	var $id;
	function __construct() {
		parent::__construct('com_cart');
		$this->id	=	(int)Request::get('id');
	}
	
	function action(){
		//thuc hien viec tuong ung dua vao bien tu client
		$this->setView('addcart');
		$this->addToCart();
			@session_start();
			$return = json_encode($_SESSION['cart']);
			//echo $return;
			return;
		parent::action();
	}
		
	function addToCart(){
		//Neu da co $_SESSION['cart'] thi kiem tra xem da co sp co id la this->id chua.
		//Neu co roi thi update so luong san pham.Neu chua co thi them sp moi
		//Neu chua ton tai $_SECSSION['cart'] thi khoi tao $_SESSTION['cart'] va them sp
		@session_start();
		if (isset($_SESSION['cart'])){
			$update = $this->updateNumberAddToCart($this->id);
			if ($update == true)//update number sp thanh cong
				return ;
			else //khong co sp nao co trung id de update,tuc la them moi 1 sp vao $_SESSION['cart']
				$this->addNewProductToCart($this->id);
		}else{//neu cua co $_SESSION['cart']
			$this->addNewProductToCart($this->id);
		}
		return 'NOK';
	}
	
	function addNewProductToCart($id){
		$pro = new stdClass();
		$pro->id = $id;
		$pro->number = 1;
		@session_start();
		//$_SESSION['cart'][$id] = $pro;
		$_SESSION['cart'][] = $pro;
		return 'OK';
	}
	
	/*
	function updateNumberAddToCart($id){
		@session_start();
		if (array_key_exists($id, $_SESSION['cart'])) {
			//$_SESSION['cart'][$id]["number"] += 1;
			echo '<pre>';
			print_r($_SESSION['cart']);
			echo '</pre>';
			return true;
		}
		return false;
	}
	*/
	
	//Ham cap nhat so luong san pham mua:
	//Neu trong gio hang da co san pham A ma khach hang tiep tuc mua san pham va lai chon mua tiep sp A 
	function updateNumberAddToCart($id){
		@session_start();
		for($i=0;$i<count($_SESSION['cart']);$i++){
			if($_SESSION['cart'][$i]->id == $id){
				$_SESSION['cart'][$i]->number += 1;	
				return true;
			}
		}			
		return false;
	}
}