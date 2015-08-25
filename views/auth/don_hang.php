

<h2>ĐƠN HÀNG</h2>



<table class="table table-bordered">
    <tr>
        	<th style="text-align:center">STT</th>
            <th style="text-align:center">Tên sản phẩm</th>
			<th style="text-align:center">Địa chỉ</th>
			
			
			<th style="text-align:center">Số điện thoại</th>
			<th style="text-align:center">Tổng tiền</th>
			<th></th>
    </tr>
    <?php 
    $i=0;
        foreach ($mang as $m) {
            $i++;
    ?>
   
                <tr>
                    <td style="text-align:center"><?php echo $i; ?></td>
                    
                    <td style="text-align:center"><?php echo $m['ten_kh']?></td>
                    <td style="text-align:center"><?php echo $m['dia_chi']; ?></td>
                    <td style="text-align:center"><?php echo $m['sdt']; ?></td>
                    <td style="text-align:center"><?php echo number_format($m['tong_tien'],0,"","."); ?>VND</td>
                    <td style="text-align:center"><a href="index.php?c=don_hang&m=chitietdathang&ma_dh=<?php echo $m['ma_dh'] ?>" class="btn btn-primary"/>Chi tiết</td>
                    
                    
                </tr>
      
      <?php 
            }
      ?>
    
    
</table>
