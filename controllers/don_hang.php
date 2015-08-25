<?php 

function don_hang_all()
{
	$data=array();
	$data['mang']=model('don_hang')->all();
	$data['template_file']='auth/don_hang.php';
	render('layout.php',$data);
}
function don_hang_thongtin()
{
	$data = array();
	if(isPostRequest()){
		$postdata=postData();
		$postdata['tong_tien']=$_SESSION['total'];
		$ma_dh=substr(md5(rand(1,9999)*rand(1,9999)), rand(0,5), 10);
		$postdata['ma_dh'] = $ma_dh;
		

		if(model('don_hang')->themkh($postdata))
		{
			$cart=$_SESSION['cart'];
			foreach ($cart as $id => $qty) {
				$data['ma_dh']=$ma_dh;
				$data['ma_sp']=$id;
				$data['so_luong']=$qty;

				model('ct_hd')->themcthd($data);
				session_unset('cart');
				session_unset('total');
			}
			?>
			<script type="text/javascript">
			alert("Đặt hàng thành công");
			</script>
			<?php
		}
		else {
			?>
			<script type="text/javascript">
			alert("vui lòng thử lại");
			</script>
			<?php
		}
	}
	$data['template_file']='auth/thongtin_mua_hang.php';
	render('layout.php',$data);
}

function don_hang_chitietdathang()
{
	$data=array();
	$id=$_GET['ma_dh'];
	$data=model('don_hang')->layttdh("where ma_dh='".$id."'");
	$data['ctdh']=model('ct_hd')->layctdh($id);
	$data['template_file']='auth/chitietdathang.php';
	render('layout.php',$data);
}


?>