<?php
//ham dieu khien
	function a_display(){
		//dump($tb);
		global $task;
		switch($task){
			case 'add':
				viewAdd();
				break;
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
			default:
				viewDefault();
				break;
		}
	}
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$total = getCountManufacturer($search);
		$lms = Request::get('limitstart',0);
		
		$pageNav = new Pagination($total,$lms,15);
	
		$rows = getAllManufacturer($search);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%"><input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" /></td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
			<tr>
				<th width="10"><a href="">STT</a></th>
                <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                <th nowrap="nowrap">Title</th>
                <th nowrap="nowrap"><a href="">Email</a></th>
                <th nowrap="nowrap"><a href="">Description</a></th>
                <th nowrap="nowrap"><a href="">Website</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($rows AS $row) {
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $row->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $row->name;?></a></td>
				<td nowrap="nowrap"><?php echo $row->email;?></td>
				<td nowrap="nowrap"><?php echo $row->description;?></td>
				<td nowrap="nowrap"><?php echo $row->url;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="6"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="manufacturer" />';
	}
    
	function viewAdd(&$record=null){
	?>
	<div class="col width-50">
		<fieldset class="adminform">
		<legend>Details</legend>
			<table cellspacing="1" class="admintable">
			<tbody>
	         <tr>
	    		<td valign="top" class="key"><label for="title">Title</label></td>
	            <td><input class="inputbox" type="text" name="name" value="<?php if($record) echo $record->name;?>" size="40"/></td>
			</tr>
			 <tr>
	    		<td valign="top" class="key"><label for="title">Email</label></td>
	            <td><input class="inputbox" type="text" name="email" value="<?php if($record) echo $record->email;?>" size="40"/></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Website</label></td>
	            <td><input class="inputbox" type="text" name="url" value="<?php if($record) echo $record->url;?>" size="40"/></td>
			</tr>
			<tr>
				<td class="key" valign="top">
					Description
				</td>
				<td><textarea rows="8" cols="60" name="description"><?php if($record) echo $record->description;?></textarea>
			</tr>
			</tbody>
	        </table><!--end table.admintable-->
		</fieldset>
	</div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="manufacturer" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	function save(){
		$row = includeTable();
		$row->bind();
	       
        if(!$row->store()){
            Message::setMessage('False',1);
    	}else {
    		Message::setMessage('Saved');
    	} 
    	
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=manufacturer');
				break;
			case 'savex':
				redirect('index.php?option=manufacturer&task=add');
				break;
		}		
	}//end function save()
	
	function edit(){
		$rowponent = includeTable();
		$id = Request::get('id');
		$rowponent->load($id[0]);
		viewAdd($rowponent);	
	}
	
	

	function delete(){
		$id = Request::get('id');
		global $dbo;
		$rowponent = includeTable();
		$rowponent->delete($id);
		viewDefault();
	}
	
	

    
	function getAllManufacturer($s =''){
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',15);
		
		$query = "SELECT * FROM manufacturer ";
		
		if ($s){
			$query.=  " (`name` LIKE '%$s%' OR `email` LIKE '%$s%' OR `url` LIKE '%$s%') ";
		}
		
		
		$query .= " ORDER BY id ASC ";
		$query .= " LIMIT $lms,$lm";
		
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	function getCountManufacturer($s =''){
		global $dbo;
		
		$query = "SELECT COUNT(id) FROM manufacturer";
		
		if ($s){
			$query.=  " (`name` LIKE '%$s%' OR `email` LIKE '%$s%' OR `url` LIKE '%$s%') ";
		}
		
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
?>
