

<h2>GIỎ HÀNG<img src="hinh_anh/cart1.gif" width="50" height="50"> </h2>
<?php

    //unset($_SESSION['cart']);
?>
<a class="btn btn-primary" href="index.php?c=san_pham&m=all">Mua thêm</a>
<a class="btn btn-primary" href="index.php?c=don_hang&m=thongtin">Đặt hàng</a>
<p>
<table class="table table-bordered">
    <tr>
        	<th style="text-align:center">STT</th>
			<th style="text-align:center">Hình ảnh</th>
			<th style="text-align:center">Tên sản phẩm</th>
			
			<th style="text-align:center">Số lượng</th>
			<th style="text-align:center">Đơn giá</th>
            <th style="text-align:center">Thành tiền</th>
			<th></th>
           
			
    </tr>
    <?php
        $i = 0;
        $total = 0;
        $tt=0;
    ?>
    <?php
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        foreach ($cart as $id => $qty) {
            if ($qty>0) {
                $i++;
                $total += $mang[$id]['gia_sp']*$qty;
                $tt=$mang[$id]['gia_sp']*$qty;
                ?>
                <tr>
                    <td style="text-align:center"><?php echo $i; ?></td>
                    <td style="text-align:center"><img src="hinh_anh/<?php echo $mang[$id]['hinh_anh']?> "width=50 height=50 /></td>
                    <td style="text-align:center"><?php echo $mang[$id]['ten_sp']?></td>
                    <td style="text-align:center"><?php echo $qty; ?></td>
                    <td style="text-align:center" class="text-right"><?php echo number_format($mang[$id]['gia_sp'],0,"",".")?></td>
                    <td style="text-align:center" class="text-right"><?php echo number_format($tt,0,"",".")?></td>
                    <td style="text-align:center"><a class="btn btn-primary"  href="index.php?c=san_pham&m=xoa_session_id&id=<?php echo $id ;?>"/>Xóa</td>
                      
                    
                </tr>
                <?php
                $_SESSION['total'] = $total;
            }
        }
    }
    ?>
    <?php        
        if ($i):
    ?>
    <tr>
        <td colspan="6"><strong>Tổng cộng :</strong></td>
        <td  colspan="1" class="text-right" style="text-align:center"><strong><?php echo number_format($total,0,"",".") ." ". "VND"; ?></strong></td>
    </tr>
    <?php else: ?>
    <tr>
        <td colspan="6" class="text-center"><strong>Chưa có chi tiêu nào trong tháng này.</strong></td>
    </tr>
    <?php endif; ?>
</table>


