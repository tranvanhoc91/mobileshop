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
			default:
				viewDefault();
				break;
		}
	}
	
	function viewDefault(){
		require_once('base/class.pagination.php');
		$total = getCountMenuType();
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$menutypes = getAllMenuType();
		?>
		
		<table class="adminlist">
			<thead>
            	<tr>
               		<th width="10">STT</th>
                    <th width="10" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
                    <th class="title" nowrap="nowrap"> Title </th>
                    <th nowrap="nowrap">Type</th>
                    <th  width="10%">#Published</th>
                    <th  width="10%">#Unpublished</th>
                    <th  width="10%"># Trash</th>
                    <th  width="10%"># Modules</th>
                    <th nowrap="nowrap">Description</th>
                    <th nowrap="nowrap" width="1">ID</th>
               	</tr>
            </thead>
            <tbody>
            <?php 
			$i = 1; foreach($menutypes AS $menutype) {
			?>
            	<tr>
                	<td><?php echo $pageNav->getOfset($i);?></td>
                    <td><input id="actions-box" name="id[]" value="<?php echo $menutype->id;?>"  type="checkbox"/></td>
                    <td><a href=""><?php echo $menutype->title;?></a></td>
                    <td nowrap="nowrap" style="color:gray;"><?php echo $menutype->menutype;?></td>
                    <td style="color:gray;"><center> - </center></td>
                    <td style="color:gray;"><center> - </center></td>
                    <td style="color:gray;"><center> - </center></td>
                    <td style="color:gray;"><center> - </center></td>
                    <td><?php echo $menutype->description;?></td>
                    <td style="color:gray;"><?php echo $menutype->id;?></td>
              	</tr>
             <?php $i++; } ?>
	            <tr>
					<td style="border:none !important;" colspan="10"><?php $pageNav->displayCpanel();?></td>
				</tr>
            </tbody>
        </table>
		<?php
		echo '<input type="hidden" name="option" value="menutypes" />';
	}
	
	function viewAdd(&$record=null){
	?>
	<table class="adminform">
	<tbody><tr>
		<td width="100">
			<label for="menutype">
				<strong>Unique Name:</strong>
			</label>
		</td>
		<td>
			<input type="text" value="<?php if($record) echo $record->menutype;?>" maxlength="25" size="30" id="menutype" name="menutype" class="inputbox">			<span style="text-decoration: none; color: #333;" class="editlinktip hasTip"><img border="0" alt="Tooltip" src="templates/joomlaCMS/images/icon/tooltip.png"></span>		</td>
	</tr>
	<tr>
		<td width="100">
			<label for="title">
				<strong>Title:</strong>
			</label>
		</td>
		<td>
			<input type="text" value="<?php if($record) echo $record->title;?>" maxlength="255" size="30" id="title" name="title" class="inputbox" />
			<span style="text-decoration: none; color: #333;" class="editlinktip hasTip"><img border="0" alt="Tooltip" src="templates/joomlaCMS/images/icon/tooltip.png"></span>		</td>
	</tr>
	<tr>
		<td width="100">
			<label for="description">
				<strong>Description:</strong>
			</label>
		</td>
		<td>
			<input type="text" value="<?php if($record) echo $record->description;?>" maxlength="255" size="30" id="description" name="description" class="inputbox">
			<span style="text-decoration: none; color: #333;" class="editlinktip hasTip"><img border="0" alt="Tooltip" src="templates/joomlaCMS/images/icon/tooltip.png"></span>		</td>
	</tr>
	<?php if (!$record){ ?>
	<tr>
		<td width="100" valign="top">
			<label for="module_title">
				<strong>Module Title:</strong>
			</label>
		</td>
		<td>
			<input type="text" value="" size="30" id="module_title" name="module_title" class="inputbox">
			<span style="text-decoration: none; color: #333;" class="editlinktip hasTip"><img border="0" alt="Tooltip" src="templates/joomlaCMS/images/icon/tooltip.png"></span>		</td>
	</tr>
	<?php }?>
	</tbody></table>


	<div class="clr"></div>
	<input type="hidden" name="option" value="menutypes" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<div class="clr"></div>
	<?php
	}
	

	
	function save(){
		$menutype = includeTable();
		$menutype->bind();
		$title = trim(Request::get('title'));
		
		$alias_menu = Request::get('menutype');
		if (!$alias_menu){
			$title_en = convertString($title);
			$alias = str_replace(' ','-', $title_en);
			$menutype->menutype = $alias;
		}
		
		if(!$menutype->store()){
			Message::setMessage('False',1);
		}else {
			Message::setMessage('Saved',0);
		}
		
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=menutypes');
				break;
			case 'savex':
				redirect('index.php?option=menutypes&task=add');
				break;
		}		
	}
	
	function edit(){
		$menutype = includeTable();
		$id = Request::get('id');
		$menutype->load($id[0]);
		viewAdd($menutype);	
	}
	
	function delete(){
		$id = Request::get('id');
		$menutype = includeTable();
		$menutype->delete($id);
		viewDefault();	
	}
	
	function getAllMenuType(){
		global $dbo; 
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		$query = "SELECT *
				  FROM menu_type
				  ORDER BY id ASC LIMIT $lms,$lm 
				  ";
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	function getCountMenuType(){
		global $dbo;
		$query = "SELECT COUNT(id) FROM menu_type ";
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
?>