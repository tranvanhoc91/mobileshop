<?php
	function t_display(){
		global $task;
		switch($task){
			case 'view':
				toolbarAdd();
				break;
			default:
				toolbarDefault();
				break;
		}
	}
	
	function toolbarDefault(){
		ToolbarHelper::title('Order Manager');
		?>
		<table class="toolbar-button" >
			<tr>
				<td><?php ToolbarHelper::custom('view', 'View',$checked_require = false); ?></td>
			</tr>
		</table> 
		<?php
	}
	
	function toolbarAdd(){
		global $task;
		switch ($task){
			case 'add':
				ToolbarHelper::title('Add Product');
				break;
			case 'edit':
				ToolbarHelper::title('Edit Product');
				break;
		}
		?>
		<table class="toolbar-button">
			<tr>
				<td><?php ToolbarHelper::cancel(); ?></td>
			</tr>
		</table>		
		<?php
	}
	
?>
