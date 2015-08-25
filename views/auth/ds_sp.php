<h2>Danh sách các sản phẩm</h2>

	<a href="index.php?c=san_pham&m=insert" class="btn btn-primary">Thêm sản phẩm</a>
	<p>
			
	<table class="table table-bordered">
			<tr>
				<th style="text-align:center">STT</th>
				<th style="text-align:center">Tên sản phẩm</th>
				<th style="text-align:center">Hình ảnh</th>
				<th style="text-align:center">Gía sản phẩm(Triệu)</th>
				<th style="text-align:center">Thương hiệu</th>
				<th></th>
				<th></th>
			
			</tr>
<?php 

$i=0;

foreach ($sp as $s):


?>
			<tr >
				<td style="text-align:center"><?php echo $i?></td>
				<td style="text-align:center"><?php echo $s['ten_sp']?></td>
				<td style="text-align:center"><img src="hinh_anh/<?php echo $s['hinh_anh']?>" width="100" height="100"/></td>
				<td style="text-align:center"><?php echo $s['gia_sp']?></td>
				<td style="text-align:center"><?php echo $s['thuong_hieu']?></td>
				
				<form method="POST" action="index.php?c=san_pham&m=laysp">
					<input type="hidden" value="<?php echo $s['ma_sp']?>" name="ma_sp">
				<td style="text-align:center"><input type="submit" class="btn btn-primary" value="Sửa"></input></td>
				</form>
				<form method="POST" action="index.php?c=san_pham&m=delete">
					<input type="hidden" value="<?php echo $s['ma_sp']?>" name="ma_sp"> 
				<td style="text-align:center"><input type="submit" class="btn btn-primary" value="Xóa" onclick="return confirm('Bạn chắc là muốn xóa sản phẩm này')"></input></td>	
				</form>
			</tr>	
<?php 
$i++;
endforeach;


?>
</table>	
