<?php
//hien thi san pham len tren trang
@session_start();
class CartModelOrder extends Model {
	protected $_dbo					=	null;
	private $order_name				=	null;
	private $order_address			=	null;
	private $order_phone			=	null;
	private $order_email			=	null;
	private $delivery_name			=	null;
	private $delivery_address		=	null;
	private $delivery_phone			=	null;
	private $delivery_email			=	null;
	private $comment				=	null;
	public $userid;
	
	function __construct() {
		parent::__construct('com_cart');
		global $dbo;
		$this->_dbo	=	$dbo;
		if ($_SESSION['user'])	$this->userid	=	$_SESSION['user']->id;
		$this->getRequestForm();		
	}
	
	function action(){
		$this->setView('order');
		
		if ($_SESSION['user']){
			$dataCustomer = $this->getDataCustomer();
			$this->assignToView('dataCustomer', $dataCustomer);
		}
		
		if (Request::get('submit') == 'order_customer' ){
			if ($this->checkOrderForm() == false){ //co loi trong qua trinh nhpa thong tin
				$msgCustomer = dumpSystemMessage($this->dumError(),1);
			}else { //thong tin khach hang hop le
				if ($this->insertDataCustomer() == true){
					$success = true;
					//đến đây xem như khách hàng đó đã đặt hàng thành công.
					//Lưu TT KH vào CSDL và xóa giỏ hàng
					$invoice_id = $this->getInvoiceID();
					$this->insertOrderDetail($invoice_id->id);
					//cap nhat so luong cua san pham 
					$this->updateNumberProduct();
					//huy gio hang
					$_SESSION['cart'] = null;
				}	
				else
					$success = false; 
			}
			$this->assignToView('msgCustomer', $msgCustomer);
			$this->assignToView('success', $success);
		}
		parent::action();
	}
	
	
	function getRequestForm(){
		$this->order_name		=	addslashes(Request::get('order_name'));
		$this->order_address	=	addslashes(Request::get('order_address'));
		$this->order_phone		=	addslashes(Request::get('order_phone'));
		$this->order_email		=	addslashes(Request::get('order_email'));
		$this->delivery_name	=	addslashes(Request::get('delivery_name'));
		$this->delivery_address	=	addslashes(Request::get('delivery_address'));
		$this->delivery_phone	=	addslashes(Request::get('delivery_phone'));
		$this->delivery_email	=	addslashes(Request::get('delivery_email'));
		$this->comment			=	addslashes(Request::get('comment'));
	}
	
