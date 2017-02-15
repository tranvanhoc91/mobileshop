<?php
defined('_JEXEC') or die('Restricted access');
@session_start();
require_once (MODULE.'/mod_cart/mod_cart.php');

?>
<div class="unit<?php echo $modPositon; ?>" >      
	<div class="title-block" ><span class="title-block"><?php echo $modTitle; ?></span></div>
	<div class="content-block"> 
	<?php 
		if(isset($_SESSION['cart'])){
			$totalpro = count($_SESSION['cart']);
			echo '<p class="status">Total: '.$totalpro.' Product</p>';
			echo  '<a class="cart" href="cart.html"><div class="showcart"></div></a>';
		}else {
			echo '<p class="status">Empty Cart</p>';
			echo '<div class="emptycart"></div>';
		}
	?>
	</div> 
</div>  
<?php
//$shoppingcart .= '</div>';

