<?php
	function t_display(){
		global $task;
		switch($task){
			case 'view':
				toolbarView();
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
		ToolbarHelper::title('Contact Manager');
		?>
		<table class="toolbar-button" >
			<tr>
				<td><?php ToolbarHelper::remove(); ?></td>
			</tr>
		</table> 
		<?php
	}
	
	function toolbarView(){
		ToolbarHelper::title('Contact Detail');
		?>
		<table class="toolbar-button" >
			<tr>
				<td><?php ToolbarHelper::cancel(); ?></td>
			</tr>
		</table> 
	<?php }
	
	
	function toolbarTrash(){
	ToolbarHelper::title('Contact Trash Manager');
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
