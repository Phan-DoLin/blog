<h2>Thay đổi thông tin sản phẩm</h2>
<form method="POST" action="index.php?c=san_pham&m=update">

<table style="margin-left:100px;margin-top:50px">
        <tr>
            <td style="text-align:right;color:blue"><label class="control-label" for="inputName">Tên sản phẩm</label></td>

            <td><input type="text" id="inputName" placeholder="Tên sản phẩm" name="ten_sp" value="<?php echo $sp['ten_sp']?>"/></td>

          <tr>
            <td style="text-align:right;color:blue"><label class="control-label" for="inputEmail">Gía sản phẩm</label></td>
            <td><input type="text" id="inputName" placeholder="Gía sản phẩm" name="gia_sp" value="<?php echo $sp['gia_sp']?>"/></td>
        </tr>
          <tr>
            <td style="text-align:right;color:blue"><label class="control-label" for="inputPassword">Hình ảnh</label></td>
            <td><input type="text" placeholder="Hình ảnh" name="hinh_anh"  value="<?php echo $sp['hinh_anh']?>"/></td>
        </tr>
          <tr>
            <td style="text-align:right;color:blue"><label class="control-label" for="inputPassword">Thương hiệu</label></td>
            <td><input type="text" placeholder="Tên thương hiệu" name="thuong_hieu"  value="<?php echo $sp['thuong_hieu']?>"/></td>
        </tr>
        <tr>
            <td></td>
            
            	<input type="hidden" name="ma_sp" value="<?php echo $sp['ma_sp']?>">
            <td><button type="submit" class="btn btn-primary" style="width:100px; margin-left:60px">Thay đổi</button></td>
        	
        </tr>
</table>
</form>