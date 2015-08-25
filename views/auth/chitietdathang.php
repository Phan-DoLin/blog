<h2>Chi tiết đặt hàng</h2>




<table style="margin-top:50px">
	<tr>
		<td >Tên khách hàng : </td>
		<td style="color: green; font-weight:bold"><?php echo $data[0]['ten_kh']; ?></td>

	</tr>

	<tr>
		<td>Địa chỉ : </td>
		<td style="color: red; font-weight:bold"><?php echo $data[0]['dia_chi']; ?></td>
	</tr>

	<tr>
		<td>Số điện thoại : </td>
		<td style="color: #EE7621; font-weight:bold"><?php echo $data[0]['sdt']; ?></td>
	</tr>



</table>

<table class="table table-bordered" style="margin-top:30px">
	<tr>
		<th style="text-align:center">STT</th>
		<th style="text-align:center">Tên sản phẩm</th>
		<th style="text-align:center">Số lượng</th>
		<th style="text-align:center">Đơn giá</th>
		<th style="text-align:center">Thành tiền</th>
	</tr>
	<?php 
	$i=0;
	$total=0;
	foreach ($ctdh as $ct) {
		$i++;
		$total+=$ct['so_luong'] * $ct['gia_sp'];
		?>
		<tr>
			<td style="text-align:center"><?php echo $i?></td>
			<td style="text-align:center"><?php echo $ct['ten_sp']?></td>
			<td style="text-align:center"><?php echo $ct['so_luong']?></td>
			<td style="text-align:center"><?php echo number_format($ct['gia_sp'],0,"",".")?></td>
			<td style="text-align:center"><?php echo number_format($ct['so_luong'] * $ct['gia_sp'],0,"",".") ?></td>
		</tr>
		<?php
	}

	?>
	<tr>
		<td colspan="4">
			<b>Số tiền tổng cộng :</b> 
		</td>
		<td colspan="1" style="text-align:right">
			<b><?php echo number_format($total,0,"","."). "  "."VND";?></b>
		</td>
	</tr>



</table>	