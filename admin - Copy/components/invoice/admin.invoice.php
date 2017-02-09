<?php
@session_start();
	function a_display(){
		global $task;
		switch($task){
			case 'edit':
				edit();
				break;
			case 'delete':
				delete();
				break;
			case 'save':
			case 'savex':
				save();
				break;
			case 'status':
				changeUserStatus();
				break;
			case 'publish':
			case 'unpublish':
				updateUserBlock($task);
				break;
			case 'active':
				changeUserActivation();
				break;
			case 'activation':
			case 'unactivation':
				updateActivation($task);
				break;
			case 'add':
				viewAdd();
				break;
			default:
				viewDefault();
				break;
		}
	}
	
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$total = getCountInvoice($search);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$invoices = getAllInvoice($search);
		?>
		
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%"><input type="text" name="search" value="<?php echo $search;?>" /><input style="border-radius:8px;margin-left:5px;background:#ccc;" class="search" type="submit" value="Search" /></td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
            	<tr>
               		<th width="10">STT</th>
                    <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                    <th nowrap="nowrap">Invoice</th>
                    <th nowrap="nowrap">Email</th>
                    <th nowrap="nowrap">Phone</th>
                    <th nowrap="nowrap">Adress</th>
                    <th nowrap="nowrap">KH thành viên</th>
                    <th nowrap="nowrap">Created</th>
                    <th nowrap="nowrap" width="1">ID</th>
               	</tr>
            </thead>
            <tbody>
            <?php 
			$i = 1; foreach($invoices AS $row) {
			?>
            	<tr>
                	<td><?php echo $pageNav->getOfset($i);?></td>
                    <td><input id="actions-box" name="id[]" value="<?php echo $row->id;?>"  type="checkbox"/></td>
                    <td ><a style="color:red;" href=""><?php echo $row->order_name;?></td>
                    <td><a href=""><?php echo $row->order_email;?></td>
                    <td><a href=""><?php echo $row->order_phone;?></td>
                    <td><a href=""><?php echo $row->order_address;?></td>
                    <td nowrap="nowrap" style="color:gray;">
                    	<?php if ($row->user_id) echo '<a href="">'.getUsername($row->user_id).'</a>'; else echo 'None'; ?>
                    </td>
                    <td nowrap="nowrap" style="color:gray;"><?php echo $row->created;?></td>
                    <td nowrap="nowrap" style="color:gray;"><?php echo $row->id;?></td>
              	</tr>
             <?php $i++; } ?>
	            <tr>
					<td style="border:none !important;" colspan="13"><?php $pageNav->displayCpanel();?></td>
				</tr>
            </tbody>
        </table>
		<?php
		echo '<input type="hidden" name="option" value="invoice" />';
	}
	
	
	
	
	
	
	function viewAdd(&$record=null){
	?>
	<div class="col width-45">
		<fieldset class="adminform">
		<legend>Invoice Details</legend>
			<table class="admintable" cellspacing="1">
				<tbody>
					<tr>
						<td class="key" width="150"><label for="name">Invoice Name</label></td>
						<td>
							<input name="order_name" value="<?php if($record) echo $record->order_name;?>" id="name" class="inputbox" size="40" type="text">
						</td>
					</tr>
					<tr>
						<td class="key"><label for="username">Email </label></td>
						<td>
							<input name="order_email" value="<?php if($record) echo $record->order_email;?>" id="username" class="inputbox" size="40" autocomplete="off" type="text" />
						</td>
					</tr>
					<tr>
						<td class="key"><label for="email">Phone</label></td>	
						<td>
							<input class="inputbox" name="order_phone" value="<?php if($record) echo $record->order_phone;?>" id="email" size="40" value="" type="text">
						</td>
					</tr>
					
					<tr>
						<td class="key"><label for="email">Address</label></td>	
						<td>
							<input class="inputbox" name="order_address" value="<?php if($record) echo $record->order_address;?>" id="email" size="40" value="" type="text">
						</td>
					</tr>
					
					<tr>
						<td class="key" valign="top"><label for="gid">Invoice User</label></td>
						<td><?php if ($record) selectInvoiceUser($record->user_id); else selectInvoiceUser(); ?></td>
					</tr>
					
					<?php 
					if ($record && $record->created){ ?>
						<tr>
							<td class="key">Register Date</td>	
							<td><?php echo $record->created; ?></td>
							<input type="hidden" name="created" value="<?php echo $record->created; ?>" />
						 </tr>
					<?php }else { ?> 
						<input type="hidden" name="created" value="<?php echo date("Y-m-d H:i:s"); ?>" />
					<?php } ?> 
				</tbody>
			</table>
		</fieldset>
	</div>
	<div class="clr"></div>
	<input type="hidden" name="option" value="invoice" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<div class="clr"></div>
	<?php
	}
	
	
