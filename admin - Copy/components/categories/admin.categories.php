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
		$section = Request::get('section_id');
		$total = getCountCategory($search,$status,$section);
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',20);
		$pageNav = new Pagination($total,$lms,$lm);
		$categories = getAllCategory($search,$status,$section);
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
				<td>
					<select  class="styledselect_form_1" name="section_id" >
					<option value="">--Select Category--</option>
					<?php getFilterSection(); ?>
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
                <th nowrap="nowrap">Title</th>
                <th nowrap="nowrap">Description</th>
                <th nowrap="nowrap">Published</th>
                <th nowrap="nowrap">Ordering</th>
                <th nowrap="nowrap">Access</th>
                <th nowrap="nowrap">Section</th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($categories AS $category) {
				$class = $category->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=categories&task=status&id='.$category->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $category->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php if ($category->parent_id == 0) echo '<span style="font-weight:bold;">'.$category->title.'</span>'; else echo $category->title;?></a></td>
				<td><?php echo $category->description;?></td>
                <td><?php echo $published;?></td>
                <td><input class="input-ordering" value="<?php echo $category->ordering;?>" size="1" type="text" /></td>
				<td><a style="color: green;"><?php if ($category->access == '0') echo 'Public'; else echo getGroupAccess($category->access); ?></a></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo getSection($category->section_id);?></td>
				<td><?php echo $category->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="categories" />';
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
			<td width="150" class="key"><label for="name">Section</label></td>
			<td class="paramlist_value"><?php echo $record->section_id; if ($record) selectOneSection($record->section_id);else selectOneSection();?></td>
		</tr>
		<tr>
			<td width="150" class="key"><label for="name">Parent category</label></td>
			<td class="paramlist_value"><?php if ($record)  selectParentCategory($record->parent_id); else selectParentCategory(); ?></td>
		</tr>
        <tr>
			<td width="150" class="key"><label for="name">Publish</label></td>
			<td>
				<input type="radio" name="published" value="1" <?php echo 'checked="checked"' ?> /> Yes
				<input type="radio" name="published" value="0" <?php if($record && $record->published==0) echo 'checked="checked"'; ?> /> No
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
        <?php if($record) echo ' <tr><td width="150" class="key"><label for="name">ID</label></td><td class="paramlist_value">'.$record->id.'</td></tr>'; ?>
		</tbody>
        </table><!--end table.admintable-->
		</fieldset>
		
		<fieldset class="adminform">
			<legend>Description</legend>
    		<table cellspacing="1" class="admintable">
    			<tr>
    				<td valign="top" colspan="3">
    					<div>
                            <textarea cols="80" id="editor2" name="description" rows="10"><?php if ($record) echo $record->description; ?></textarea>
                            <script type="text/javascript">CKEDITOR.replace('editor2');</script>
                        </div>
    				</td>
    			</tr>
    		</table>
		</fieldset>
    </div><!--End div.col width-50-->
        
	<div class="clr"></div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="categories" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	function save(){
		$category = includeTable();
		$category->bind();
		
		//luu alias
		$title = trim(Request::get('title'));
		if (!$title){
			Message::setMessage('Please enter title category',1);
			global $task;
			switch($task){
				case 'save':
					redirect('index.php?option=categories');
					break;
				case 'savex':
					redirect('index.php?option=categories&task=add');
					break;
			}		
		}else{
			$alias_section = Request::get('alias');
			if (!$alias_section){
				$title_en = convertString($title);
				$alias_section = str_replace(' ','-', $title_en);
				$category->alias = $alias_section;
			}
			
			//store image
			$fieldName = 'image';
			$dir ='../images/section/';
			$fileName = $alias_section.'-';
			
			$fileInfo = $_FILES[$fieldName];
			if ($fileInfo['name']){
				$upload = UploadFile($fieldName,$dir,1,$fileName); //function UploadFile() cat dat trong file required
				if ($upload){
				 	$category->image = $upload;
				 	//Kiem tra xem: user dang add hay edit bai viet
				 	//Neu laf edit thi phai lay ve id cua bai viet va cap nhat lai ten hinh anh
				 	$id = Request::get('id');
				 	if ($id){ //tuc la dang edit hinh anh
				 		//lay ve hinh hien tai va thay the bang hinh moi
				 		global $dbo;
						$dbo->setQuery("SELECT `image` FROM `categories` WHERE `id` = $id ");
						$imgcurr = $dbo->loadObject();
						if ($imgcurr->image)
							unlink('../images/section/'.$imgcurr->image);
				 	}
				 }
			}
			//bat dau luu vao csdl
			if(!$category->store()){
	            Message::setMessage('False',1);
	    	}else {
	    		Message::setMessage('Saved');
	    	} 	
	    	
			global $task;
			switch($task){
				case 'save':
					redirect('index.php?option=categories');
					break;
				case 'savex':
					redirect('index.php?option=categories&task=add');
					break;
			}	
		}//end kiem tra nhap title
		
		
	}//end function save()
	
	
	
	function edit(){
		$category = includeTable();
		$id = Request::get('id');
		$category->load($id[0]);
		viewAdd($category);	
	}
	
	//chua tot: moi chi xoa dc cha va con cap1
	function findDeleteSubCategory(&$sourch,&$des){
		global $dbo;
		foreach ($sourch AS &$s){
			$dbo->setQuery("SELECT id FROM categories WHERE parent_id = $s");
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
		$category = includeTable();
		$results = array();
		$result = findDeleteSubCategory($id,$results);
		$category->delete($result);
		viewDefault();
	}

	//thay doi thuoc tinh publshed cua 1 record
	function status(){
		$id = Request::get('id');
		if($id){
			$category = includeTable();
			$category->load($id);
			if($category->published == 1 ) $category->published = 0;
			else $category->published = 1;
			$category->store();
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task == 'publish'? 1:0;
		$query = " UPDATE `categories` SET `published` = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
    
	//Ham lay ve sub category
	function findSubCategory($parent,&$sourch,&$des ,$level = -1){
		$level++;
		$pre ='';
		for ($i=0 ; $i < $level ; $i++) $pre .= '__';
		foreach ($sourch AS $s){
			if($s->parent_id == $parent->id){
				$s->title = $pre.$s->title;
				$des[] = $s;
				findSubCategory($s, $sourch, $des,$level);
			}
		}
		return $des;
	}
	
	
	function getAllCategory($s='',$status='',$secid=''){	//lay tat cac cac user de hien thi ra luoi du lieu
		global $dbo; 
		$query = "SELECT * FROM categories ";
		$where = array();
		if($s) {
			$where[] .=  " ( `alias` LIKE '%$s%' OR `title` LIKE '%$s%' OR `description` LIKE '%$s%') "; 
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
				break;
		}
		
		if ($secid) {
			$where[] .= " `section_id` = $secid ";
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		$query .= " ORDER BY section_id,ordering ASC ";
		$lm = Request::get('limit',20);
		$lms = Request::get('limitstart',0);
		$query .= " LIMIT $lms,$lm";
		$dbo->setQuery($query);
		
		$category = $dbo->loadObjectList();
		$root = new stdClass();
		$root->id = 0;
		$result = array();
		
		return findSubCategory($root, $category, $result);
	}
	
	
	
	function getCountCategory($s='',$status='',$secid=''){
		global $dbo;
		$query = "SELECT COUNT(id) FROM `categories` ";
		$where = array();
		if($s){
			$where[] .=  "( `alias` LIKE '%$s%' OR  `title` LIKE '%$s%' OR `description` LIKE '%$s%') ";
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
				break;
		}
		if ($secid) {
			$where[] .= " `section_id` = $secid ";
		}
		
		if (count($where) == 1){
			$query .= " WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$query .= " ORDER BY section_id,ordering ASC";
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	
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
	
	function getSection($sid){
		global $dbo;
		$dbo->setQuery("SELECT title FROM sections WHERE id = $sid ");
		$sections =  $dbo->loadObjectList();
		foreach ($sections AS $section){
			return $section->title;
		}
	}
	
	function getFilterSection(){
		global $dbo;
		$dbo->setQuery("SELECT title,id FROM sections ");
		$section = $dbo->loadObjectList();
			foreach ($section as $sec){
				echo '<option name="" value="'.$sec->id.'" >'.$sec->title.'</option>';
			}
			echo $sec->title;
	}
	
	//ham lay ve cac section khi them/sua mot category
	function selectOneSection($secid=''){
		global $dbo;
		$dbo->setQuery("SELECT id,title FROM sections ORDER BY id ASC ");
		$sections = $dbo->loadObjectList();
		echo '<select name="section_id">';
		foreach ($sections AS $section){?>
			<option <?php if($section->id == $secid) echo 'selected="selected"'?> value="<?php echo $section->id; ?>"><?php echo $section->title; ?></option>
		<?php }
		echo '</select>';
	}
	
	function selectParentCategory($pid=null){
	global $dbo;
	$dbo->setQuery("SELECT * FROM categories ORDER BY id ASC");
	$category = $dbo->loadObjectList();
	$root = new stdClass();
	$root->id = 0;
	$result = array();
	
	$subcat = findSubCategory($root, $category, $result);
		echo 	'<select name="parent_id">' ;
		echo  '<option value="0">--Parent Category--</option>';
		foreach ($subcat AS $sub){ ?>
			<option <?php if($sub->id == $pid) echo 'selected="selected"; ' ?> value="<?php echo $sub->id; ?>" > <?php echo $sub->title; ?> </option>
		<?php }
		echo 	'</select>' ;
	}

?>
