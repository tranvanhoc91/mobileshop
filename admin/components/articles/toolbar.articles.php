<?php
	function t_display(){
		global $task;
		switch($task){
			case 'edit':
			case 'add':
			case 'savex':
				toolbarAdd();
				break;
			case 'trash':
			case 'delete':
			case 'restore':
			case 'clean':
				toolbarTrash();
				break;
			default:
				toolbarDefault();
				break;
		}	
	}
	
	function toolbarDefault(){
		ToolbarHelper::title('Article Manager');
		?>
		<table class="toolbar-button" >
			<tr>
				<td><?php ToolbarHelper::publish(); ?></td>
				<td><?php ToolbarHelper::unpublish(); ?></td>
				<td><?php ToolbarHelper::remove(); ?></td>
				<td><?php ToolbarHelper::edit(); ?></td>
				<td><?php ToolbarHelper::add(); ?></td>
			</tr>
		</table> 
		<?php
	}
	
	
	
	function toolbarAdd(){
		global $task;
		switch ($task){
			case 'add':
				ToolbarHelper::title('Add Article');
				break;
			case 'edit':
				ToolbarHelper::title('Edit Article');
				break;
		}
		?>
		<table class="toolbar-button">
			<tr>
				<td><?php ToolbarHelper::savex(); ?></td>
				<td><?php ToolbarHelper::save(); ?></td>
				<td><?php ToolbarHelper::cancel(); ?></td>
			</tr>
		</table>		
		<?php
	}
	
	
	function toolbarTrash(){
		ToolbarHelper::title('Article Trash Manager');
		?>
		
		<table class="toolbar-button" >
			<tr>
				<td><?php ToolbarHelper::restore(); ?></td>
				<td><?php ToolbarHelper::delete(); ?></td>
				<td><?php ToolbarHelper::clean(); ?></td>
				<td><?php ToolbarHelper::cancel(); ?></td>
			</tr>
		</table> 
		<?php
	}
?>
