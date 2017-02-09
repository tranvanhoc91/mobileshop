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
                
			case 'showtitle':
				checkshow_title();
				break;
			case 'show':
			case 'hiden':
				show_title($task);
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
		$total = getCountModule();
		
		$lms = Request::get('limitstart',0);
		
		$pageNav = new Pagination($total,$lms,15);
	
		$mods = getAllModule($search,$status);
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
                <th nowrap="nowrap"><a href="">Published</a></th>
                <th nowrap="nowrap"><a href="">Show Title</a></th>
                <th nowrap="nowrap"><a href="">Ordering</a></th>
                <th nowrap="nowrap"><a href="">Position</a></th>
                <th nowrap="nowrap"><a href="">Type</a></th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($mods AS $mod) {
				$class = $mod->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=modules&task=status&id='.$mod->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
                
                $class = $mod->show_title? 'show':'hiden';
				$show_title = '<a href="index.php?option=modules&task=showtitle&id='.$mod->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $mod->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $mod->title;?></a></td>
                <td><?php echo $published;?></td>
                <td><?php echo $show_title;?></td>
                <td><input class="input-ordering" value="<?php echo $mod->ordering;?>" size="1" type="text" /></td>
                <td nowrap="nowrap" style="color:gray;"><?php echo $mod->position;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $mod->module;?></td>
				<td><?php echo $mod->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="12"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="modules" />';
	}
    
	function viewAdd(&$record=null){
	?>
	<div class="col width-50">
		<fieldset class="adminform">
		<legend>Details</legend>
			<table cellspacing="1" class="admintable">
			<tbody>
	        <tr>
	    		<td valign="top" class="key">Module</td><?php if($record) echo $record->module; ?>
	            <td><?php if($record && $record->module) echo buildModuleList($record->module); else echo buildModuleList(); ?> </td>
			</tr>
	         <tr>
	    		<td valign="top" class="key"><label for="title">Title</label></td>
	            <td><input class="inputbox" type="text" name="title" value="<?php if($record) echo $record->title;?>" size="40"/></td>
			</tr>
	        <tr>
	    		<td width="100" class="key">Show Title:</td>
	           <td>
	                <input type="radio" name="show_title" value="0" <?php  echo 'checked="checked"'; ?> /> No
					<input type="radio" name="show_title" value="1" <?php if($record && $record->show_title==1) echo 'checked="checked"' ?> /> Yes
				</td>
			</tr>
	        <tr>
				<td width="150" class="key"><label for="name">Publish</label></td>
				<td>
					<input type="radio" name="published" value="0" <?php echo 'checked="checked"' ?> /> No
					<input type="radio" name="published" value="1" <?php if($record && $record->published==1) echo 'checked="checked"'; ?> /> Yes
				</td>
			</tr>
	        <tr>
	    		<td valign="top" class="key"><label for="title">Position</label></td>
	            <td><input class="inputbox" type="text" name="position" value="<?php if($record) echo $record->position;?>" size="40"/></td>
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
				<td class="key" valign="top">
					Menu Selection:
				</td>
				<td>
					<select disabled="disabled" name="selections[]" id="selections" class="inputbox" size="15" multiple="multiple"><optgroup label="mainmenu"><option disabled="disabled" value="1">Home</option><option disabled="disabled" value="14">Laptop</option><option disabled="disabled" value="22">&nbsp;&nbsp;- Acer</option><option disabled="disabled" value="23">&nbsp;&nbsp;- Asus</option><option disabled="disabled" value="15">Linh kiện laptop</option><option disabled="disabled" value="16">Máy bộ</option><option disabled="disabled" value="17">Phụ kiện máy tính</option><option disabled="disabled" value="18">Tải phần mềm</option><option disabled="disabled" value="19">&nbsp;&nbsp;- Phần mềm ứng dụng</option><option disabled="disabled" value="20">&nbsp;&nbsp;- Phần mềm diệt virus</option><option disabled="disabled" value="21">&nbsp;&nbsp;- Hệ điều hành</option></optgroup></select>						</td>
			</tr>
		</tbody></table>
												<script type="text/javascript">allselections();</script>
		</fieldset>
	</div>

	<div class="col width-50">
		<fieldset class="adminform">
			<legend>Parameters</legend>

			<div id="menu-pane" class="pane-sliders"><div class="panel"><h3 class="title jpane-toggler-down" id="param-page"><span>Module Parameters</span></h3><div style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 389px;" class="jpane-slider content">
			<table class="paramlist admintable" width="100%" cellspacing="1">
<tbody><tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip">Caching</label></span></td>
<td class="paramlist_value"><select name="params[cache]" id="paramscache" class="inputbox"><option value="0" selected="selected">Never</option></select></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip">&nbsp;</span></td>
<td class="paramlist_value"><hr></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsmoduleclass_sfx-lbl" for="paramsmoduleclass_sfx" class="hasTip">Module Class Suffix</label></span></td>
<td class="paramlist_value"><input name="params[moduleclass_sfx]" id="paramsmoduleclass_sfx" value="" class="text_area" type="text"></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramspretext-lbl" for="paramspretext" class="hasTip">Pre-text</label></span></td>
<td class="paramlist_value"><textarea name="params[pretext]" cols="30" rows="5" class="text_area" id="paramspretext"></textarea></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Post-text</label></span></td>
<td class="paramlist_value"><textarea name="params[posttext]" cols="30" rows="5" class="text_area" id="paramsposttext"></textarea></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramslogin-lbl" for="paramslogin" class="hasTip">Login Redirection Page</label></span></td>
<td class="paramlist_value"><select name="params[login]" id="paramslogin" class="inputbox"><option value="" selected="selected">- Select Item -</option><option value="0" disabled="disabled">&nbsp;</option><option value="Chinh-sach-chung" disabled="disabled">Chính sách chung - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Gii-thiu-chung" disabled="disabled">Giới thiệu chung - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="mainmenu" disabled="disabled">Main Menu - Top</option><option value="1">&nbsp;&nbsp;&nbsp;Home</option><option value="14">&nbsp;&nbsp;&nbsp;Laptop</option><option value="22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Acer</option><option value="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Asus</option><option value="15">&nbsp;&nbsp;&nbsp;Linh kiện laptop</option><option value="16">&nbsp;&nbsp;&nbsp;Máy bộ</option><option value="17">&nbsp;&nbsp;&nbsp;Phụ kiện máy tính</option><option value="18">&nbsp;&nbsp;&nbsp;Tải phần mềm</option><option value="19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Phần mềm ứng dụng</option><option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Phần mềm diệt virus</option><option value="21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Hệ điều hành</option><option value="0" disabled="disabled">&nbsp;</option><option value="Mua-hang-trc-tuyn" disabled="disabled">Mua hàng trực tuyến - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Thong-tin-bach-khoa" disabled="disabled">Thông tin bách khoa - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Top-Menu-" disabled="disabled">Top Menu - Top</option></select></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramslogout-lbl" for="paramslogout" class="hasTip">Logout Redirection Page</label></span></td>
<td class="paramlist_value"><select name="params[logout]" id="paramslogout" class="inputbox"><option value="" selected="selected">- Select Item -</option><option value="0" disabled="disabled">&nbsp;</option><option value="Chinh-sach-chung" disabled="disabled">Chính sách chung - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Gii-thiu-chung" disabled="disabled">Giới thiệu chung - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="mainmenu" disabled="disabled">Main Menu - Top</option><option value="1">&nbsp;&nbsp;&nbsp;Home</option><option value="14">&nbsp;&nbsp;&nbsp;Laptop</option><option value="22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Acer</option><option value="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Asus</option><option value="15">&nbsp;&nbsp;&nbsp;Linh kiện laptop</option><option value="16">&nbsp;&nbsp;&nbsp;Máy bộ</option><option value="17">&nbsp;&nbsp;&nbsp;Phụ kiện máy tính</option><option value="18">&nbsp;&nbsp;&nbsp;Tải phần mềm</option><option value="19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Phần mềm ứng dụng</option><option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Phần mềm diệt virus</option><option value="21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Hệ điều hành</option><option value="0" disabled="disabled">&nbsp;</option><option value="Mua-hang-trc-tuyn" disabled="disabled">Mua hàng trực tuyến - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Thong-tin-bach-khoa" disabled="disabled">Thông tin bách khoa - Top</option><option value="0" disabled="disabled">&nbsp;</option><option value="Top-Menu-" disabled="disabled">Top Menu - Top</option></select></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsgreeting-lbl" for="paramsgreeting" class="hasTip">Greeting</label></span></td>
<td class="paramlist_value">
	<input name="params[greeting]" id="paramsgreeting0" value="0" type="radio">
	<label for="paramsgreeting0">No</label>
	<input name="params[greeting]" id="paramsgreeting1" value="1" checked="checked" type="radio">
	<label for="paramsgreeting1">Yes</label>
</td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsname-lbl" for="paramsname">Name/Username</label></span></td>
<td class="paramlist_value"><select name="params[name]" id="paramsname" class="inputbox"><option value="0" selected="selected">Username</option><option value="1">Name</option></select></td>
</tr>
<tr>
<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsusesecure-lbl" for="paramsusesecure" class="hasTip">Encrypt Login Form</label></span></td>
<td class="paramlist_value">
	<input name="params[usesecure]" id="paramsusesecure0" value="0" checked="checked" type="radio">
	<label for="paramsusesecure0">No</label>
	<input name="params[usesecure]" id="paramsusesecure1" value="1" type="radio">
	<label for="paramsusesecure1">Yes</label>
</td>
</tr>
</tbody></table></div></div></div>			</fieldset>
		</div>
		<div class="clr"></div>
	<div class="clr"></div>
	
    <input type="hidden" name="option" value="modules" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<?php
	}
	
	function showMessager(){
		$error = false;
		if(Request::get('module')== ''){
            	Message::setMessage('Please! Select a module to set up',1);
            	$error = true;
        }        
        if (Request::get('position') == ''){
        	Message::setMessage('You have to enter possition for your module,1');
        	$error = true;
        }
        
        return $error;
	}
	
	function save(){
		$mod = includeTable();
		$mod->bind();
	       
        
        $msg = showMessager();
        if ($msg == true){
        	Message::setMessage('co loi',1);
        }else {
        	
        
        if(!$mod->store()){
            Message::setMessage('False',1);
    	}else {
    		Message::setMessage('Saved');
    	} 
    	
		}
    		
 
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=modules');
				break;
			case 'savex':
				redirect('index.php?option=modules&task=add');
				break;
		}		
	}//end function save()
	
	function edit(){
		$module = includeTable();
		$id = Request::get('id');
		$module->load($id[0]);
		viewAdd($module);	
	}
	
	

	function delete(){
		$id = Request::get('id');
		global $dbo;
		$module = includeTable();
		$module->delete($id);
		viewDefault();
	}
	
	
	//thay doi thuoc tinh publshed cua 1 record
	function status(){
		$id = Request::get('id');
		if($id){
			//lay ve doi tuong bang
			$module = includeTable();
			//load du lieu len
			$module->load($id);
			if($module->published==1) $module->published = 0;
			else $module->published = 1;
			$module->store();
			//header('Location:index.php');
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task=='publish'? 1:0;
		$query = " UPDATE modules SET published = ".$p." WHERE id IN(".implode(',',$id).") ";
		
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		
		viewDefault();
		//header('Location:index.php');
	}
    
    
    function show_title($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$show = $task == 'show' ? 1 : 0;
		$query = " UPDATE modules SET `show_title` = ".$show." WHERE id IN(".implode(',',$id).") ";
		
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
	
	function checkshow_title(){
		$id = Request::get('id');
		if($id){
			$mod = includeTable();
			$mod->load($id);
			if($mod->show_title ==1 ) $mod->show_title = 0;
			else $mod->show_title = 1;
			$mod->store();
            //header('Location:index.php?option=modules');
		}
		 viewDefault();
	}
	

    
	function getAllModule($s ='',$status=''){
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',15);
		
		$query = "SELECT * FROM modules ";
		$where = array();
		if ($s){
			$where[] .=  " (`title` LIKE '%$s%' OR `description` LIKE '%$s%') ";
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
		
		$query .= " LIMIT $lms,$lm";
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	
	function getCountModule($s ='',$status=''){
		global $dbo;
		
		$query = "SELECT COUNT(id) FROM modules";
		
		$where = array();
		if ($s){
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


    function buildModuleList($current=''){
		$dir = '../modules';
		$resouce = scandir($dir);
        $combo = '<select name="module" style="width:150px;">';
        $combo .= '<option value="">--Select Module--</option>';
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