//Cac function process

	function checkEmail($email){
		if ($email == null){
			Message::setMessage('Please enter email.', 1);
			return false;
		}
		
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[@]{1}[_a-zA-Z-]*[.]{1}[_a-zA-z-]{2,4}",$email) ){
			Message::setMessage('Email is not invalid.', 1);
			return false;
		}
		
		global $dbo;
		$dbo->setQuery("SELECT `email` 
						FROM `users` 
						WHERE `email` = '$email'");
		$result = $dbo->loadResult();
		//neu khong co tra ve gia tri null,neu co tri tra ve email can check
		if ($result){
			Message::setMessage('Email already exists.', 1);
			return false; // tuc la chua ton tai email nay
		}
		return true;
	}
	
	
	function save(){
		global $task;
		
		$invoice = includeTable();
		$invoice->bind();
		
		$name = addslashes(Request::get('order_name'));
		$phone = addslashes(Request::get('order_phone'));
		$mail = addslashes(Request::get('order_email'));
		$address = addslashes(Request::get('order_address'));
		
		if (!$name || !$phone || !is_numeric($phone) || !$address || checkEmail($mail) == false ){
			Message::setMessage('Not ivalid',1);
			switch($task){
				case 'save':
					redirect('index.php?option=invoice');
					break;
				case 'savex':
					redirect('index.php?option=invoice&task=add');
					break;
			}		
		}else{
			//luu vao csdl
			$invoice->order_name		=	$name;
			$invoice->order_phone		=	$phone;
			$invoice->order_email		=	$mail;
			$invoice->order_address		=	$address;
			$invoice->delivery_name			=	'';
			$invoice->delivery_address		=	'';
			$invoice->delivery_phone		=	'';
			$invoice->delivery_email		=	'';
			$invoice->delivery_email		=	Request::get('created');
			$invoice->user_id			=	Request::get('user_id');
			
			if(!$invoice->store()){
				Message::setMessage('False',1);
			}else {
				Message::setMessage('Saved');
			}
			
			switch($task){
				case 'save':
					redirect('index.php?option=invoice');
					break;
				case 'savex':
					redirect('index.php?option=invoice&task=add');
					break;
			}
		}
	}
	
	function setError($msg){
		$errors[] = $msg;
		return $errors;
	}
	
	
	function edit(){
		$invoice = includeTable();
		$id = Request::get('id');
		$invoice->load($id[0]);
		viewAdd($invoice);	
	}
	
	function delete(){
		$id = Request::get('id');
		$invoice = includeTable();
		$invoice->delete($id);
		viewDefault();	
	}
	
	
/************************************************************************************/
	function getAllInvoice($s=''){	//lay tat cac cac user de hien thi ra luoi du lieu
		global $dbo; 
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		
		$query = "SELECT v.*,u.username AS username
				  FROM invoice AS v
				  LEFT JOIN users As u ON u.id = v.user_id
				  ";
		
		if($s) {
			$query .= " WHERE  ( `order_name` LIKE '%$s%' OR `delivery_name` LIKE '%$s%')"; 
		}
		
		$query .= " ORDER BY id ASC LIMIT $lms,$lm ";
		
		
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	
	function getCountInvoice($s=''){
		global $dbo;
		$query = "SELECT COUNT(id) FROM invoice ";
		
		if($s) {
			$query .= " WHERE ( `order_name` LIKE '%$s%' OR `delivery_name` LIKE '%$s%')"; 
		}
		
		
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	
	//Lay ve ten username ->khach hang thanh vien	
	function getUsername($uid){
		global $dbo;
		$dbo->setQuery("SELECT username FROM users WHERE id = '$uid' ");
		$user = $dbo->loadObjectList();
		foreach ($user AS $u)
			return $u->username;
	}
	
	
	function selectInvoiceUser($uid=''){
		global $dbo;
		
		if ($uid){
			$query = "SELECT u.id AS uid,username
			FROM users AS u
			LEFT JOIN invoice AS i ON u.id = i.user_id
			WHERE  u.id NOT IN (SELECT user_id FROM invoice  WHERE user_id <> $uid )";
		}else{
			$query = "SELECT u.id AS uid,username
			FROM users AS u
			LEFT JOIN invoice AS i ON u.id = i.user_id
			WHERE  u.id NOT IN (SELECT user_id FROM invoice  )";
		}
		
		$dbo->setQuery($query);
		$rows = $dbo->loadObjectList();
		echo '<select name="user_id">';
			echo '<option value="0">None</option>';
			foreach ($rows AS $row){?>
				<option <?php if($row->uid == $uid) echo 'selected="selected"'?> value="<?php echo $row->uid; ?>"><?php echo $row->username; ?></option>
			<?php }
			echo '</select>';
	}
	
	
	/*
	function selectInvoiceUser($uid=''){
			global $dbo;
			$dbo->setQuery("SELECT id,username FROM users ORDER BY id ASC ");
			$rows = $dbo->loadObjectList();
			echo '<select name="user_id">';
			echo '<option value = "0" > None </option>';
			foreach ($rows AS $row){?>
				<option <?php if($row->id == $uid) echo 'selected="selected"'; ?> value="<?php echo $row->id; ?>"><?php echo $row->username; ?></option>
			<?php }
			echo '</select>';
		}
*/
?>