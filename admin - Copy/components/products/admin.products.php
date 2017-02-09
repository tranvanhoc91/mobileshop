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
		$section = Request::get('section_id');
		$category = Request::get('category_id');
		$manufacturer = Request::get('manufacturer_id');
		
		$total = getCountProduct(0,$search,$status,$section,$category,$manufacturer);
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',30);
		$pageNav = new Pagination($total,$lms,$lm);
		$products = getAllProduct(0,$search,$status,$section,$category,$manufacturer);
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
					<option value="">--Select Section--</option>
					<?php getFilterAttribute('sections'); ?>
				</select>
				</td>
				<td>
					<select  class="styledselect_form_1" name="category_id" >
					<option value="">--Select Category--</option>
					<?php getFilterAttribute('categories'); ?>
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
                <th nowrap="nowrap">Image</th>
                <th nowrap="nowrap">Price</th>
                <th nowrap="nowrap">Category</th>
                <th nowrap="nowrap">Section</th>
                <th nowrap="nowrap">Manufacturer</th>
                <th nowrap="nowrap">Published</th>
                <th nowrap="nowrap">Ordering</th>
                <th nowrap="nowrap">Access</th>
                <th nowrap="nowrap">Quantity</th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($products AS $product) {
				$class = $product->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=products&task=status&id='.$product->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $product->id;?>"  type="checkbox"/></td>
				<td><a href=""><?php echo $product->title;?></a></td>
				<td><center>
                  <?php 
                    if($product->thumb_image) {
                    	echo '<img class="" src="../images/product/thumb/'.$product->thumb_image.'"height="50" width="50" />';  }
                    else { ?>
                    	<img class="" src="../medias/system/images/no-image.jpg" height="60" width="60" /><?php } ?>
                </center></td>
                <td width="120"><font color="red"><?php echo number_format($product->price,0,'.','.').' '.getProductAttribute('product_currency','code',$product->product_currency_id);?></font></td>
				<td width="80"><a href=""><?php echo getProductAttribute('categories','title',$product->category_id);?></a></td>
				<td nowrap="nowrap" width="150"><center><a href=""><?php echo getProductAttribute('sections','title',$product->section_id);?></center></a></td>
				<td width="100"><a href=""><?php echo getProductAttribute('manufacturer','name',$product->manufacturer_id);?></a></td>
                <td width="30"><center><?php echo $published;?></center></td>
                <td width="60"><center><input class="input-ordering" value="<?php echo $product->ordering;?>" size="1" type="text" /></center></td>
				<td  width="80"><center><a style="color: green;"><?php if ($product->access == '0') echo 'Public'; else echo getProductAttribute('users','username',$product->access); ?></a></center></td>
				<td width="50"><center><?php echo $product->quantity;?></center></td>
				<td><center><?php echo $product->id;?></center></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="13"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="products" />';
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
			<td class="paramlist_value"><?php if ($record) selectProductAttribute('sections', 'title', 'section_id',$record->section_id);else selectProductAttribute('sections', 'title', 'section_id');?></td>
		</tr>
		<tr>
			<td width="150" class="key"><label for="name">Category</label></td>
			<td class="paramlist_value"><?php if ($record) selectProductAttribute('categories','title','category_id',$record->category_id);else selectProductAttribute('categories','title','category_id');?></td>
		</tr>
		<tr>
			<td width="150" class="key"><label for="name">Manufacturer</label></td>
			<td class="paramlist_value"><?php if ($record) selectProductAttribute('manufacturer','name','manufacturer_id',$record->manufacturer_id);else selectProductAttribute('manufacturer','name','manufacturer_id');?></td>
		</tr>
		<tr>
    		<td valign="top" class="key"><label for="title">Price</label></td>
            <td><input class="inputbox" type="text" name="price" value="<?php if($record) echo $record->price;?>" size="20" /><?php if ($record) selectProductAttribute('product_currency','code','product_currency_id',$record->product_currency_id);else selectProductAttribute('product_currency','code','product_currency_id');?></td>
		</tr>
		<tr>
    		<td valign="top" class="key"><label for="title">Quantity</label></td>
            <td><input class="inputbox" type="text" name="quantity" value="<?php if($record) echo $record->quantity;?>" size="20" /></td>
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
            <td><input class="inputbox" type="text" name="ordering" value="<?php if($record) echo $record->ordering;?>" size="20"/></td>
		</tr>
        <tr>
			<td width="150" class="key"><label for="name">Access Level</label></td>
			<td class="paramlist_value"><?php if ($record)  selectAccessGroup($record->access); else selectAccessGroup(); ?></td>
		</tr>
		</tbody>
        </table><!--end table.admintable-->
                
		</fieldset>
		<fieldset class="adminform">
			<legend>Outstanding Features</legend>
    		<table cellspacing="1" class="admintable">
    			<tr>
    				<td valign="top" colspan="3">
    					<div>
                            <textarea cols="80" id="editor2" name="full_description" rows="10"><?php if ($record) echo $record->full_description; ?></textarea>
                            <script type="text/javascript">CKEDITOR.replace( 'editor2');</script>
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
			<?php if ($record){ ?>
				<div class="panel">
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Infomation Static</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">ID</label></span></td>
								<td><?php echo $record->id; ?></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Created by</label></span></td>
								<td><?php echo getUser($record->created_by); ?></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Modified by</label></span></td>
								<td><?php echo getUser($record->modified_by); ?></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Hits</label></span></td>
								<td><?php echo $record->hits; ?></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Created Date</label></span></td>
								<td><?php echo $record->created_date; ?> <input type="hidden" name="created_date" value="<?php echo $record->created_date; ?>" /></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
			<?php }else {?>
				<input type="hidden" name="created_date" value="<?php echo date("Y-m-d H:i:s"); ?>" />
				<input type="hidden" name="created_by" value="<?php echo $_SESSION['au']->id; ?>" />
			<?php } ?>
				<div class="panel">
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Product image</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
							<tr>
								<td style="float:right;padding-right:25px;"  width="10%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip">Link:</label></span></td>
								<td ><font color="gray">../ images / product / thumb / ..</font></td>
							</tr>
							<?php if ($record) { 
								if ($record->thumb_image != '') $link = "../images/product/thumb/$record->thumb_image" ;
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
									<input class="inp-form" type="file" name="thumb_image">
									<input type="hidden" name="thumb_image" value="<?php echo $record->thumb_image; ?>" />';
								</td>
							</tr>
							<?php }else{ ?>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramscache-lbl" for="paramscache" class="hasTip">Image</label></span></td>
								<td class="paramlist_value"><input class="inp-form" type="file" name="thumb_image"></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>General Infomation</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Operating System</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_os', 'title', 'product_os_id',$record->product_os_id); else selectProductAttribute('product_os', 'title', 'product_os_id'); ?></td>
								</tr>	
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Style:</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_style','title','product_style_id',$record->product_style_id); else selectProductAttribute('product_style','title','product_style_id'); ?></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Language</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductLanguage(1,2); else selectProductLanguage(); ?></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Width</label></span></td>
									<td><input class="inputbox" type="text" name="width" value="<?php if($record) echo $record->width;?>" size="10"/><font color="gray"> (mm)</font></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Height</label></span></td>
									<td><input class="inputbox" type="text" name="height" value="<?php if($record) echo $record->height;?>" size="10"/><font color="gray"> (mm)</font></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Thickness</label></span></td>
									<td><input class="inputbox" type="text" name="thickness" value="<?php if($record) echo $record->thickness;?>" size="10"/> <font color="gray"> (mm)</font></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Weight</label></span></td>
									<td><input class="inputbox" type="text" name="weight" value="<?php if($record) echo $record->weight;?>" size="10"/> <font color="gray"> (g)</font></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Pin</label></span></td>
									<td><input class="inputbox" type="text" name="pin" value="<?php if($record) echo $record->pin;?>" size="10"/></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Applications & Games</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td width="150" class="key"><label for="name">Video call</label></td>
									<td>
										<input type="radio" name="video_call" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="video_call" value="1" <?php if($record && $record->video_call==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Recording</label></td>
									<td>
										<input type="radio" name="recording" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="recording" value="1" <?php if($record && $record->recording==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Recording Call</label></td>
									<td>
										<input type="radio" name="recording_call" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="recording_call" value="1" <?php if($record && $record->recording_call==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">FM Radio</label></td>
									<td>
										<input type="radio" name="radio" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="radio" value="1" <?php if($record && $record->radio==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Tivi</label></td>
									<td>
										<input type="radio" name="tivi" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="tivi" value="1" <?php if($record && $record->tivi==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Music</label></td>
									<td>
										<input type="radio" name="music" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="music" value="1" <?php if($record && $record->music==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Java</label></td>
									<td>
										<input type="radio" name="java" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="java" value="1" <?php if($record && $record->java==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Camera:</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_camera', 'title', 'product_camera_id',$record->product_camera_id); else selectProductAttribute('product_camera', 'title', 'product_camera_id'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Contact - Message - Email</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Contact:</label></span></td>
									<td><input class="inputbox" type="text" name="contact" value="<?php if($record) echo $record->contact;?>" size="30"/></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Message:</label></span></td>
									<td><input class="inputbox" type="text" name="message" value="<?php if($record) echo $record->message;?>" size="30"/></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Email:</label></span></td>
									<td><input class="inputbox" type="text" name="email" value="<?php if($record) echo $record->email;?>" size="30"/></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Memory</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Memory internal</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_memory', 'value','memory_internal',$record->memory_internal); else selectProductAttribute('product_memory', 'value','memory_internal'); ?></td>
								</tr>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">RAM</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_memory', 'value','product_ram_id',$record->product_ram_id); else selectProductAttribute('product_memory', 'value','product_ram_id'); ?></td>
								</tr>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Memory Card</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_memory', 'value','product_memorycard_id',$record->product_memorycard_id); else selectProductAttribute('product_memory', 'value','product_memorycard_id'); ?></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">CPU</label></span></td>
									<td><input class="inputbox" type="text" name="cpu" value="<?php if($record) echo $record->cpu;?>" size="30"/></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Connection Database</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td width="150" class="key"><label for="name">Wifi</label></td>
									<td>
										<input type="radio" name="wifi" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="wifi" value="1" <?php if($record && $record->wifi==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">GPRS</label></td>
									<td>
										<input type="radio" name="gprs" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="gprs" value="1" <?php if($record && $record->gprs==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">GPS</label></td>
									<td>
										<input type="radio" name="gps" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="gps" value="1" <?php if($record && $record->gps==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>
									<td width="150" class="key"><label for="name">Blutouch</label></td>
									<td>
										<input type="radio" name="blutouch" value="0" <?php echo 'checked="checked"' ?> /> No
										<input type="radio" name="blutouch" value="1" <?php if($record && $record->blutouch==1) echo 'checked="checked"'; ?> /> Yes
									</td>
								</tr>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Connection</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_connection','title','product_connection_id',$record->product_connection_id); else selectProductAttribute('product_connection','title','product_connection_id'); ?></td>
								</tr>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Sim card</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_simcard','title','product_simcard_id',$record->product_simcard_id); else selectProductAttribute('product_simcard','title','product_simcard_id'); ?></td>
								</tr>
								<tr>	
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Mobile Network</label></span></td>
									<td class="paramlist_value"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				
				<div class="panel"><!-- Start panel -->
					<h3 id="cpanel-panel-logged" class="title jpane-toggler"><span>Display</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Display Type</label></span></td>
								<td><input class="inputbox" type="text" name="display_type" value="<?php if($record) echo $record->display_type;?>" size="30"/></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Display PX</label></span></td>
								<td><input class="inputbox" type="text" name="display_px" value="<?php if($record) echo $record->display_px;?>" size="30"/></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Size</label></span></td>
								<td><input class="inputbox" type="text" name="display_size" value="<?php if($record) echo $record->display_size;?>" size="30"/></td>
							</tr>
							<tr>
								<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Touch</label></span></td>
								<td class="paramlist_value"><?php if ($record)  selectProductAttribute('product_display_touch','title','display_touch_id',$record->display_touch_id); else selectProductAttribute('product_display_touch','title','display_touch_id'); ?></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div><!-- end panel -->
				
				<div class="panel">
					<h3 id="cpanel-panel-popular" class="title jpane-toggler"><span>Other Attribute</span></h3>
					<div class="jpane-slider content" style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;">
						<table class="paramlist admintable" width="100%" cellspacing="1">
							<tbody>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Quantity:</label></span></td>
									<td><input class="inputbox" type="text" name="quantity" value="<?php if($record) echo $record->quantity;?>" size="10"/></td>
								</tr>
								<tr>
									<td class="paramlist_key" width="40%"><span class="editlinktip"><label id="paramsposttext-lbl" for="paramsposttext" class="hasTip">Discount:</label></span></td>
									<td class="paramlist_value"><?php if ($record)  selectProductDiscount($record->product_discount_id); else selectProductDiscount(); ?></td>
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
    <input type="hidden" name="option" value="products" />
	<input type="hidden" name="id" value="<?php if($record) echo $record->id;?>" />
	<input type="hidden" name="created_date" value="<?php echo date("Y-m-d H:i:s"); ?>" />
	<input type="hidden" name="created_by" value="<?php if($record) echo $record->created_by; else echo $_SESSION['au']->id; ?>" />
	<input type="hidden" name="modified_by" value="<?php if($record) echo $_SESSION['au']->id; ?>" />
	<?php
	}
	
	function viewTrash(){
		require_once('base/class.pagination.php');
		$search = Request::get('search');
		$total = getCountProduct(1,$search);
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',10);
		$pageNav = new Pagination($total,$lms,$lm);
		$products = getAllProduct(1,$search,$status,$section,$category,$manufacturer);
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
                <th nowrap="nowrap">Image</th>
                <th nowrap="nowrap">Price</th>
                <th nowrap="nowrap">Category</th>
                <th nowrap="nowrap">Section</th>
                <th nowrap="nowrap">Manufacturer</th>
                <th nowrap="nowrap">Quantity</th>
                <th width="1"><a href="">ID</a></th>
			</tr>
			</thead>
			<?php $i = 1; foreach($products AS $product) {
				$class = $product->published ? 'published' : 'unpublished';
				$published = '<a href="index.php?option=products&task=status&id='.$product->id.'" class="'.$class.'">&nbsp;&nbsp;&nbsp;</a>';
			?>
			<tr>
				<td><?php echo $pageNav->getOfset($i);?></td>
				<td><input id="actions-box" name="id[]" value="<?php echo $product->id;?>"  type="checkbox"/></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo $product->title;?></td>
				<td><center>
                  <?php 
                    if($product->thumb_image) {
                    	echo '<img class="" src="../images/product/thumb/'.$product->thumb_image.'"height="50" width="50" />';  }
                    else { ?>
                    	<img class="" src="../medias/system/images/no-image.jpg" height="60" width="60" /><?php } ?>
                </center></td>
                <td nowrap="nowrap" style="color:gray;"><?php echo number_format($product->price,0,'.','.').' '.getProductAttribute('product_currency','code',$product->product_currency_id);?></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo getProductAttribute('categories','title',$product->category_id);?></td>
				<td nowrap="nowrap" style="color:gray;"><center><?php echo getProductAttribute('sections','title',$product->section_id);?></center></a></td>
				<td nowrap="nowrap" style="color:gray;"><?php echo getProductAttribute('manufacturer','name',$product->manufacturer_id);?></td>
				<td nowrap="nowrap" style="color:gray;"><center><?php echo $product->quantity;?></center></td>
				<td nowrap="nowrap" style="color:gray;"><center><?php echo $product->id;?></center></td>
			</tr>
			<?php $i++; }?>
			<tr>
				<td style="border:none !important;" colspan="13"><?php $pageNav->displayCpanel();?></td>
			</tr>
		</table>
		<?php
		echo '<input type="hidden" name="option" value="products" />';
	}
	
	
	
/********************Cac ham xu ly chuc nang*********************/
	function cancel(){
		$option = Request::get('option');
		header('Location:index.php?option='.$option);
	}
	
	function remove(){
		$id = Request::get('id');
		$num = count($id);
		//chua hieu tai sao no lai lay ve id la mot array ?
		$product = includeTable();
		$query="UPDATE products SET `trash` ='1' WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		Message::setMessage($num.' Product(s) sent to the Trash.');
		redirect('index.php?option=products');
	}
	
	function restore(){
		$id = Request::get('id');
		$num = count($id);
		$product = includeTable();
		$query="UPDATE products SET `trash` = '0' WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		Message::setMessage($num.' Product(s) had restored.');
		redirect('index.php?option=products&task=trash');
	}
	
	
	function delete(){
		global $dbo;
		$id = Request::get('id');
		$num = count($id);
		//xoa hinh quang cao tuong ung voi du lieu muon xoa
		foreach ($id AS $id){
			$dbo->setQuery("SELECT `thumb_image` FROM `products` WHERE id = $id AND trash=1 ");
			$imgcurr = $dbo->loadObject();
			if ($imgcurr->thumb_image){
				//unlink('../images/product/thumb/'.$imgcurr->thumb_image);
		}
			$product = includeTable();
			$product->delete($id);
			/*
			if ($num ==1 ){
				$dbo->setQuery("DELETE FROM `products` WHERE id = $id");
				$dbo->loadResult();
			}
			if ($num > 1){
				$dbo->setQuery("DELETE FROM `products` WHERE id ".implode(',', $id));
				$dbo->loadResult();
			}
			*/
			
		}
		Message::setMessage($num.' Item(s) permanently deleted');
		redirect('index.php?option=products&task=trash');
	}
	
	function clean(){
		global $dbo;
		//xoa hinh quang cao tuong ung voi du lieu muon xoa
		$dbo->setQuery("SELECT `thumb_image` FROM `products` WHERE trash=1 ");
		$imgcurr = $dbo->loadObjectList();
		foreach ($imgcurr AS $img){
			$pic = $img->thumb_image;
			if ($pic){
				unlink("../images/product/thumb/$pic");
			}
		}
		$dbo->setQuery("DELETE FROM products WHERE `trash`='1' ");
		$dbo->query();
		Message::setMessage('Product Trash empty');
		redirect('index.php?option=products&task=trash');
		//viewTrash();
	}
	
	
	function save(){
		$product = includeTable();
		$product->bind();
		
		$quantity = Request::get('quantity');
		
		$product->quantity = $quantity;
		
		
		$title = trim(Request::get('title'));
		$titleEnglish = convertString($title);
		//xu ly alias of article
		$alias = str_replace(' ','-', $titleEnglish);
		$product->alias = $alias;
		//xu ly thumbai article
		$fieldName = 'thumb_image';
		$dir ='../images/product/thumb/';
		$fileName = $alias.'-';
		
		$fileInfo = $_FILES[$fieldName];
		if ($fileInfo['name']){
			$upload = UploadFile($fieldName,$dir,1,$fileName); //function UploadFile() cat dat trong file required
			if ($upload){
			 	$product->thumb_image = $upload;
			 	//Kiem tra xem: user dang add hay edit bai viet
			 	//Neu laf edit thi phai lay ve id cua bai viet va cap nhat lai ten hinh anh
			 	$id = Request::get('id');
			 	if ($id){ //tuc la dang edit hinh anh
			 		//lay ve hinh hien tai va thay the bang hinh moi
			 		global $dbo;
					$dbo->setQuery("SELECT `thumb_image` FROM `products` WHERE `id` = $id ");
					$imgcurr = $dbo->loadObject();
					if ($imgcurr & $imgcurr->thumb_image) unlink($dir.$imgcurr->thumb_image);
			 	}
			 }
		}
		
		if (!Request::get('section_id'))
			Message::setMessage('Please enter section for product',1);
		elseif (!Request::get('category_id'))
			Message::setMessage('Please enter category for product',1);
		elseif (!Request::get('manufacturer_id'))
			Message::setMessage('Please enter mamufacturer for product',1);
		else {
			if ($product->store()) Message::setMessage('Saved');
			else Message::setMessage('False',1);
		}
		
		global $task;
		switch($task){
			case 'save':
				redirect('index.php?option=products');
				break;
			case 'savex':
				redirect('index.php?option=products&task=add');
				break;
		}	
	}//end function save()
	
	
	
	function edit(){
		$product = includeTable();
		$id = Request::get('id');
		$product->load($id[0]);
		viewAdd($product);	
	}
	
	//thay doi thuoc tinh publshed cua 1 record
	function status(){
		$id = Request::get('id');
		if($id){
			$product = includeTable();
			$product->load($id);
			if($product->published == 1 ) $product->published = 0;
			else $product->published = 1;
			$product->store();
		}
		viewDefault();
	}
	
	function published($task){
		//lay danh sach cac record can thay doi trang thai published
		$id = Request::get('id');
		$p = $task == 'publish'? 1:0;
		$query = " UPDATE `products` SET `published` = ".$p." WHERE id IN(".implode(',',$id).") ";
		global $dbo;
		$dbo->setQuery($query);
		$dbo->query();
		viewDefault();
	}
    
	
	
	function getAllProduct($trash,$s='',$status='',$secid='',$catid='',$manid=''){	//lay tat cac cac user de hien thi ra luoi du lieu
		global $dbo;
		$lms = Request::get('limitstart',0);
		$lm = Request::get('limit',30);
		$query = "SELECT id,title,thumb_image,price,published,category_id,section_id,
					manufacturer_id,product_currency_id,quantity,access,ordering	
								FROM products 
								WHERE trash = $trash
					";
		if ($s) $query .= " AND (`title` LIKE '%$s%')";
		switch ($status){
			case '1': $query .= " AND `published` = '1' ";
				break;
			case '0': $query .= " AND `published` = '0' ";
				break;
		}
		if ($secid) $query .= " AND `section_id` = $secid";
		if ($catid) $query .= " AND `category_id` = $catid";
		if ($manid) $query .= " AND `manufacturer_id` = $manid";
		
		$query .= " ORDER BY id DESC ";
        $query .= " LIMIT $lms,$lm";
		$dbo->setQuery($query);
		return $dbo->loadObjectList();
	}
	
	function getCountProduct($trash,$s='',$status='',$secid='',$catid='',$manid=''){
		global $dbo;
		$query = "SELECT COUNT(id)
								FROM products 
								WHERE trash = $trash
					";
		
		if ($s) $query .= " AND (`title` LIKE '%$s%')";
		switch ($status){
			case '1': $query .= " AND `published` = '1' ";
				break;
			case '0': $query .= " AND `published` = '0' ";
				break;
		}
		if ($secid) $query .= " AND `section_id` = $secid";
		if ($catid) $query .= " AND `category_id` = $catid";
		if ($manid) $query .= " AND `manufacturer_id` = $manid";
		
		$query .= " ORDER BY id DESC ";
		$dbo->setQuery($query);
		return $dbo->loadResult();
	}
	
	
/********************Functions for viewDefault*********************/
	//ham lay ve danh sach cac attribute cua san pham nhu : section, categories... de loc
	function getFilterAttribute($filtername){
		global $dbo;
		$dbo->setQuery("SELECT title,id FROM $filtername ");
		$attributes = $dbo->loadObjectList();
			foreach ($attributes as $attribute){
				echo '<option name="" value="'.$attribute->id.'" >'.$attribute->title.'</option>';
			}
			echo $attribute->title;
	}
	
	
	
	function getProductAttribute($table,$properties,$id){
		global $dbo;
		$dbo->setQuery("SELECT $properties FROM $table WHERE id = $id ");
		$results =  $dbo->loadObjectList();
		foreach ($results AS $result){
			return $result->$properties;
		}
	}
	
	
	
	
	
	
	
/********************Functions for viewAdd*********************/
	//Ham lay ve ten 	Created by  va Modified by
	function getUser($uid){
		global $dbo;
		$dbo->setQuery("SELECT username FROM users WHERE id =$uid ");
		$user =  $dbo->loadObjectList();
		foreach ($user AS $u){
			return $u->username;
		}
	}
	
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
	
	function selectProductDiscount($discount_id=''){
		global $dbo;
		$dbo->setQuery("SELECT id,percent,description
						FROM product_discount ORDER BY id ASC ");
		$discounts = $dbo->loadObjectList();
		echo '<select name="product_discount_id">';
		foreach ($discounts AS $discount){ ?>
			<option <?php if($discount->id == $discount_id) echo 'selected="selected"'?> value="<?php echo $discount->id; ?>"><?php echo '('.$discount->percent.'%) '.$discount->description; ?></option>
		<?php }
		echo '</select>';
	}
	
	//ham lay ve nhieu thuoc tinh khac cua san pham
	function selectProductAttribute($table,$properties,$name,$id=''){
		global $dbo;
		$dbo->setQuery("SELECT id,".$properties." FROM ".$table." ORDER BY id ASC");
		$results = $dbo->loadObjectList();
		echo '<select name="'.$name.'">';
		foreach ($results AS $result){ ?>
			<option value="<?php echo $result->id; ?>" <?php if ($result->id == $id) echo 'selected = "selected"'; ?>> <?php echo $result->$properties; ?></option>
		<?php  }
		echo '</select>';
	}
	
	
	//select ngon ngu ho tro cho dien thoai
	
	
		function selectProductLanguage($pro_id='', $lang_id=''){
		global $dbo;
		
		$dbo->setQuery("SELECT id,title
						FROM products
						INNER JOIN product_language
						INNER JOIN rs_product_language
						ON products.id = rs_product_language.product_id AND rs_product_language.language_id = product_language.id
						ORDER BY product_language.id ASC ");
						
		
		
		$results = $dbo->loadObjectList();
		echo '<select name="product_discount_id" multiple="multiple">';
		foreach ($results AS $result){ ?>
			<option <?php if($result->products.id == $pro_id && $result->product_language.id == $lang_id) echo 'selected="selected"'?> value="<?php echo $result->product_id; ?>"><?php echo $result->langtitle; ?></option>
			
		<?php }
		echo '</select>';
		
		
	}
	
	
	
	/*
	function selectProductLanguage($pro_id='', $lang_id=''){
		global $dbo;
		
		$dbo->setQuery("SELECT products.id,products.title,product_language.id,product_id,language_id,product_language.title AS langtitle
						FROM products
						INNER JOIN product_language
						INNER JOIN rs_product_language
						ON products.id = rs_product_language.product_id AND rs_product_language.language_id = product_language.id
						ORDER BY product_language.id ASC ");
						
		
		
		$results = $dbo->loadObjectList();
		echo '<select name="product_discount_id" multiple="multiple">';
		foreach ($results AS $result){ ?>
			<option <?php if($result->products.id == $pro_id && $result->product_language.id == $lang_id) echo 'selected="selected"'?> value="<?php echo $result->product_id; ?>"><?php echo $result->langtitle; ?></option>
			
		<?php }
		echo '</select>';
		
		
	}
	
	*/
	
		
	

?>
