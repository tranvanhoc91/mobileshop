<?php 
global $siteDocument;

$siteDocument->addScript('libraries/js/mootools/core.js');
$siteDocument->addScript('libraries/js/mootools/more.js');
$siteDocument->addScript('libraries/plugins/formcheck/lang/en.js');
$siteDocument->addScript('libraries/plugins/formcheck/formcheck-yui.js');
$siteDocument->addStyleSheet('libraries/plugins/formcheck/theme/green/formcheck.css');
$siteDocument->addScript('libraries/js/active-formcheck.js');

?>

<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Liên hệ</h2>
        </div>  
        
        <p class="title">HỆ THỐNG SIÊU THỊ MOBILESHOP TOÀN QUỐC<p>
        <div class="ja-component-section">
        	<div class="item-content">
 			<?php foreach ($this->department AS $department ){ ?>
 			<p class="item-title-bold"><?php echo $department->title;  ?></p>
 			<p class="item-row"><?php echo $department->address; ?></p>
 			<p class="item-row">ĐT: <?php echo $department->phone; ?></p>
 			<p class="item-row">Fax: <?php echo $department->fax; ?></p>
 			<?php } ?>
 			</div>
 		</div>
 		
 		<div class="ja-component-section">
 			<p style="padding: 15px 0 0 15px;font-size: 15px;font-style: italic;">Email liên hệ : <font color="blue">contact@mobileshop.com</font></p>
 		</div>
 		<div class="line_dotted"></div>
 		
 		<div class="js-component-section">
 		<div id="system-message"> 
 		<?php  
 			if (Request::get('submit') == 'contact')
 				echo $this->message; 
 		?>
 		
 		</div>
 		 </div>
 		 
 		<div class="js-component-section">
 			<form action="index.php?option=com_contact" name="form-contact" id="form-contact" method="post">
				<div class="contact_email">
					<label for="contact_name">
					Tên bạn:</label>
					<input type="text" name="fullname"  class="validate['required']" id="contact_name" size="30" style="width:215px; height:25px; font-size:11px; font-weight:normal; text-align:left; border:1px solid #b0b0b0;" value="">
				</div>
				<div class="contact_email"><label id="contact_emailmsg" for="contact_email">
					Địa chỉ email*:</label>
					<input type="text" id="contact_email" class="email validate['required','email']" name="email" size="30" value="" style="width:215px; height:25px; font-size:11px; font-weight:normal; text-align:left; border:1px solid #b0b0b0;" class="inputbox required validate-email" maxlength="100">
				</div>
				<div class="contact_email"><label for="contact_subject">
					Tiêu đề thông điệp:</label>
					<input type="text" name="title" class="validate['required']" id="contact_subject" size="30" style="width:215px; height:25px; font-size:11px; font-weight:normal; text-align:left; border:1px solid #b0b0b0;" value="">
				</div>
					<div class="contact_email"><label id="contact_textmsg"  for="contact_text" class="textarea">
					Nội dung thông điệp*:</label>
					<textarea name="content" id="contact_text" class="validate['required']" class="inputbox required" rows="10" cols="40"></textarea>
				</div>
				<div align="center" style="padding-top: 15px;">
					<button class="button validate" name="submit" value="contact" type="submit">Gởi</button>
				</div>
 		</div>
 		
</td></tr></tbody></table>
</div>