<?php
//hien thi san pham len tren trang

require_once 'admin/require.php';

@session_start();
class CartModelDetailcart extends Model {
	var $cart;
	private $act;
	private $id;
	private	$number;
	public $numberProductType;
	public $numberTotalProduct;
	
	function __construct() {
		parent::__construct('com_cart');
		$this->id	= (int)Request::get('id');
	}
	
	function action(){
		//thuc hien viec tuong ung dua vao bien tu client
		$this->setView('detailcart');
		$this->cart	=	addslashes(Request::get('cart'));
		
		switch ($this->cart){
			case 'destroy':
				$this->destroyCart();
				break;
			case 'update':
				$this->updateCart();
				break;
			case 'order':
				break;
		}
		
		$this->act = addslashes(Request::get('act'));
		if ($this->act == 'delete'){
			$this->deleteSessionIdCart($this->id);
			redirect('../cart.html');
		}
		
		
		//assign to view gia tri chi tiet san pham
		$detailcart = $this->getDetailCart();
		$this->assignToView('detailcart',$detailcart);
		//assign so loai san pham 
		$this->numberProductType	=	$this->getNumberProductTypeCart();
		$this->assignToView('numberProductType', $this->numberProductType);
		//assign tong so luong cac loai sp trong gio hang
		$this->numberTotalProduct = $this->getTotalNumberProductCart();
		$this->assignToView('numberTotalProduct', $this->numberTotalProduct);
		
		parent::action();
	}
	
	//lay ve chi tiet gio hang trong $__SESSION['cart']
	function getDetailCart(){
		if(isset($_SESSION['cart'])){
			$cart = array();
			foreach($_SESSION['cart'] AS &$pro) {
				$this->getProductDetailCart($pro);
				$cart[] = $pro;	
			}
			return $cart;
		}
		return false;
	}
	
	//Lay ve chi tiet san pham cua khanh hang
	function getProductDetailCart(&$product){
		$this->_dbo->setQuery(' SELECT title, price FROM products WHERE id = '.$product->id);
		$temp = $this->_dbo->loadObject();
		if($temp){
			$product->title = $temp->title;
			$product->price = $temp->price;
		}
	}
	
	function getTotalNumberProductCart(){
		$this->numberTotalProduct = 0;
		for ($i=0; $i<=count($_SESSION['cart']); $i++){
			$this->numberTotalProduct += $_SESSION['cart'][$i]->number;
		}
		return $this->numberTotalProduct;
	}
	
	function getNumberProductTypeCart(){
		return count($_SESSION['cart']);
	}
	
	//ham nay lay ve tong gia tri cua gio hang
	function getTotal(){
		$total = 0;
		foreach($_SESSION['cart'] AS $pro){
			$this->_db->setQuery("SELECT price FROM products WHERE id = $pro->id AND trash=0 " );
			$total += $this->_dbo->loadResult()*$pro->number;
		} 
		return $total;
	}
	
	function destroyCart(){
		$_SESSION['cart'] = null;
		header('Location:cart.html');
	}
	
	//ham xoa san pham trong gio hang
	function deleteSessionIdCart($id){
		if (count($_SESSION['cart']) == 1){ //chi co 1 loai sp trong gio hang-->huy luon session
			$this->destroyCart();
		}else {
			for($i=0; $i<=count($_SESSION['cart']);$i++){
				if($_SESSION['cart'][$i]->id == $id){
					unset($_SESSION['cart'][$i] );
					return;
				}
			}		
		}
		return false;
	}
	
	function updateCart(){
		$id = Request::get('id');	//mang id cua cac sp co trong cart
		$num =  Request::get('numberpro'); // mang so luong cua cac sp co trong cart
		
		
		
		for($i=0; $i<count($_SESSION['cart']); $i++){
			if ($num[$i] == 0) 
				$this->deleteSessionIdCart($id[$i]);
			else {
				//if($_SESSION['cart'][$i]->id == $id[$i]){
					//dump($this->getCurrentNumberProduct($id[$i]));
					//so sanh so luong cap nhat trong gio hang voi so luong ton cua sp do
					if ($num[$i] <= $this->getCurrentNumberProduct($id[$i])){
						$_SESSION['cart'][$i]->number = $num[$i];
					}else{
						?>
						<script type="text/javascript">
							alert("Note: Sản phẩm <?php echo $_SESSION['cart'][$i]->title; ?> có số lượng tồn là <?php echo $this->getCurrentNumberProduct($id[$i]); ?>. Bạn không thể mua vượt quá số lượng tồn của sản phẩm.");
						</script>
						<?php 
						//$_SESSION['cart'][$i]->number = $_SESSION['cart'][$i]->number;
					}
				//}
			}
		}
	}
	
	/**
	 * Lay ve so luong hien thoi cua san pham co trong gio hang de khi cap nhat so luong cua sp trong gio hang ta so sanh voi so luong hien tai
	 * @param unknown_type $id
	 */
	function getCurrentNumberProduct($id){
		$query = "SELECT quantity FROM products WHERE id = $id";
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadResult();
	}
}




