<?php
//ham dieu khien
	function a_display(){
		//dump($tb);
		global $task;
		switch($task){
			case 'status':
				status(Request::get("make","confirm"));
				break;
			case 'remove':
				remove();
				break;
			case 'view':
				view();
					break;
			default:
				viewDefault();
				break;
		}
	}
	
	function ViewRevenues(){
		echo 'ff';
	}
	
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$status = Request::get('status');
		
		$total = countOrderDetail($search,$status);
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',10);
		$pageNav = new Pagination($total,$lms,$lm);
		$orders = getOrderDetail($search,$status);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%"><input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" /></td>
				<td nowrap="nowrap">
					<select name="status">
						<option value="">--Select status--</option>
						<option value="1">Đã thanh toán</option>
						<option value="0">Chưa thanh toán</option>
					</select>
				</td>
				<td><input class="next" type="submit" name="search-fitter" value="Xem" /></td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
			<tr>
				<th width="10"><a href="">STT</a></th>
                <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                <th nowrap="nowrap">Mã hóa đơn</th>
                <th nowrap="nowrap">Khách hàng</th>
                <th nowrap="nowrap">Số lượng SP</th>
                <th nowrap="nowrap">Tổng số tiền</th>
                <th nowrap="nowrap">Ngày lập hóa đơn</th>
                <th nowrap="nowrap">Đã thanh toán</th>
			</tr>
			</thead>
			<?php $i = 1; foreach($orders AS $order) {
				$class = $order->status ? 'published' : 'unpublished';
				$payed = '<a href="index.php?option=order&task=status&id='.$order->customerid.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
				
				$orderStatus 		 = ($order->payed == 0) ? '<a href="index.php?option=order&task=status&make=confirm&id='.$order->customerid.'" title="Confirm this order">Waiting</a>'
																 : '<a href="index.php?option=order&task=status&make=unconfirm&id='.$order->customerid.'" title="Unconfirm this order">Done</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $order->code;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $order->code;?></a></td>
				<td><a href=""><?php echo $order->customer;?></a></td>
				<td><a href=""><?php echo $order->totalquantity;?></a></td>
                <td width="120"><font color="red"><?php echo number_format($order->totalprice,0,'.','.');?> VND</font></td>
                <td><a href=""><?php echo $order->time;?></a></td>
                <td><a href=""><?php echo $orderStatus;?></a></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="13"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		
		echo '<input type="hidden" name="option" value="order" />';
		
	}
	
function viewAdd(&$record=null){
	?>
	<div class="col width-50">
		<fieldset class="adminform">
		<legend>Details</legend>
			<table cellspacing="1" class="admintable">
			<tbody>
	         <tr>
	    		<td valign="top" class="key"><label for="title">Mã hóa đơn</label></td>
	    		<td><span>hd<?php echo $record->id; ?></span></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Ngày lập hóa đơn</label></td>
	    		<td><span><?php echo $record->created; ?></span></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Tên Khách hàng</label></td>
	    		<td><span><?php echo gettAttribute('invoice', 'order_name', $record->invoice_id); ?></span></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Các sản phẩm đặt mua</label></td>
	    		<td colspan="5">
	    		<?php 
	    			$products = getProductsInOrderDetail($record->invoice_id,$record->created);
	    		?>
	    			<ul>
	    				<?php foreach($products AS $product) { ?>
	    				<li>(Số lượng: <?php echo $product->number;	?> ) <?php echo $product->ptitle; ?>  ( Price : <font color="red"><?php echo number_format($product->price,0,'.','.');?> VND</font>) </li>
	    				<?php } ?>
	    			</ul>
	    			
	    		</td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Tổng số tiền thanh toán:</label></td>
	    		<td><span><?php echo getTotalPrice($record->invoice_id,$record->created) ; ?>VND</span></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Tình trạng hóa đơn</label></td>
	    		<?php 
	    			$pay = gettAttribute('invoice', 'payed', $record->invoice_id);
	    			$status =  ($pay == 1) ? 'Đã  thanh toán' : 'Chưa thanh toán';
	    		?>
	    		<td><span><?php echo $status; ?></span></td>
			</tr>
			</tbody>
	        </table><!--end table.admintable-->
	</div>

	<div class="clr"></div>
	<div class="clr"></div>
	<input type="hidden" name="option" value="order" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<div class="clr"></div>
	<?php
	}
	
		
		
	
	function cancel(){
		$option = Request::get('option');
		header('Location:index.php?option='.$option);
	}
	
	
	function view(){
		$order = includeTable();
		$id = Request::get('id');
		$order->load($id[0]);
		viewAdd($order);
	}	
	
	
	
	
	function remove(){
		global $dbo;
		$id = Request::get('id');
		$query1 = " SELECT id FROM order_detail WHERE invoice_id IN(".implode(',',$id).") ";
		$dbo->setQuery($query1);
		$listOrderDetail = $dbo->loadColums();
		
		echo $query = " DELETE FROM `invoice` WHERE WHERE id IN(".implode(',',$id).") ";
		$dbo->setQuery($query);
		$dbo->query();
		
		echo $query = " DELETE FROM `order_detail` WHERE WHERE invoice_id IN(".implode(',',$listOrderDetail).") ";
		$dbo->setQuery($query);
		$dbo->query();
		
		viewDefault();
		Message::setMessage($num.' Item(s) permanently deleted');
		redirect('index.php?option=order');
	}
	
	
