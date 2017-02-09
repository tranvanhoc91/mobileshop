<?php 
@session_start();
require_once 'libraries/functions/readnumber.php';
$read = new readNumber();
?>
<div class="unitcenter" > 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Chi tiết giỏ hàng</h2>
        </div>  
<div id="detailcart" >
	<form action="cart.html" name="detail" id="formdetailcart" method="post">
	<table  cellpadding=0 cellspacing=0 class="tbldetailcart">
		<thead ><tr>
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Giá tiền</th>
			<th>Xóa</th>
		</tr></thead>
		<tbody>
		<?php 
		$i=1;
		$totalPrice  = 0;
		$number = Request::get('numberpro');
		foreach($this->detailcart AS $pro){ ?>
			<tr >
			<td align="center" width=10><?php echo $i; ?></td>
			<td class="title"><?php echo $pro->title; ?></td>
			<td align="center" class="number">
				<input type="text" style="width:30px;text-align:center;" name="numberpro[]" rel="<?php echo $pro->id; ?>" class="number_product" value="<?php echo $pro->number;  ?>" size="1"/></td>
			<td align="center" class="price"><?php echo number_format($pro->price,0,'.','.'); ?></td>
			<td align="center">
				<input type="hidden" name="id[]" value="<?php echo $pro->id; ?>"/>
				<a onclick="return msgConfirm('Bạn có muốn xóa sản phẩm này không?')" class="icon-delete" href="?option=com_cart&task=detailcart&act=delete&id=<?php echo $pro->id; ?>">&nbsp;&nbsp;&nbsp;</a>
			</td>
			</tr>	
			<?php
			$i++;	
			$totalPrice += $pro->price*$pro->number;
		 	} ?>
		
		<tr ><td class="cart-info" colspan=5 >
			<div>Số sản phẩm : <?php echo $this->numberProductType; ?></div>
			<div>Tổng số lượng: <?php echo $this->numberTotalProduct; ?></div>
			<div>Tổng giá trị: <?php echo number_format($totalPrice,0,'.','.');?> VNĐ</div>
			<div>Bằng chữ: <?php echo  $read->docso($totalPrice); ?></div>
			</td></tr>
		</tbody>
	</table>
	
	<div class="msg-left">
		<p>Lưu ý: Giá trên chưa bao gồm cước vận chuyển.</p>
	</div>
	<div class="button-cart">
		<button><a class="order-continue" href="index.php">Tiếp tục mua hàng</a></button>
		<button class="btn-update" type="submit" name="cart" value="update">Cập nhật</button>
		<button><a class="order-continue" href="order.html">Đặt hàng</a></button>
		<button onclick="return msgConfirm('Bạn có chắc muốn hủy giỏ hàng không?')" class="btn-delcart" type="submit" name="cart" value="destroy">Hủy giỏ hàng</button>
	</div>
	</form>
</div>


<div style="text-align:center">   
	     
        <table width="100%" border="0" cellspacing="5" cellpadding="5">
          <tbody>
          <tr><td colspan="4" style="font-size:12px;padding-bottom:15px;">Khách hàng có thể thanh toán qua các thẻ ngân hàng mà công ty đã liên kết dịch vụ sau</td></tr>
          <tr>
            <td><img src="images/card/master.jpg"></td>
            <td><img src="images/card/vbc.jpg"></td>
            <td><img src="images/card/donga.jpg"></td>
            <td><img src="images/card/acb.jpg"></td>
          </tr>
          <tr>
            <td><img src="images/card/techcom.jpg"></td>
            <td><img src="images/card/vib.jpg"></td>
            <td><img src="images/card/tienphong.jpg"></td>
            <td><img src="images/card/dongnama.jpg"></td>
          </tr>
		  <tr>
            <td colspan="4"><center><img src="images/card/nganluong.gif"></center> </td>
          </tr>
        </tbody></table>
</div>

</td></tr></tbody></table>
</div>