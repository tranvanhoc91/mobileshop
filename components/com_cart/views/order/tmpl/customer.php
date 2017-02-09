<?php if ($this->dataCustomer) foreach ($this->dataCustomer AS $dataCustomer) ?>
 <div class="unitcenter"> 
    <table><tbody><tr><td>
	<div class="hcattitle-component">
    	<h2 class="title_component_other">Thông tin khách hàng</h2>
    </div>    
    <div id="system-message"> <?php echo $this->msgCustomer; ?></div>
    <form id="form-order" method="post" name="form-order" action="customer.html" >
		<div id="method_delivery2" style="width: 100%; ">
			
<fieldset class="fieldsCollection" id="customer_info_id">
    <legend>Thông tin khách hàng </legend>

<table width="100%" border="0" cellpadding="5" cellspacing="2">
      <tbody><tr class="tab_left_order">
        <td width="28%" align="right"> Họ và tên:</td>
        <td width="72%"><input type="text" name="order_name" class="order_name validate['required']" value="<?php if ($dataCustomer && !Request::get('order_name')) echo $dataCustomer->order_name;  if ($dataCustomer && Request::get('order_name')) echo Request::get('order_name'); if (!$dataCustomer) echo Request::get('order_name'); ?>"><b class="sao_red">*</b></td>
      </tr>
       
 <tr><td align="right"> Địa chỉ:</td>
        <td><input type="text" name="order_address" class="order_address validate['required']" value="<?php if ($dataCustomer && !Request::get('order_address')) echo $dataCustomer->order_address;  if ($dataCustomer && Request::get('order_address')) echo Request::get('order_address'); if (!$dataCustomer) echo Request::get('order_address'); ?>"><b class="sao_red">*</b></td>
      </tr>
       <tr class="tab_left_order">
        <td align="right"> Điện thoại:</td>
        <td><input type="text" name="order_phone" class="order_phone validate['required','phone_inter']" value="<?php if ($dataCustomer && !Request::get('order_phone')) echo $dataCustomer->order_phone;  if ($dataCustomer && Request::get('order_phone')) echo Request::get('order_phone'); if (!$dataCustomer) echo Request::get('order_phone'); ?>"><b class="sao_red">*</b><br>&nbsp;&nbsp;<label id="lbphone" class="note_phone"></label></td>
      </tr>		 
       <tr class="tab_left_order">
        <td align="right">Email:</td>
        <td><input type="text" name="order_email"  class="order_email validate['required','email']" value="<?php if ($dataCustomer && !Request::get('order_email')) echo $dataCustomer->order_email;  if ($dataCustomer && Request::get('order_email')) echo Request::get('order_email'); if (!$dataCustomer) echo Request::get('order_email'); ?>"><b class="sao_red">*</b></td>
      </tr>
</tbody></table>
</fieldset>


<fieldset class="fieldsCollection" id="shipping_info_id">
		<legend>Thông tin gửi hàng</legend>
        <div class="checkbox_guihang">
            <div id="shipping_info_detail" style="width:100%; display:;">
   <table width="100%" border="0" cellpadding="5" cellspacing="2">
		  <tbody><tr class="tab_left_order">
			<td width="28%" align="right"> Họ và tên:</td>
			<td width="72%"><input type="text" name="delivery_name" class="delivery_name validate['required']" value="<?php if ($dataCustomer && !Request::get('delivery_name')) echo $dataCustomer->delivery_name;  if ($dataCustomer && Request::get('delivery_name')) echo Request::get('delivery_name'); if (!$dataCustomer) echo Request::get('delivery_name'); ?>"><b class="sao_red">*</b></td>
		  </tr>
           			<tr><td align="right"> Địa chỉ:</td>
			<td><input type="text" name="delivery_address" class="delivery_address validate['required']" value="<?php if ($dataCustomer && !Request::get('delivery_address')) echo $dataCustomer->delivery_address;  if ($dataCustomer && Request::get('delivery_address')) echo Request::get('delivery_address'); if (!$dataCustomer) echo Request::get('delivery_address'); ?>"><b class="sao_red">*</b></td>
		  </tr>
           <tr class="tab_left_order">
			<td align="right"> Điện thoại:</td>
			<td><input type="text" name="delivery_phone" class="delivery_phone validate['required','phone_inter']" value="<?php if ($dataCustomer && !Request::get('delivery_phone')) echo $dataCustomer->delivery_phone;  if ($dataCustomer && Request::get('delivery_phone')) echo Request::get('delivery_phone'); if (!$dataCustomer) echo Request::get('delivery_phone'); ?>"><b class="sao_red">*</b><br>&nbsp;&nbsp;<label id="lbphone2" class="note_phone"></label></td>
		  </tr>		 
		   <tr class="tab_left_order">
			<td align="right">Email:</td>
			<td><input type="text" name="delivery_email" class="delivery_email validate['email']" value="<?php if ($dataCustomer && !Request::get('delivery_email')) echo $dataCustomer->delivery_email;  if ($dataCustomer && Request::get('delivery_email')) echo Request::get('delivery_email'); if (!$dataCustomer) echo Request::get('delivery_email'); ?>"></td>
		  </tr>
          	</tbody></table>
    </div>
  </fieldset>           
  <fieldset class="fieldsCollection">
  <legend>Comment</legend>
	<table width="100%" border="0" cellpadding="5" cellspacing="2">
		<tbody><tr class="tab_left_order">		
			<td style="padding-left:100px;padding-top:3px;padding-bottom:3px;">
			<textarea name="comment" rows="5" cols="50" ><?php if ($dataCustomer && !Request::get('comment')) echo $dataCustomer->comment;  if ($dataCustomer && Request::get('comment')) echo Request::get('comment'); if (!$dataCustomer) echo Request::get('comment'); ?></textarea>
			 </td>
		  </tr>
	</tbody></table>
    </fieldset>
  <fieldset class="fieldsCollection">
  <legend>Phương thức thanh toán</legend>
	<table width="100%" border="0" cellpadding="5" cellspacing="2">
		<tbody><tr class="tab_left_order">		
			<td style="padding-left:200px;padding-top:11px;padding-bottom:11px;">
				<label><input type="radio" name="order_method" id="order_method1" value="1" > Thanh toán chuyển khoản</label><br>
				<label><input type="radio" name="order_method" id="order_method2" value="2" checked="checked"> Thanh toán tiền mặt khi nhận hàng</label><br>
			 </td>
		  </tr>
	</tbody></table>
    </fieldset>
  <table width="100%" cellspacing="2" cellpadding="5" border="0">
    	<tbody><tr>
        	<td></td>
			<td align="center">
                    <button class="btn-reset" name="reset" type="reset">Nhập lại</button> 
                    <button class="btn-submit" name="submit" type="submit" value="order_customer">Đồng ý</button>
             </td>
		  </tr>
    </tbody></table>
    </div>
</form>
    </td></tr></tbody></table>
</div>