	//phuong thuc lay ve thong tin khach hang da luu trong csdl cua user dang dang nhap
	function getDataCustomer(){
		$query = "SELECT * FROM invoice WHERE user_id = $this->userid";
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
	function insertDataCustomer(){
		$data	=	$this->getDataCustomer();
		if ($data){ //tuc la da co du lieu thong tin khach hang cua user_id nay roi-->update
			$query = "UPDATE `invoice` SET
											`order_name`    	= 	'{$this->order_name}',
                                            `order_address`    	= 	'{$this->order_address}',
                                            `order_phone`    	= 	'{$this->order_phone}',
                                            `order_email`    	= 	'{$this->order_email}',
                                            `delivery_name`    	= 	'{$this->delivery_name}',
                                            `delivery_address`  =	'{$this->delivery_address}',
                                            `delivery_phone`    = 	'{$this->delivery_phone}',
                                            `delivery_email`    = 	'{$this->delivery_email}',
                                            `comment`			=	'{$this->comment}',
                                            `created` 			= 	 Now(),
                                            `payed`				=	0
                                            WHERE user_id 		= $this->userid
                                                        
						";
		}else { //con chua co thi insert
			if (!isset($_SESSION['user'])) { $this->userid = 0; }
			$query = "INSERT INTO `invoice` SET
											`order_name`    	= 	'{$this->order_name}',
                                            `order_address`    	= 	'{$this->order_address}',
                                            `order_phone`    	= 	'{$this->order_phone}',
                                            `order_email`    	= 	'{$this->order_email}',
                                            `delivery_name`    	= 	'{$this->delivery_name}',
                                            `delivery_address`  =	'{$this->delivery_address}',
                                            `delivery_phone`    = 	'{$this->delivery_phone}',
                                            `delivery_email`    = 	'{$this->delivery_email}',
                                            `comment`			=	'{$this->comment}',
                                            `user_id`			=	 $this->userid,
                                            `payed`				=	0,
                                            `created` 			= 	 Now()
                                                        
						";
		}
		$this->_dbo->setQuery($query);
		$customer = $this->_dbo->query();
		if ($customer) return true;
		else return false;
	}
	
	function checkOrderForm(){
		if ($this->order_name == null){
			$this->setError('Vui lòng nhập tên người đặt hàng ', 0);
			return false;	
		}
		if ($this->order_address == null || $this->order_address == ''){
			$this->setError('Vui lòng nhập địa chỉ người đặt hàng ', 0);
			return false;	
		}
		if ($this->order_phone == null){
			$this->setError('Vui lòng nhập số điện thoại người đặt hàng ', 0);
			return false;	
		}
		if (is_numeric($this->order_phone) == false){
			$this->setError('Số điện thoại người đặt hàng không hợp lệ', 0);
			return false;
		}
		
		if ($this->order_email == null){
			$this->setError('Vui lòng nhập email người đặt hàng.', 0);
			return false;
		}
		
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[@]{1}[_a-zA-Z-]*[.]{1}[_a-zA-z-]{2,4}",$this->order_email) ){
			$this->setError('Email không hợp lệ.', 1);
			return false;
		}
		if ($this->delivery_name == null){
			$this->setError('Vui lòng nhập tên người nhận hàng ', 0);
			return false;	
		}
		if ($this->delivery_address == null){
			$this->setError('Vui lòng nhập địa chỉ người nhận hàng ', 0);
			return false;	
		}
		if ($this->delivery_phone == null){
			$this->setError('Vui lòng nhập số điện thoại người đặt hàng ', 0);
			return false;	
		}
		if (is_numeric($this->delivery_phone) == false){
			$this->setError('Số điện thoại người nhận hàng không hợp lệ', 0);
			return false;
		}
		
		if ($this->delivery_email == null){
			$this->setError('Vui lòng nhập email người nhận hàng.', 0);
			return false;
		}
		
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[@]{1}[_a-zA-Z-]*[.]{1}[_a-zA-z-]{2,4}",$this->delivery_email) ){
			$this->setError('Email không hợp lệ.', 1);
			return false;
		}
		if ($this->comment  ){
			if (strlen($this->comment) <= 20){
				$this->setError("Comment phải có nội dung tối thiểu 20 kí tự", 0);
				return false;
			}
		}
		return true;
	}
	
	
	function getInvoiceID(){
		if ($this->userid){
			$query = "SELECT id FROM invoice WHERE user_id = $this->userid";
		}else {
			$query = "SELECT id FROM invoice ORDER BY id DESC LIMIT 1";
		}
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObject();
	}
	
	function insertOrderDetail($invoice_id){
		foreach ($_SESSION['cart'] AS &$c){
			$query = "INSERT INTO `order_detail` SET
											`invoice_id`    	=	$invoice_id,
                                            `product_id`    	= 	$c->id,
                                            `quantity`    		= 	$c->number,
											`created`			=	NOW()";
			$this->_dbo->setQuery($query);
			$this->_dbo->query();
		}
	}
	
	
	function updateNumberProduct(){
		foreach ($_SESSION['cart'] AS &$c){
			$query = "UPDATE `products` SET
						`quantity`    		= quantity - $c->number
						WHERE id = $c->id ";
			$this->_dbo->setQuery($query);
			$this->_dbo->query();
		}
		
		/* for ($i=0; $i<=count($_SESSION['cart']); $i++){
			$number = $_SESSION['cart'][$i]->number;
			$id = $_SESSION['cart'][$i]->id;
			
			
			$query = "UPDATE `products` 
						SET  `quantity` = 2
						WHERE id = 28 ";
                                          
			$this->_dbo->setQuery($query);
			$this->_dbo->query();
		} */
	}
	
	function setError($msg,$type){
		$this->errors[] = $msg;
		$this->numerror += 1;
	}
	
	function dumError(){
		if ($this->numerror >0){
			foreach ($this->errors AS &$err){
				return $err.'<br />';
			}
		}
	}
}