<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Đăng kí thành viên</h2>
        </div>  
        <div id="system-message"> <?php echo $this->msgRegister; ?></div>
		<div id="register" style="width:650px;text-align:justify;" >
		<?php 
			if ($this->success == true){
				echo '<div>Bạn đã đăng kí thành công tài khoản tại website.</div>
					 <div>Để trở thành thành viên chính thức của website vui lòng vào mail của bạn đã đăng kí để kích hoạt tài khoản</div>
					 <div>Nếu có sự cố trong quá trình kích hoạt tài khoản xin vui lòng liên hệ BQT website để được trợ giúp</div>
				';
			}else { //dang ki khong thanh cong: co loi trong qua trinh insert 
				echo '<div>Có lỗi trong quá trình đăng kí thành viên mới.Vui lòng phản hồi lại thông tin với BTC.</div>Xin cảm ơn.';
			}
		?>
		</div>
</td></tr></tbody></table>
</div>