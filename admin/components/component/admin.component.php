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
			case 'clean':
				clean();
				break;
			case 'save':
			case 'savex':
				save();
				break;
			case 'status':
				status();
				break;
			case 'publish':
			case 'unpublish':
				published($task);
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
		$total = getCountComponent($search,$status);
		$lms = Request::get('limitstart',0);
		
		$pageNav = new Pagination($total,$lms,15);
	
		$coms = getAllComponent($search,$status);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%"><input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" /></td>
				<td nowrap="nowrap">
					<select name="status">
						<option value="">--Select status--</option>
						<option value="1">Enable</option>
						<option value="0">Unenble</option>
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
                <th nowrap="nowrap"><a href="">Enable</a></th>
                <th nowrap="nowrap"><a href="">Ordering</a></th>
                <th nowrap="nowrap"><a href="">Access</a></th>
                <th nowrap="nowrap"><a href="">Link</a></th>
                <th nowrap="nowrap"><a href="">Type</a></th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($coms AS $com) {
				$class = $com->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=component&task=status&id='.$com->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $com->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $com->title;?></a></td>
                <td><?php echo $published;?></td>
                <td><input class="input-ordering" value="<?php echo $com->ordering;?>" size="1" type="text" /></td>
				<td><a style="color: green;"><?php if ($com->access == '0') echo 'Public'; else echo getGroupAccess($com->access); ?></a></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $com->link;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $com->component;?></td>
				<td><?php echo $com->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="component" />';
	}
    
	function viewAdd(&$record=null){
	?>
	<div class="col width-50">
		<fieldset class="adminform">
		<legend>Details</legend>
			<table cellspacing="1" class="admintable">
			<tbody>
	        <tr>
	    		<td valign="top" class="key">Component</td><?php if($record) echo $record->component; ?>
	            <td><?php if($record && $record->component) echo buildComponentList($record->component); else echo buildComponentList(); ?> </td>
			</tr>
	         <tr>
	    		<td valign="top" class="key"><label for="title">Title</label></td>
	            <td><input class="inputbox" type="text" name="title" value="<?php if($record) echo $record->title;?>" size="40"/></td>
			</tr>
			 <tr>
	    		<td valign="top" class="key"><label for="title">Link</label></td>
	            <td><input class="inputbox" type="text" name="link" value="<?php if($record) echo $record->link;?>" size="40"/></td>
			</tr>
	        <tr>
				<td width="150" class="key"><label for="name">Enable</label></td>
				<td>
					<input type="radio" name="published" value="0" <?php echo 'checked="checked"' ?> /> No
					<input type="radio" name="published" value="1" <?php if($record && $record->published==1) echo 'checked="checked"'; ?> /> Yes
				</td>
			</tr>
	        <tr>
	    		<td valign="top" class="key"><label for="title">Ordering</label></td>
	            <td><input class="inputbox" type="text" name="ordering" value="<?php if($record) echo $record->ordering;?>" size="40"/></td>
			</tr>
	        <tr>
				<td width="150" class="key"><label for="name">Access Level</label></td>
				<td class="paramlist_value"><?php if ($record)  selectAccessGroup($record->access); else selectAccessGroup(); ?></td>
			</tr>
	        <?php
	        if($record){
	            echo ' <tr><td width="150" class="key"><label for="name">ID</label></td><td class="paramlist_value">'.$record->id.'</td></tr>';
	        }
	        ?>
			</tbody>
	        </table><!--end table.admintable-->
		</fieldset>
		<fieldset class="adminform">
		<legend>Menu Assignment</legend>
		<table class="admintable" cellspacing="1">
			<tbody><tr>
				<td class="key" valign="top">
					Menus Type:
				</td>
				<td>select menu type</td>
			</tr>
			<tr>
				<td class="key" valign="top">
					Menu Detail
				</td>
				<td>Su dung ajax de khi chon menu type nao thi show nhung menu trong menu type do</td>
			</tr>
			<tr>
				<td class="key" valign="top">
					Params
				</td>
				<td><textarea rows="5" cols="40"></textarea>
			</tr>
		</tbody></table>
		</fieldset>
	</div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="component" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	function save(){
		$com = includeTable();
		$com->bind();
	       
        if(!$com->store()){
            Message::setMessage('False',1);
    	}else {
    		Message::setMessage('Saved');
    	} 
    	
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=component');
				break;
			case 'savex':
				redirect('index.php?option=component&task=add');
				break;
		}		
	}//end function save()
	
	function edit(){
		$component = includeTable();
		$id = Request::get('id');
		$component->load($id[0]);
		viewAdd($component);	
	}
	
	

	function delete(){
		$id = Request::get('id');
		global $dbo;
		$component = includeTable();
		$component->delete($id);
		viewDefault();
	}
	
	
	function status(){
		$id = Request::get('id');
		if($id){
			//lay ve doi tuong bang
			$component = includeTable();
			//load du lieu len
			$component->load($id);
			if($component->published==1) $component->published = 0;
			else $component->published = 1;
			$component->store();
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task=='publish'? 1:0;
		$query = " UPDATE components SET published = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
    
    

    
	function getAllComponent($s ='',$status=''){
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',15);
		
		$query = "SELECT * FROM components ";
		$where = array();
		if ($s){
			$where[] .=  " (`title` LIKE '%$s%') ";
		}
		
		switch ($status){
			case '1': $where[] .= " `enable` = '1' ";
				break;
			case '0':$where[] .= " `enable` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$query .= " LIMIT $lms,$lm";
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	function getCountComponent($s ='',$status=''){
		global $dbo;
		
		$query = "SELECT COUNT(id) FROM components";
		
		$where = array();
		if ($s){
			$where[] .=  "(`title` LIKE '%$s%') ";
		}
		
		switch ($status){
			case '1': $where[] .= " `enable` = '1' ";
				break;
			case '0':$where[] .= " `enable` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= "WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	//Lay ve cap do truy cap ung voi moi category o viewdefault
	function getGroupAccess($gid){
		global $dbo;
		$dbo->setQuery("SELECT name FROM groups WHERE id = $gid ");
		$ugroups =  $dbo->loadObjectList();
		foreach ($ugroups AS $group){
			return $group->name;
		}
	}
	
	
	
	function selectAccessGroup($gid=null){
		global $dbo;
		$dbo->setQuery("SELECT name,id
						FROM groups
						");
		$groups = $dbo->loadObjectList();
		echo '<select name="access">';
		echo '<option selected="selected" value="0">Public</option>';
		foreach ($groups AS $g){ ?>
			<option value="<?php echo $g->id; ?>" <?php if ($g->id == $gid) echo 'selected = "selected"'; ?>> <?php echo $g->name; ?></option>
		<?php  }
		echo '</select>';
	}


    function buildComponentList($current=''){
		$dir = '../components';
		$resouce = scandir($dir);
        $combo = '<select name="component" style="width:150px;">';
        $combo .= '<option value="">--Select Component--</option>';
		for($i=0; $i<count($resouce); $i++){
			if(false === strpos($resouce[$i],'.')){
			     if($current){
                     if($resouce[$i] == $current){
    		              $combo .= '<option value="'.$current.'" selected="selected">'.$current.'</option>';
    			     }else{
			             $combo .= '<option value="'.$resouce[$i].'">'.$resouce[$i].'</option>';
			         }	
			     }else{
			         $combo .= '<option value="'.$resouce[$i].'">'.$resouce[$i].'</option>';
			     }				    
			}
		}
		$combo .= '</select>';
		return $combo;
	}
?>
