<div class="unitcenter" > 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Thông báo từ hệ thống</h2>
        </div>  
        <div>
        	<div style="font-size:14px;padding:20px 15px;">
        <?php 
        	if ($this->active == true ){
        		echo '<p>Kích hoạt tài khoản thành công.</p>
        		<p>Vui lòng đăng nhập hệ thống để có thể sử dụng các chức năng mà chỉ có thành viên của hệ thống mới có quyền.</p>';
        	}else {
        		echo '<p>Kích hoạt tài khoản không thành công.</p>';
        	}
        ?>
        	</div>
        </div>
</td></tr></tbody></table>
</div>
