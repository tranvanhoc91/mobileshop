<?php
//ham dieu khien
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
			case 'add':
				viewAdd();
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
		$total = getCountMenus($search,$status);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$menus = getAllMenus($search,$status);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%"><input type="text" name="search" value="<?php echo $search;?>" /><input class="search" type="submit" value="Search" /></td>
				<td nowrap="nowrap">
					<select name="status">
						<option value="">--Select status--</option>
						<option value="1">Published</option>
						<option value="0">Unpublished</option>
					</select>
				</td>
				<td><input class="next" type="submit" name="search-fitter" value="Xem" /></td>
			</tr>
		</table>
		<table class="adminlist">
			<thead>
            	<tr>
               		<th width="10">STT</th>
                    <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                    <th class="title" nowrap="nowrap"> Title </th>
                    <th nowrap="nowrap">Alias</th>
                    <th  width="10%">Type</th>
                    <th  width="10%">Component</th>
                    <th  width="10%">Category</th>
                    <th  width="10%">Menu Type</th>
                    <th  width="10%">Published</th>
                    <th nowrap="nowrap">Ordering</th>
                    <th nowrap="nowrap">Access</th>
                    <th nowrap="nowrap" width="1">ID</th>
               	</tr>
            </thead>
            <tbody>
            <?php 
				$i = 1; foreach($menus AS $menu) {
				$class = $menu->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=menus&task=status&id='.$menu->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
                
			?>
            	<tr>
                	<td><?php echo $pageNav->getOfset($i);?></td>
                    <td><input id="actions-box" name="id[]" value="<?php echo $menu->id; ?>"  type="checkbox"/></td>
                    <td><a href=""><?php echo $menu->title;?></a></td>
                    <td><a href=""><?php echo $menu->alias;?></a></td>
                    <td><a href=""><?php echo $menu->type;?></a></td>
                    <td><a href=""><?php echo getMenuAttribute('components','component',$menu->component_id);?></a></td>
                    <td><a href=""><?php echo getMenuAttribute('categories','title',$menu->catid);?></a></td>
                    <td><a href=""><?php echo getMenuAttribute('menu_type','title',$menu->menu_type_id); ?></a></td>
                    <td><?php echo $published; ?></td>
                    <td><input class="input-ordering" value="<?php echo $menu->ordering;?>" size="1" type="text" /></td>
                    <td><a style="color: green;"><?php if ($menu->access == '0') echo 'Public'; else echo getMenuAttribute('groups','name',$menu->access); ?></a></td>
                    <td style="color:gray;"><?php echo $menu->id;?></td>
              	</tr>
             <?php $i++; } ?>
	            <tr>
					<td style="border:none !important;" colspan="11"><?php $pageNav->displayCpanel();?></td>
				</tr>
            </tbody>
        </table>
		<?php
		echo '<input type="hidden" name="option" value="menus" />';
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
	            <td><input class="inputbox" type="text" name="title" value="<?php if($record) echo $record->title;?>" size="40"/></td>
			</tr>
			<tr>
	    		<td valign="top" class="key"><label for="title">Alias</label></td>
	            <td><input class="inputbox" type="text" name="alias" value="<?php if($record) echo $record->alias;?>" size="40"/></td>
			</tr>
	        <tr>
	    		<td width="100" class="key">Type</td>
	           <td><label for="name">component</label></td>
			</tr>
			<tr>
	    		<td width="100" class="key">Component</td>
	           <td><?php if ($record) selectAttribute('components','component','component_id',$record->component_id); else selectAttribute('components','component','component_id'); ?></td>
				
			</tr>
			<tr>
	    		<td width="100" class="key">Category</td>
	           <td><?php if ($record) selectAttribute('categoris','title','catid',$record->catid); else selectAttribute('categoris','title','catid'); ?></td>
				
			</tr>
	        <tr>
				<td width="150" class="key"><label for="name">Publish</label></td>
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
					Menus:
				</td>
				<td>
					<label for="menus-all"><input id="menus-all" name="menus" value="all" onclick="allselections();" checked="checked" type="radio">All</label>
					<label for="menus-none"><input id="menus-none" name="menus" value="none" onclick="disableselections();" type="radio">None</label>
					<label for="menus-select"><input id="menus-select" name="menus" value="select" onclick="enableselections();" type="radio">Select Menu Item(s) from the List</label>
				</td>
			</tr>
			<tr>
				<td class="key" valign="top">Menu Type:</td>
				<td><?php if ($record) selectAttribute('menu_type', 'title', 'menu_type_id',$record->menu_type_id); else selectAttribute('menu_type', 'title', 'menu_type_id'); ?></td>
			</tr>
		</tbody></table>
		</fieldset>
	</div>

	<div class="clr"></div>
	<div class="clr"></div>
	<input type="hidden" name="option" value="menus" />
	<input type="hidden" name="type" value="component" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<div class="clr"></div>
	<?php
	}
	

	
	function save(){
		$menu = includeTable();
		$menu->bind();
		$title = trim(Request::get('title'));
		
		$alias_menu = Request::get('alias');
		if (!$alias_menu){
			$title_en = convertString($title);
			$alias = str_replace(' ','-', $title_en);
			$menu->alias = $alias;
		}
		
		
		
		if(!$menu->store()){
			Message::setMessage('False',1);
		}else {
			Message::setMessage('Saved',0);
		}
		
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=menus');
				break;
			case 'savex':
				redirect('index.php?option=menus&task=add');
				break;
		}		
	}
	
	function edit(){
		$menu = includeTable();
		$id = Request::get('id');
		$menu->load($id[0]);
		viewAdd($menu);	
	}
	
	function status(){
		$id = Request::get('id');
		if($id){
			//lay ve doi tuong bang
			$menu = includeTable();
			//load du lieu len
			$menu->load($id);
			if($menu->published==1) $menu->published = 0;
			else $menu->published = 1;
			$menu->store();
			//header('Location:index.php');
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task=='publish'? 1:0;
		$query = " UPDATE menu SET published = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
	
		//chua tot: moi chi xoa dc cha va con cap1
	function findDeleteSubCategory(&$sourch,&$des){
		global $dbo;
		foreach ($sourch AS &$s){
			$dbo->setQuery("SELECT id FROM menu WHERE parent_id = $s");
			$subitems = $dbo->loadObjectList();
			$des[] = $s;
			foreach ($subitems AS $subitem)
				$des[] = $subitem->id;//goi lai ham de quy
			
		}
		return $des;
	}
	
	function delete(){
		global $dbo;
		$id = Request::get('id');
		$menu = includeTable();
		$results = array();
		$result = findDeleteSubCategory($id,$results);
		$menu->delete($result);
		viewDefault();
	}
	
	//Ham lay ve sub menu
	function findSubMenu($parent,&$sourch,&$des ,$level = -1){
		$level++;
		$pre ='';
		for ($i=0 ; $i < $level ; $i++) $pre .= '__';
		foreach ($sourch AS $s){
			if($s->parent_id == $parent->id){
				$s->title = $pre.$s->title;
				$des[] = $s;
				findSubMenu($s, $sourch, $des,$level);
			}
		}
		return $des;
	}
	
	function getAllMenus($s='',$status=''){
		global $dbo; 
		$lm = Request::get('limit',30);
		$lms = Request::get('limitstart',0);
		
		$query = "SELECT * FROM menu ";
		
		$where = array();
		if($s) {
			$where[] .=  " ( `alias` LIKE '%$s%' OR `title` LIKE '%$s%' "; 
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		
		$query .= "  ORDER BY ordering,id ASC  LIMIT $lms,$lm ";
		$dbo->setQuery($query);
		
		$category = $dbo->loadObjectList();
		$root = new stdClass();
		$root->id = 0;
		$result = array();
		
		return findSubMenu($root, $category, $result);
	}
	
	function getCountMenus($s='',$status=''){
		global $dbo;
		$lm = Request::get('limit',30);
		$lms = Request::get('limitstart',0);
		
		$query = "SELECT COUNT(id) FROM menu ";
		
		$where = array();
		if($s) {
			$where[] .=  " ( `alias` LIKE '%$s%' OR `title` LIKE '%$s%' "; 
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$query .= " ORDER BY id ASC  LIMIT $lms,$lm ";
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	
	/*Lay ve cac gia tri lien quan*/
	
	function getMenuAttribute($table,$properties,$id){
		global $dbo;
		$dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
	}
	
	
	//Lay ve cac danh sach lua chon cac tham so khi add/edit menu
	function selectAttribute($table,$properties,$name,$id=''){
		global $dbo;
		$dbo->setQuery("SELECT id,".$properties." FROM ".$table." ORDER BY id ASC");
		$results = $dbo->loadObjectList();
		echo '<select name="'.$name.'">';
		foreach ($results AS $result){ ?>
			<option value="<?php echo $result->id; ?>" <?php if ($result->id == $id) echo 'selected = "selected"'; ?>> <?php echo $result->$properties; ?></option>
		<?php  }
		echo '</select>';
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
?>