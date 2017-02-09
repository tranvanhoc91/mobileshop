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
		$total = getCountSection($search,$status);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$sections = getAllSection($search,$status);
		
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
                <th nowrap="nowrap">Image</th>
                <th nowrap="nowrap">Published</th>
                <th nowrap="nowrap">Ordering</th>
                <th nowrap="nowrap">Access</th>
                <th nowrap="nowrap">Description</th>
                <th nowrap="nowrap">Type</th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($sections AS $section) {
				$class = $section->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=sections&task=status&id='.$section->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $section->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $section->title;?></a></td>
				<td><center>
                  <?php 
                    if($section->image) {
                    	echo '<img class="" src="../images/section/'.$section->image.'"height="50" width="50" />';  }
                    else { ?>
                    	<img class="" src="../medias/system/images/no-image.jpg" height="60" width="60" /><?php } ?>
                </center></td>
                <td><?php echo $published;?></td>
                <td><input class="input-ordering" value="<?php echo $section->ordering;?>" size="1" type="text" /></td>
				<td><a style="color: green;"><?php if ($section->access == '0') echo 'Public'; else echo getGroupAccess($section->access); ?></a></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $section->description;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $section->type;?></td>
				<td><?php echo $section->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="sections" />';
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
    		<td valign="top" class="key"><label for="title">Type</label></td>
            <td><input class="inputbox" type="text" name="type" value="<?php if($record) echo $record->type;?>" size="40"/></td>
		</tr>
        <tr>
			<td width="150" class="key"><label for="name">Access Level</label></td>
			<td class="paramlist_value"><?php if ($record)  selectAccessGroup($record->access); else selectAccessGroup(); ?></td>
		</tr>
        <?php
        if($record) echo ' <tr><td width="150" class="key"><label for="name">ID</label></td><td class="paramlist_value">'.$record->id.'</td></tr>';
        ?>
		
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
        
<!--	ACCORDION CUSTOMIZE BAI VIET		-->
	<script type="text/javascript" src="templates/joomlaCMS/js/mootools/mootools.js"></script>
	<script type="text/javascript" src="templates/joomlaCMS/js/accordion.js"></script>
	<div class="col width-50">
		<fieldset class="adminform">
			<legend>Parameters</legend>
			<div id="content-pane" class="pane-sliders">
				<div class="panel">
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Section image</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
							<tr>
								<td style="float:right;padding-right:25px;"  width="10%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip">Link:</label></span></td>
								<td ><font color="gray">../ images / section /..</font></td>
							</tr>
							<?php if ($record) { 
								if ($record->image != '') $link = "../images/section/$record->image" ;
								else $link = '../medias/system/images/no-image.jpg';
							?>
							<tr ><td COLSPAN=2><center>
								<img class="" src="<?php echo $link; ?>" height="150" width="150" />
							</center></td></tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip"></label></span></td>
								<td class="paramlist_value"><a href="">Change image</a></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip"></label></span></td>
								<td class="paramlist_value">
									<input class="inp-form" type="file" name="image">
									<input type="hidden" name="image" value="<?php echo $record->image; ?>" />';
								</td>
							</tr>
							<?php }else{ ?>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip">Image</label></span></td>
								<td class="paramlist_value"><input class="inp-form" type="file" name="image"></td>
							</tr>
							<?php } ?>
							
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel">
					<h3 id="cpanel-panel-popular" class="title jpane-toggler"><span>Section params</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Params</label></span></td>
								<td class="paramlist_value"><textarea name="params" cols="30" rows="5" class="text_area" id="paramsposttext"><?php if ($record) echo $record->params; ?></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
			</div><!-- end content-pane -->		
		</fieldset>
	</div>		
	<div class="clr"></div>
	<div class="clr"></div>
    <input type="hidden" name="option" value="sections" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	function save(){
		$section = includeTable();
		$section->bind();
		
		//luu alias
		$title = trim(Request::get('title'));
		if (!$title){
			Message::setMessage('Please enter title section',1);
			global $task;
			switch($task){
				case 'save':
					redirect('index.php?option=sections');
					break;
				case 'savex':
					redirect('index.php?option=sections&task=add');
					break;
			}		
		}else{
			$alias_section = Request::get('alias');
			if (!$alias_section){
				$title_en = convertString($title);
				$alias_section = str_replace(' ','-', $title_en);
				$section->alias = $alias_section;
			}
			
			//store image
			$fieldName = 'image';
			$dir ='../images/section/';
			$fileName = $alias_section.'-';
			
			$fileInfo = $_FILES[$fieldName];
			if ($fileInfo['name']){
				$upload = UploadFile($fieldName,$dir,1,$fileName); //function UploadFile() cat dat trong file required
				if ($upload){
				 	$section->image = $upload;
				 	//Kiem tra xem: user dang add hay edit bai viet
				 	//Neu laf edit thi phai lay ve id cua bai viet va cap nhat lai ten hinh anh
				 	$id = Request::get('id');
				 	if ($id){ //tuc la dang edit hinh anh
				 		//lay ve hinh hien tai va thay the bang hinh moi
				 		global $dbo;
						$dbo->setQuery("SELECT `image` FROM `sections` WHERE `id` = $id ");
						$imgcurr = $dbo->loadObject();
						if ($imgcurr->image)
							unlink('../images/section/'.$imgcurr->image);
				 	}
				 }
			}
			//bat dau luu vao csdl
			if(!$section->store()){
	            Message::setMessage('False',1);
	    	}else {
	    		Message::setMessage('Saved');
	    	} 	
	    	
			global $task;
			switch($task){
				case 'save':
					redirect('index.php?option=sections');
					break;
				case 'savex':
					redirect('index.php?option=sections&task=add');
					break;
			}	
		}//end kiem tra nhap title
		
		
	}//end function save()
	
	
	
	function edit(){
		$section = includeTable();
		$id = Request::get('id');
		$section->load($id[0]);
		viewAdd($section);	
	}
	
	

	function delete(){
		global $dbo;
		$id = Request::get('id');
		$num = count($id);
		//xoa hinh quang cao tuong ung voi du lieu muon xoa
		foreach ($id AS $id){
			$dbo->setQuery("SELECT `image` FROM `sections` WHERE id = $id");
			$imgcurr = $dbo->loadObject();
			if ($imgcurr->image){
				unlink('../images/section/'.$imgcurr->image);
			}
			$section = includeTable();
			$section->delete($id);
		}
		Message::setMessage($num.' Item(s) permanently deleted');
		redirect('index.php?option=sections');
		//viewTrash($article);
	}
	
	
	//thay doi thuoc tinh publshed cua 1 record
	function status(){
		$id = Request::get('id');
		if($id){
			$section = includeTable();
			$section->load($id);
			if($section->published == 1 ) $section->published = 0;
			else $section->published = 1;
			$section->store();
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task == 'publish'? 1:0;
		$query = " UPDATE sections SET `published` = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
    
	
	function getAllSection($s='',$status=''){	//lay tat cac cac user de hien thi ra luoi du lieu
		global $dbo; 
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		
		$query = "SELECT * FROM sections ";
		
		$where = array();
		if($s) {
			$where[] .=  " (`title` LIKE '%$s%' OR `description` LIKE '%$s%') "; 
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
				break;
		}
		
		if (count($where) == 1){
			$query .= "WHERE ".$where[0];
		}
		
		if (count($where) > 1){
			$w = implode(' AND ', $where);
			$query .= " WHERE ".$w;
		}
		
		$query .= " ORDER BY id ASC LIMIT $lms,$lm ";
		
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	
	function getCountSection($s='',$status=''){
		global $dbo;
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		
		$query = "SELECT COUNT(id) FROM `sections` ";
		
		$where = array();
		if($s){
			$where[] .=  "(`title` LIKE '%$s%' OR `description` LIKE '%$s%') ";
		}
		
		switch ($status){
			case '1': $where[] .= " `published` = '1' ";
				break;
			case '0':$where[] .= " `published` = '0' ";
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

?>
