<?php
require_once('base/class.pagination.php');
//ham dieu khien
	function a_display(){
		//dump($tb);
		global $task;
		switch($task){
			//case 'cancel':
				//cancel();
				//break;
			case 'edit':
				edit();
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
			case 'remove':
				remove();
				break;
			case 'delete':
				delete();
				break;
			case 'clean':
				clean();
				break;
			case 'restore':
				restore();
				break;
			case 'add':
				viewAdd();
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
		$search = Request::get('search');
		$status = Request::get('status');
		$catid = Request::get('category_id');
		$total = getCountArticle(0,$search,$status,$catid);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$articles = getAllArticle(0,$search,$status,$catid);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%">
					<input type="text" name="search" value="<?php echo $search;?>" />
					<input class="search" type="submit" value="Search" />
				</td>
				<td nowrap="nowrap">
					<select name="status">
						<option value="">--Select status--</option>
						<option value="1">Published</option>
						<option value="0">Unpublished</option>
					</select>
					<?php selectCategoryNews(); ?>
					<input class="next" type="submit" name="search-fitter" value="Xem" />
				</td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
			<tr>
				<th width="10"><a href="">STT</a></th>
				<th width="20" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
				<th><a href="">Title</a></th>
				<th><a href="">Thumbail</a></th>
				<th><a href="">Published</a></th>
				<th><a href="">Order</a></th>
				<th><a href="">Category</a></th>
				<th><a href="">Section</a></th>
				<th><a href="">Author</a></th>
				<th><a href="">Access Level</a></th>
				<th><a href="">Date Created</a></th>
				<th><a href="">Hits</a></th>
				<th><a href="">id</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($articles AS $article) {
				$class = $article->published ? 'published':'unpublished';
				$published = '<a href="index.php?option=articles&task=status&id='.$article->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $article->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $article->title; ?></a></td>
				<td><center>
                  <?php 
                    if($article->image) {
                    	echo '<img class="" src="../images/article/thumb/'.$article->image.'"height="50" width="50" />';  }
                    else { ?>
                    <img class="" src="../media/system/images/no-image.jpg" height="60" width="60" /><?php } ?>
                </center></td>
				<td><?php echo $published;?></td>
				<td><input class="input-ordering" value="<?php echo $article->ordering;?>" size="1" type="text" /></td>
				<td><a href=""><?php echo getArticleAttribute('categories','title',$article->category_id);?></a></td>
				<td><a href=""><?php echo getArticleAttribute('sections','title',$article->section_id);?></a></td>
				<td><a href=""><?php echo $article->author; ?></a></td>
				<td  width="80"><center><a style="color: green;"><?php if ($article->access == '0') echo 'Public'; else echo getArticleAttribute('groups','name',$article->access); ?></a></center></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->created;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->hits;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="14"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<input type="hidden" name="option" value="articles" />
		<?php
	}
	
	
	
	
	function viewAdd(&$record=null){
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
				<td><label for="title">Title</label></td>
				<td><input class="inputbox" name="title" value="<?php if($record) echo $record->title;?>" id="title" size="40" maxlength="255"  type="text"></td>
				<td><label>Published</label>
					<input type="radio" name="published" value="0" <?php echo 'checked="checked"' ?> /> No
					<input type="radio" name="published" value="1" <?php if($record && $record->published==1) echo 'checked="checked"'; ?> /> Yes
				</td>
			</tr>
			<tr>
				<td><label for="title">Alias</label></td>
				<td><input class="inputbox" name="alias" value="<?php if($record) echo $record->alias;?>" id="title" size="40" maxlength="255" type="text"></td>
			</tr>
			
			<tr>
				<td><label for="sectionid">Section</label></td>
				<td class="paramlist_value"><?php if ($record) selectSectionNews($record->section_id);else selectSectionNews();?></td>
				<td class="paramlist_value"><?php if ($record) selectCategoryNews($record->category_id);else selectCategoryNews();?></td>
			</tr>
			</tbody></table>
		
			<table class="adminform">
				<tr>
					<td>
						<textarea cols="80" id="editor2" name="fulltext" rows="10"><?php if ($record) echo $record->fulltext; ?></textarea>
						<script type="text/javascript">CKEDITOR.replace('editor2');</script>
					</td>
				</tr>
			</table>
		</td>
		
		
		
		<td style="padding: 7px 0 0 5px" valign="top" width="320">
			<table style="border: 1px dashed silver; padding: 5px; margin-bottom: 10px;" width="100%">
				<tbody>
				<?php if ($record) {
					echo '<tr><th>ID</th><td>'.$record->id.'</td> </tr>';
					if($record && $record->published==0) {echo 'unpublished'; } else echo 'published';
				}?>
				<tr>
	  				<th>Hits</th>
	  				<td><?php if($record) echo $record->hits; ?></td>
	  			</tr>
	  			<tr>
	  				<th>Created</th>
	  				<td><?php if($record) echo getArticleAttribute('users', 'username',$record->created_by); else echo getArticleAttribute('users', 'username',$_SESSION['au']->id); ?></td>
	  			</tr>
	  			<tr>
	  				<th>Modified Final By</th>
	  				<td><?php if($record) echo getArticleAttribute('users', 'username',$record->modified_by); else echo getArticleAttribute('users', 'username',$_SESSION['au']->id); ?></td>
	  			</tr>
	  			<tr>
	  				<th>Created Time</th>
	  				<td><?php 
                        if($record){
                            echo $record->created; 
                            echo '<input type="hidden" name="created" value="'.$record->created.'" />';
                        }
                        else {
                            echo date("Y-m-d H:i:s"); 
                            echo '<input type="hidden" name="created" value="'.date('Y-m-d H:i:s').'" />';
                        }?></td>
	  			</tr>
			</tbody></table>
			<script type="text/javascript" src="templates/joomlaCMS/js/mootools/mootools.js"></script>
			<script type="text/javascript" src="templates/joomlaCMS/js/accordion.js"></script>
			<div id="content-pane" class="pane-sliders">
				<div class="panel">
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Parameters (Article)</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="detailsaccess-lbl" class="hasTip" for="detailsaccess">Author</label></span></td>
									<td class="paramlist_value"><input class="inp-form" name="author" value="<?php if ($record) echo $record->author; ?>" /></td>
								</tr>	
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="detailsaccess-lbl" class="hasTip" for="detailsaccess">Ordering</label></span></td>
									<td class="paramlist_value"><input class="inp-form" name="ordering" value="<?php if ($record) echo $record->ordering; ?>" /></td>
								</tr>	
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="detailsaccess-lbl" class="hasTip" for="detailsaccess">Access Level</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectAccessGroup($record->access); else selectAccessGroup(); ?></td>
								</tr>
								
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="detailsaccess-lbl" class="hasTip" for="detailsaccess">Start Publishing</label></span></td>
									<td class="paramlist_value"></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="detailsaccess-lbl" class="hasTip" for="detailsaccess">Finish Publishing</label></span></td>
									<td class="paramlist_value"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel">
					<h3 id="cpanel-panel-popular" class="title jpane-toggler"><span>Thumbail Article</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="adminlist">
							<tbody>
							<?php if ($record) { 
								if ($record->image != '') $link = "../images/article/thumb/$record->image" ;
								else $link = '../medias/system/images/no-image.jpg';
							?>
							<tr ><td COLSPAN=2><center>
								<img class="" src="<?php echo $link; ?>" height="120" width="150" />
							</center></td></tr>
							<tr>
								<td COLSPAN=2 class="paramlist_value"><center><a href="">Change image</a></center></td>
							</tr>
							<tr >
								<td class="paramlist_value"  COLSPAN=2><center>
									<input class="inp-form" type="file" name="image">
									<input type="hidden" name="image" value="<?php echo $record->image; ?>" />';
								</center></td>
							</tr>
							<?php }else{ ?>
							<tr>
								<td COLSPAN=2><center><input class="inp-form" type="file" name="image"></center></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				
				<div class="panel">
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Metadata Information</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td width="40%" class="paramlist_key"><span class="editlinktip"><label class="hasTip" for="metadescription" id="metadescription-lbl">Introtext</label></span></td>
									<td class="paramlist_value"><textarea id="metadescription" class="text_area" rows="5" cols="30" name="introtext"><?php if ($record) echo $record->introtext; ?></textarea></td>
								</tr>
								<tr>
									<td width="40%" class="paramlist_key"><span class="editlinktip"><label class="hasTip" for="metadescription" id="metadescription-lbl">Keywords</label></span></td>
									<td class="paramlist_value"><textarea id="metadescription" class="text_area" rows="5" cols="30" name="metakey"><?php if ($record) echo $record->metakey; ?></textarea></td>
								</tr>
								<tr>
									<td width="40%" class="paramlist_key"><span class="editlinktip"><label class="hasTip" for="metakeywords" id="metakeywords-lbl">Description</label></span></td>
									<td class="paramlist_value"><textarea id="metakeywords" class="text_area" rows="5" cols="30" name="metadesc"><?php if ($record) echo $record->metadesc; ?></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
	</tbody></table>
	
	
	
	<div class="clr"></div>
	</div><!-- end m -->
	<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
	</div>
   		
	
	<input type="hidden" name="option" value="articles" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<input type="hidden" name="created_by" value="<?php if($record) echo $record->created_by; else echo $_SESSION['au']->id; ?>" />
	<input type="hidden" name="modified_by" value="<?php if($record) echo $_SESSION['au']->id; ?>" />
	<?php
	}
	
	
		function viewTrash(){
		$search = Request::get('search');
		$total = getCountArticle(1,$search);
		$lms = Request::get('limitstart',0);
		$pageNav = new Pagination($total,$lms,10);
		$articles = getAllArticle(1,$search);
		?>
		<table class="toolbar-fitter" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
			<tr>
				<td width="100%">
					<input type="text" name="search" value="<?php echo $search;?>" />
					<input class="search" type="submit" value="Search" />
				</td>
				<td nowrap="nowrap">
					<input class="next" type="submit" name="search-fitter" value="Xem" />
				</td>
			</tr>
		</table>
		
		<table class="adminlist">
			<thead>
			<tr>
				<th width="10"><a href="">STT</a></th>
				<th width="20" ><input type="checkbox" value="on" name="allbox" onclick="checkAll();"/></th>
				<th><a href="">Title</a></th>
				<th><a href="">Category</a></th>
				<th><a href="">Section</a></th>
				<th><a href="">Author</a></th>
				<th><a href="">Date Created</a></th>
				<th><a href="">Hits</a></th>
				<th><a href="">id</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($articles AS $article) { ?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $article->id;?>"  type="checkbox"/></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->title; ?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo getArticleAttribute('categories','title',$article->category_id);?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo getArticleAttribute('sections','title',$article->section_id);?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->author; ?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->created;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->hits;?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $article->id;?></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="14"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<input type="hidden" name="option" value="articles" />
		<?php
	}
	
	
	function cancel(){
		$option = Request::get('option');
		header('Location:index.php?option='.$option);
	}
	
	
	function save(){
		$article = includeTable();
		$article->bind();
		
		$title = trim(Request::get('title'));
		
		
		if (!Request::get('category_id'))
			Message::setMessage('Please enter category',1);
		elseif (!Request::get('section_id')) Message::setMessage('Please enter Section',1);
		elseif (!$title){
			Message::setMessage('Please enter title articles',1);
			global $task;
			switch($task){
				case 'save':
					redirect('index.php?option=articles');
					break;
				case 'savex':
					redirect('index.php?option=articles&task=add');
					break;
			}		
		}
		else{
			$alias_section = Request::get('alias');
			if (!$alias_section){
				$title_en = convertString($title);
				$alias_section = str_replace(' ','-', $title_en);
				$article->alias = $alias_section;
			}
			
			//store image
			$fieldName = 'image';
			$dir ='../images/article/thumb/';
			$fileName = $alias_section.'-';
			
			$fileInfo = $_FILES[$fieldName];
			if ($fileInfo['name']){
				$upload = UploadFile($fieldName,$dir,1,$fileName); //function UploadFile() cat dat trong file required
				if ($upload){
				 	$article->image = $upload;
				 	//Kiem tra xem: user dang add hay edit bai viet
				 	//Neu laf edit thi phai lay ve id cua bai viet va cap nhat lai ten hinh anh
				 	$id = Request::get('id');
				 	if ($id){ //tuc la dang edit hinh anh
				 		//lay ve hinh hien tai va thay the bang hinh moi
				 		global $dbo;
						$dbo->setQuery("SELECT `image` FROM `articles` WHERE `id` = $id ");
						$imgcurr = $dbo->loadObject();
						if ($imgcurr->image)
							unlink($dir.$imgcurr->image);
				 	}
				 }
			}
			if ($article->store()) Message::setMessage('Saved');
			else Message::setMessage('False',1);
			
		}	
			
		
		
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=articles');
				break;
			case 'savex':
				redirect('index.php?option=articles&task=add');
				break;
		}	
	}
	
	function edit(){
		$article = includeTable();
		$id = Request::get('id');
		$article->load($id[0]);
		viewAdd($article);	
	}
	
	
	function remove(){
		$id = Request::get('id');
		$num = count($id);
		$article = includeTable();
		$query="UPDATE articles SET `trash` ='1' WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		Message::setMessage($num.' Article(s) sent to the Trash.');
		redirect('index.php?option=articles');
		//viewDefault($article);	
	}
	
	function delete(){
		global $dbo;
		$id = Request::get('id');
		$num = count($id);
		$dir ='../images/article/thumb/';
		foreach ($id AS $i){
			$query="SELECT `image` FROM `articles` WHERE id = $i ";
			$dbo->setQuery($query);
			$imgcurr = $dbo->loadObject();
			if ($imgcurr->image){
				unlink($dir.$imgcurr->image);
			}
		}
		$article = includeTable();
		$article->delete($id);
		Message::setMessage($num.' Item(s) permanently deleted');
		redirect('index.php?option=articles&task=trash');
		//viewTrash($article);
	}
	
	
	
	
	
	function clean(){
		global $dbo;
		//xoa hinh quang cao tuong ung voi du lieu muon xoa
		$dbo->setQuery("SELECT `image` FROM `articles` WHERE trash = 1 ");
		$imgcurr = $dbo->loadObjectList();
		foreach ($imgcurr AS $img){
			$pic = $img->image;
			if ($pic){
				unlink("../images/article/thumb/$pic");
			}
		}
		$dbo->setQuery("DELETE FROM articles WHERE `trash`='1' ");
		$dbo->query();
		Message::setMessage('Article Trash Manager empty');
		redirect('index.php?option=articles&task=trash');
		//viewTrash();
	}
	
	function restore(){
		$id = Request::get('id');
		$article = includeTable();
		$query="UPDATE articles SET `trash` = '0' WHERE id IN(".implode(',',$id).") ";
		//mysql_query($query);
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewTrash();
	}
	
	//Custom published/unpublished
	function status(){
		$id = Request::get('id');
		if($id){
			//lay ve doi tuong bang
			$article = includeTable();
			//load du lieu len
			$article->load($id);
			if($article->published==1) $article->published = 0;
			else $article->published = 1;
			$article->store();
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task =='publish' ? 1:0;
		$query = "UPDATE `articles` SET published = ".$p." WHERE id IN(".implode(',',$id).") ";
		
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
		//header('Location:index.php');
	}
	
	
	
//Ham lay ve danh sach tat ca bai viet khong nam trong thung rac	
	function getAllArticle($trash,$s ='',$status='',$catid=''){
		global $dbo;
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		if($s){ $whereSearch = " AND (`title` LIKE '%$s%' OR `author` LIKE '%$s%')"; 
		}else{ $whereSearch = ''; }
		
		switch ($status){
			case '1': $whereStatus = " AND `published` = '1' ";
				break;
			case '0':$whereStatus = " AND `published` = '0' ";
				break;
			default:$whereStatus = '';
				break;
		}
		
		if ($catid) {
			$whereCategory = " AND `category_id` = $catid";
		}else {
			$whereCategory = '';
		}
		
		$dbo->setQuery(" SELECT id,title,image,section_id,category_id,created,author,published,ordering,access,hits,
								DATE_FORMAT(created ,' %d/%m/%Y <span>%H:%i</span> ' ) as created
								FROM articles 
								WHERE trash = $trash $whereSearch $whereStatus $whereCategory
								ORDER BY category_id,ordering ASC 
								LIMIT $lms,$lm ");
		return $dbo->loadObjectList();
	}

	
//Ham dem so bai viet khong nam trong thung rac	
	function getCountArticle($trash, $s ='',$status='',$catid=''){
		global $dbo;
		$lm = Request::get('limit',10);
		$lms = Request::get('limitstart',0);
		
		if($s){ $whereSearch = " AND (`title` LIKE '%$s%' OR `author` LIKE '%$s%')"; 
		}else{ $whereSearch = ''; }
		
		switch ($status){
			case '1': $whereStatus = "AND `published` = '1' ";
				break;
			case '0':$whereStatus = "AND `published` = '0' ";
				break;
			default:$whereStatus = '';
				break;
		}
		
		if ($catid) {
			$whereCategory = "AND `category_id` = $catid";
		}else {
			$whereCategory = '';
		}
		
		$dbo->setQuery(" SELECT COUNT(id) 
						FROM articles 
						WHERE trash = $trash $whereSearch $whereStatus $whereCategory
						ORDER BY id ASC 
						");
		return $dbo->loadResult();
	}
	
	
	
//////////////////////////////////////////
//////////////////////////////////////////

//Ham lay ve ten 	Author  va Modified by
	function getArticleAttribute($table,$properties,$id){
		global $dbo;
		$dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
	}
	
	
	
	
	
	
	
	
	
//cac ham lay ve cac tham so khi edit/add bai viet moi 

	//Ham lay ve nhom user dc truy cap vao bai viet
	function selectAccessGroup($gid=null){
		global $dbo;
		$dbo->setQuery("SELECT name,id
						FROM groups
						");
		$groups = $dbo->loadObjectList();
		echo '<select name="access" style="width:140px;">';
		echo '<option selected="selected" value="0" >Public</option>';
		foreach ($groups AS $g){ ?>
			<option value="<?php echo $g->id; ?>" <?php if ($g->id == $gid) echo 'selected = "selected"'; ?>> <?php echo $g->name; ?></option>
		<?php  }
		echo '</select>';
	}
	
	
	function selectSectionNews($id=null){
		global $dbo;
		$dbo->setQuery("SELECT title,id
						FROM sections
						ORDER BY id DESC
						");
		$sections = $dbo->loadObjectList();
		echo '<select name="section_id" style="width:140px;">';
		foreach ($sections AS $section){ ?>
			<option value="<?php echo $section->id; ?>" <?php if ($section->id == $id) echo 'selected = "selected"'; ?>> <?php echo $section->title; ?></option>
		<?php  }
		echo '</select>';
	}
	
	//ham lay ve cac category thuoc section co type = news khi edit/add va hine thi list category search
	function selectCategoryNews($id=null){
		global $dbo;
		$dbo->setQuery("SELECT categories.title as ctitle,categories.id as cid
						FROM categories
						INNER JOIN sections 
						ON sections.id = categories.section_id
						WHERE type = 'news' OR type='uncategoriesed'
						");
		$categories = $dbo->loadObjectList();
		echo '<select name="category_id" style="width:140px;">';
		echo  '<option value="">--Select category--</option>';
		foreach ($categories AS $category){ ?>
			<option value="<?php echo $category->cid; ?>" <?php if ($category->cid == $id) echo 'selected = "selected"'; ?>> <?php echo $category->ctitle; ?></option>
		<?php  }
		echo '</select>';
	}
	
	
	
	
	
	

?>