/* 	function status(){
		$id = Request::get('id');
		if($id){
			//lay ve doi tuong bang
			$order = includeTable();
			//load du lieu len
			$order->load($id);
			if($order->payed==1) $order->published = 0;
			else $order->published = 1;
			$order->store();
			//header('Location:index.php');
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task=='publish'? 1:0;
		$query = " UPDATE `invoice` SET payed = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
	 */
	
	function status($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		if(gettype($id)=="string") $id=array($id);
		$p = ($task == 'confirm')? 1:0;
		$query = " UPDATE `invoice` SET `payed` = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
    
	
	
	function getAllProduct($s='',$status=''){	//lay tat cac cac user de hien thi ra luoi du lieu
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',10);
		$query = "SELECT od.quantity,od.created,    p.title,p.price,p.product_currency_id,   i.id,i.order_name,i.order_phone,i.status
				  FROM order_detail as od,  invoice as i, products as p
				  WHERE     od.invoice_id = i.id
				  		AND od.product_id = p.id";
		
		if ($s) $query .= " AND (i.order_name LIKE '%$s%') ";
		switch ($status){
			case '1': $query .= " AND i.status = '1' ";
				break;
			case '0': $query .= " AND i.status = '0' ";
				break;
		}
		$query .= " ORDER BY id ASC ";
        $query .= " LIMIT $lms,$lm";
        $dbo->setQuery($query);
        $tmp= $dbo->loadResultArray();
        /*
         * list of id (invoice)
         */
        $subQuerry = "SELECT id FROM invoice";
        $dbo->setQuery($subQuerry);
        $invoiceIdList = $dbo->loadColums();
        foreach ($invoiceIdList as $id){
        	for($i=0;$i<count($tmp);$i++){
        		if($tmp[$i]["id"] == $id) {
        			$tmpRsult[] = $tmp[$i];
//         			unset($tmp[$i]);
        		}
        	}
        	$finalResult[$id] = $tmpRsult;
        	$tmpRsult = array();
        }
       
		return $finalResult;
		
	}
	
	function getCountProduct($s='',$status=''){
		global $dbo;
		$query = "SELECT COUNT(i.id)
								FROM invoice as i
					";
		if ($s !='') $where[] = " (i.order_name LIKE '%$s%') ";
		switch ($status){
			case '1': $where[]= " i.status = '1' ";
				break;
			case '0': $where[]= " i.status = '0' ";
				break;
		}
		if(count($where)>0) $whereClause = " WHERE ".implode(" AND ",$where);
		$query .= $whereClause;
		
		$dbo->setQuery($query);
		
		return $dbo->loadResult();
	}
	
	
/********************Functions for viewDefault*********************/
	//ham lay ve danh sach cac attribute cua san pham nhu : section, categories... de loc
	function getFilterAttribute($filtername){
		global $dbo;
		$dbo->setQuery("SELECT title,id FROM $filtername ");
		$attributes = $dbo->loadObjectList();
			foreach ($attributes as $attribute){
				echo '<option name="" value="'.$attribute->id.'" >'.$attribute->title.'</option>';
			}
			echo $attribute->title;
	}
	
	
	
	
	
	
	
/********************Functions for viewAdd*********************/
	//Ham lay ve ten 	Created by  va Modified by
	function getUser($uid){
		global $dbo;
		$dbo->setQuery("SELECT username FROM users WHERE id =$uid ");
		$user =  $dbo->loadObjectList();
		foreach ($user AS $u){
			return $u->username;
		}
	}
	
	function selectAccessGroup($gid=null){
		global $dbo;
		$dbo->setQuery("SELECT name,id
						FROM groups
						");
		$groups = $dbo->loadObjectList();
		echo '<select name="access" style="width:140px;">';
		echo '<option selected="selected" value="0" >Public</option>';
		foreach ($groups AS $g){ ?>
			<option value="<?php echo $g->id; ?>" <?php if ($g->id == $gid) echo 'selected = "selected"'; ?>> <?php echo $g->name; ?></option>
		<?php  }
		echo '</select>';
	}
	
	function selectProductDiscount($discount_id=''){
		global $dbo;
		$dbo->setQuery("SELECT id,percent,description
						FROM product_discount ORDER BY id ASC ");
		$discounts = $dbo->loadObjectList();
		echo '<select name="product_discount_id">';
		foreach ($discounts AS $discount){ ?>
			<option <?php if($discount->id == $discount_id) echo 'selected="selected"'?> value="<?php echo $discount->id; ?>"><?php echo '('.$discount->percent.'%) '.$discount->description; ?></option>
		<?php }
		echo '</select>';
	}
	
	//ham lay ve nhieu thuoc tinh khac cua san pham
	function selectProductAttribute($table,$properties,$name,$id=''){
		global $dbo;
		$dbo->setQuery("SELECT id,".$properties." FROM ".$table." ORDER BY id ASC");
		$results = $dbo->loadObjectList();
		echo '<select name="'.$name.'">';
		foreach ($results AS $result){ ?>
			<option value="<?php echo $result->id; ?>" <?php if ($result->id == $id) echo 'selected = "selected"'; ?>> <?php echo $result->$properties; ?></option>
		<?php  }
		echo '</select>';
	}
	
	
	//select ngon ngu ho tro cho dien thoai
	
	
		function selectProductLanguage($pro_id='', $lang_id=''){
		global $dbo;
		
		$dbo->setQuery("SELECT id,title
						FROM products
						INNER JOIN product_language
						INNER JOIN rs_product_language
						ON products.id = rs_product_language.product_id AND rs_product_language.language_id = product_language.id
						ORDER BY product_language.id ASC ");
						
		
		
		$results = $dbo->loadObjectList();
		echo '<select name="product_discount_id" multiple="multiple">';
		foreach ($results AS $result){ ?>
			<option <?php if($result->products.id == $pro_id && $result->product_language.id == $lang_id) echo 'selected="selected"'?> value="<?php echo $result->product_id; ?>"><?php echo $result->langtitle; ?></option>
			
		<?php }
		echo '</select>';
		
		
	}
	
	
	
	
	/********************************************************************/
	function getOrderDetail($search,$status){
		$query = "SELECT d.id AS code, i.order_name AS customer, SUM(d.quantity) AS totalquantity,  SUM(p.price) AS totalprice,i.payed AS status,i.id AS customerid,payed,
							DATE_FORMAT(d.created ,' %d/%m/%Y <span>%H:%i</span> ' ) as time
		FROM products AS p 
		INNER JOIN order_detail as d ON d.product_id = p.id
		INNER JOIN invoice AS i ON i.id = d.invoice_id
		";
		
		$where = array();
		
		if ($search) 
			$where[] .= " (`i.order_name` LIKE '%$search%') ";
		
		switch ($status){
			case '1': $where[] .= " `i.payed` = '1' ";
				break;
			case '0': $where[] .= " `i.payed` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$query 	.= 	" GROUP BY i.order_name,d.created";
		$query 	.= 		" ORDER BY d.id ASC";
		
		global $dbo;
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
		
	
	function countOrderDetail($search,$status){
		global $dbo;
		$query = "SELECT COUNT(d.id)
		FROM products AS p 
		INNER JOIN order_detail as d ON d.product_id = p.id
		INNER JOIN invoice AS i ON i.id = d.invoice_id
		 GROUP BY i.order_name,d.created
		";
		
		if ($s) $query .= " AND (`i.order_name` LIKE '%$s%' OR `d.id` LIKE '%$s%')";
		
		switch ($status){
			case '1': $query .= " AND `i.payed` = '1' ";
				break;
			case '0': $query .= " AND `i.payed` = '0' ";
				break;
		}
		
		$query 	.= 		" ORDER BY d.id ASC";
		
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	/**
	 * 
	 * @param unknown_type $table
	 * @param unknown_type $properties
	 * @param unknown_type $id
	 */
	function gettAttribute($table,$properties,$id){
		global $dbo;
		$dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
	}
	
	
	//lay ve tong so tien cua 1 hoa don
	function getTotalPrice($invoiceid,$time){
		$query = "SELECT SUM(p.price) 
		FROM products AS p
		INNER JOIN order_detail AS o ON o.product_id = p.id
		INNER JOIN invoice AS i ON i.id = o.invoice_id
		WHERE o.invoice_id = $invoiceid AND o.created = '$time'
		GROUP BY  i.id,o.created";
		
		
		global $dbo;
		$dbo->setQuery($query);
		return $dbo->loadResult();
		
	}
	
	
	//lay ve cac san pham trong 1 hoa don 
	function getProductsInOrderDetail($invoiceid,$time){
		$query = "SELECT p.title AS ptitle, price,o.quantity As number
		FROM products AS p
		INNER JOIN order_detail AS o ON o.product_id = p.id
		INNER JOIN invoice AS i ON i.id = o.invoice_id
		WHERE o.invoice_id = $invoiceid AND o.created = '$time'
		";
	
	
		global $dbo;
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	
	}
	

?>
