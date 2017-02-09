<?php 
global $dbo;
$dbo->setQuery("select position from modules where published = 1 and module = 'mod_counter'");
$modpos = $dbo->loadObject();
?>

<div class="unit<?php echo $modpos->position; ?>" >      
	<div class="title-block" ><span class="title-block">Thống kê truy cập</span></div>
	<div class="content-block"> 
		<div class="art-blockcontent-body"> 
		
        <div id="counter" style="text-align:center">
          <img src="images/counter/0.gif"><img src="images/counter/0.gif"><img src="images/counter/0.gif"><img src="images/counter/0.gif"><img src="images/counter/9.gif"><img src="images/counter/4.gif"><img src="images/counter/1.gif">          <br>
          <table class="tble_counter" width="100%" align="center">
            <tbody>
              <tr>
                <td><img alt="" src="images/counter/vtoday.png"></td>
                <td align="left">Hôm nay</td>
                <td>15                </td>
              </tr>
              <tr>
                <td><img alt="" src="images/counter/vyesterday.png"></td>
                <td align="left">Hôm qua</td>
                <td>62                </td>
              </tr>
              <tr>
                <td><img alt="" src="images/counter/vtoday.png"></td>
                <td align="left">Tuần này</td>
                <td>250                </td>
              </tr>
              <tr>
                <td><img alt="" src="images/counter/vyesterday.png"></td>
                <td align="left">Tháng này</td>
                <td>920                </td>
              </tr>
              <tr>
                <td><img alt="" src="images/counter/vall.png"></td>
                <td align="left">Tất cả</td>
                <td>941</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="cleared"></div>
      </div>
	</div> 
</div>  

