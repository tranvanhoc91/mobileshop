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
			case 'choose':
				setDefault();
				break;
			default:
				viewDefault();
				break;
		}
	}
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$total = countPoll($search);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,15);
		$polls = getPolls($search);
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
                <th nowrap="nowrap"><a href="">Enable</a></th>
                <th nowrap="nowrap"><a href="">Number vote</a></th>
                <th nowrap="nowrap"><a href="">Access</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($polls AS $poll) { ?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $poll->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $poll->title;?></a></td>
				<td><?php if ($poll->enable=='1') echo "<span class='default-icon'>&nbsp;&nbsp;&nbsp;&nbsp;</span>";?></td>
				<td><a href=""><?php echo getNumberVote($poll->id); ?></a></td>
				<td><a style="color: green;"><?php if ($poll->access == '0') echo 'Public'; else echo getGroupAccess($poll->access); ?></a></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="6"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="poll" />';
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
	            <td><input class="inputbox" type="text" name="title" value="<?php if($record) echo $record->title;?>" size="50"/></td>
			</tr>
			<tr>	
				<td colspan="2"></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Option1</label></td>
	            <td><input class="inputbox" type="text" name="option[]" value="" size="40"/></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Option2</label></td>
	            <td><input class="inputbox" type="text" name="option[]" value="" size="40"/></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Option3</label></td>
	            <td><input class="inputbox" type="text" name="option[]" value="" size="40"/></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title"><a href="" class="add_option">Thêm</a></label></td>
			</tr>
	        <tr>
				<td width="150" class="key"><label for="name">Access Level</label></td>
				<td class="paramlist_value"><?php if ($record)  selectAccessGroup($record->access); else selectAccessGroup(); ?></td>
			</tr>
			</tbody>
	        </table><!--end table.admintable-->
		</fieldset>
	</div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="poll" />
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
	
	
    
    
	function setDefault(){
		$id = Request::get('id');
		global $dbo;
		$dbo->setQuery("UPDATE polls SET  `enable` = '1' WHERE id ='$id[0]'");
		$dbo->query();
	
		$dbo->setQuery("UPDATE polls SET  `enable` = '0' WHERE id <> '$id[0]' ");
		$dbo->query();
		
		viewDefault();
	}
    
	function getPolls($s =''){
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',15);
		
		$query = "SELECT * FROM polls ";
		
		if ($s){
			$query .=  " WHERE (`title` LIKE '%$s%') ";
		}
		
		$query .= " LIMIT $lms,$lm";
		
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	function countPoll($s =''){
		global $dbo;
		
		$query = "SELECT COUNT(id) FROM polls";
		
		if ($s){
			$query .=  " WHERE (`title` LIKE '%$s%') ";
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
	
	
	function getNumberVote($pid){
		global $dbo;
		$query = "SELECT COUNT(id) FROM poll_vote WHERE poll_id =  ". $pid;
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}

?>
