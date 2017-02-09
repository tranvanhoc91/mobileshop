<?php
//ham dieu khien
	function a_display(){
		//dump($tb);
		global $task;
		switch($task){
			case 'delete':
				delete();
				break;
			case 'clean':
				clean();
				break;
			case 'remove':
				remove();
				break;
			case 'restore':
				restore();
				break;
			case 'view':
				updateView();
				view();
				break;
			case 'cancle':
				cancel();
				break;
			case 'trash':
				viewTrash();
				break;
			default:
				viewDefault();
				break;
		}
	}
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$status = Request::get('status');
		$replied 	=	Request::get('replied');
		$total = countContact(0,$search,$status,$replied);
		$lms = Request::get('limitstart',0);
		
		$pageNav = new Pagination($total,$lms,25);
	
		$contacts = getAllContact(0,$search,$status,$replied);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%">
					<input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" />
					<a href="index.php?option=contact&task=trash">Trash(<?php echo getContactTrash(); ?>)</a>
				</td>
				<td nowrap="nowrap">
					<select name="status">
						<option value="">--Select status--</option>
						<option value="1">Đã đọc</option>
						<option value="0">Chưa đọc</option>
					</select>
					<select name="replied">
						<option value="">--Select reply--</option>
						<option value="1">Đã trả lời</option>
						<option value="0">Chưa trả lời</option>
					</select>
					<input class="next" type="submit" name="search-fitter" value="Xem" />
				</td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
			<tr>
				<th width="10"><a href="">STT</a></th>
                <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                <th nowrap="nowrap">Title</th>
                <th nowrap="nowrap">Fullname</th>
                <th nowrap="nowrap">Email</th>
                <th nowrap="nowrap"><a href="">Created</a></th>
                <th nowrap="nowrap"><a href="">Reply</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($contacts AS $contact) { 
				$txt = ($contact->replied == 0) ? 'Waiting' : 'Done';
				
				if ($contact->replied == 0 ){
					$reply = '<font color="red">'.$txt.'</font>';
				}else
					$reply = $txt;
			?>
			<?php if ($contact->view == 0 ) { ?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $contact->id;?>"  type="checkbox"/></td>
				<td><a href="index.php?option=contact&task=view&id=<?php echo $contact->id?>"><?php echo $contact->title;?></a></td>
				<td><a href=""><?php echo $contact->fullname;?></a></td>
				<td><a href=""><?php echo $contact->email;?></a></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $contact->time;?></td>
				<td nowrap="nowrap" ><?php echo $reply; ?></td>
			</tr>
			<?php }else {  ?>
			<tr>
				<td style="color:gray;"><?php echo $pageNav->getOfset($i);?></td>
				<td style="color:gray;"><input id="actions-box" name="id[]" value="<?php echo $contact->id;?>"  type="checkbox"/></td>
				<td ><a style="color:gray;" href="index.php?option=contact&task=view&id=<?php echo $contact->id?>"><?php echo $contact->title;?></a></td>
				<td style="color:gray;"><?php echo $contact->fullname;?></td>
				<td style="color:gray;"><?php echo $contact->email;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $contact->time;?></td>
				<td nowrap="nowrap" ><?php echo $reply; ?></td>
			</tr>
			<?php } ?>
			
			<?php $i++; } ?>
			
			
				<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="contact" />';
	}
    
	function viewContact(&$record=null){
	?>
	<div class="t">
 		<div class="t">
			<div class="t"></div>
 		</div>
	</div>
	
	
	<div class="m">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr>
		<td valign="top">
			<table class="adminform">
			<tbody>
				<tr>
		    		<td valign="top" class="key"><label for="title">Title</label></td>
		            <td><input class="inputbox" type="text" name="title" value="<?php if($record) echo $record->title;?>" size="40"/></td>
				</tr>
				<tr>
		    		<td valign="top" class="key"><label for="title">Fullname</label></td>
		            <td><input class="inputbox" type="text" name="fullname" value="<?php if($record) echo $record->fullname;?>" size="40"/></td>
				</tr>
				<tr>
		    		<td valign="top" class="key"><label for="title">Email</label></td>
		            <td><input class="inputbox" type="text" name="email" value="<?php if($record) echo $record->email;?>" size="40"/></td>
				</tr>
				<tr>
		    		<td valign="top" class="key"><label for="title">Time</label></td>
		            <td><?php echo $record->time;?></td>
				</tr>
			</tbody>
			</table>
			
			<table class="adminform">
				<tr>
					<td>
						<textarea cols="80" id="editor2" name="content" rows="10"><?php if ($record) echo $record->content; ?></textarea>
						<script type="text/javascript">CKEDITOR.replace('editor2');</script>
					</td>
				</tr>
			</table>
		</td>
		<!-- right -->
		<td style="padding: 7px 0 0 5px" valign="top" width="320">
		</td>
		</tr></tbody></table>
		</div>
	<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
	</div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="contact" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	
	
	function viewTrash(){
		require_once('base/class.pagination.php');
		$search 	= Request::get('search');
		$total = countContact(1,$search);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,25);
		$contacts = getAllContact(1,$search);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%">
					<input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" />
				</td>
			</tr>
		</table>
			
			<table class="adminlist">
				<thead>
				<tr>
					<th width="10"><a href="">STT</a></th>
	                <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
	                <th nowrap="nowrap">Title</th>
	                <th nowrap="nowrap">Fullname</th>
	                <th nowrap="nowrap">Email</th>
	                <th nowrap="nowrap"><a href="">Created</a></th>
	                <th nowrap="nowrap"><a href="">Reply</a></th>
				</tr>
				</thead>
				<?php $i = 1; foreach($contacts AS $contact) { 
					$txt = ($contact->replied == 0) ? 'Waiting' : 'Done';
				?>
				<tr>
					<td style="color:gray;"><?php echo $pageNav->getOfset($i);?></td>
					<td style="color:gray;"><input id="actions-box" name="id[]" value="<?php echo $contact->id;?>"  type="checkbox"/></td>
					<td ><a style="color:gray;" href="index.php?option=contact&task=view&id=<?php echo $contact->id?>"><?php echo $contact->title;?></a></td>
					<td style="color:gray;"><?php echo $contact->fullname;?></td>
					<td style="color:gray;"><?php echo $contact->email;?></td>
					<td nowrap="nowrap" style="color:gray;"><?php echo $contact->time;?></td>
					<td nowrap="nowrap" ><?php echo $txt; ?></td>
				</tr>
				<?php $i++; } ?>
					<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
				</tr>
			</table>
			<?php
			echo '<input type="hidden" name="option" value="contact" />';
		}
	
	
	function cancel(){
		redirect('index.php?option=contact');
	}
	
	function view(){
		$record = includeTable();
		$id = Request::get('id');
		$record->load($id);
		viewContact($record);
	}
	
	
	
	function remove(){
		$id = Request::get('id');
		$num = count($id);
		$record = includeTable();
		$query="UPDATE `contact` SET `trash` ='1' WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		Message::setMessage($num.' Contact(s) sent to the Trash.');
		redirect('index.php?option=contact');
		//viewDefault($article);
	}
	

	function delete(){
		global $dbo;
		$id = Request::get('id');
		$num = count($id);
		$record = includeTable();
		$record->delete($id);
		Message::setMessage($num.' Item(s) permanently deleted');
		redirect('index.php?option=contact&task=trash');
		//viewTrash($article);
	}
	
	function clean(){
		global $dbo;
		$dbo->setQuery("DELETE FROM contact WHERE `trash`='1' ");
		$dbo->query();
		Message::setMessage('Contact Trash empty');
		redirect('index.php?option=contact&task=trash');
	}
	
	function restore(){
		$id = Request::get('id');
		$article = includeTable();
		$query="UPDATE contact SET `trash` = '0' WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewTrash();
	}
	
	
	
	
    
	function updateView(){
		$id = Request::get('id');
		$record = includeTable();
		$query="UPDATE `contact` SET `view` ='1' WHERE id = $id ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
	}

    
	function getAllContact($trash, $s ='',$status ='',$replied=''){
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',25);
		
		$query = "SELECT * FROM contact WHERE trash = " . $trash;
		
		
		if ($s)
			$query .= " AND (`title` LIKE '%$s%' OR `fullname` LIKE '%$s%' OR `email` LIKE '%$s%' ) ";
		
		switch ($status){
			case '1': $query .= " AND `view` = '1' ";
			break;
			case '0': $query .= " AND `view` = '0' ";
			break;
		}
		
		switch ($replied){
			case '1': $query .= " AND `replied` = '1' ";
			break;
			case '0': $query .= " AND `replied` = '0' ";
			break;
		}
		
		$query .= " ORDER BY id DESC LIMIT $lms,$lm";
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	function countContact($trash,$s ='',$status='',$replied=''){
		global $dbo;
		
		$query = " SELECT COUNT(id) FROM contact WHERE trash = ". $trash;
		
		if ($s)
			$query .= " AND (`title` LIKE '%$s%' OR `fullname` LIKE '%$s%' OR `email` LIKE '%$s%' ) ";
		
		switch ($status){
			case '1': $query .= " AND `view` = '1' ";
			break;
			case '0': $query .= " AND `view` = '0' ";
			break;
		}
		
		switch ($replied){
			case '1': $query .= " AND `replied` = '1' ";
			break;
			case '0': $query .= " AND `replied` = '0' ";
			break;
		}
		
		
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	
	//lay ve so luong tin da dc dua vao thung rac 
	function getContactTrash(){
		global $dbo;
		$query = " SELECT COUNT(id) FROM contact WHERE trash = 1 ";
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}

?>
