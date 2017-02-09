<?php

if ($_SESSION['user']) {
	echo '<div class="logout-error">Có lỗi trong quá trình đăng xuất.Vui lòng thử lại</div>';
}else{
	echo '<div class="logout-success">
			<div>Bạn đã đăng xuất thành công.</div>
			<div>Bấm <a href="">vào đây</a> để quay lại trang chủ..</div>
		  </div>';
}