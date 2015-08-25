<?php 

$page = 1;
$per_page = 4;
if(isset($_GET['page'])){
	if(is_numeric($_GET['page'])){
		if((int)($_GET['page'])>0){
			$page = $_GET['page'];
		}
	}
}

function san_pham_all()
{
	global $page, $per_page;
	$data = array();
	$data['sp'] = model('sanpham')->phan_trang($page, $per_page);
	$data['page'] = $page;
	$data['total_page'] = ceil((model('sanpham')->dem_so_trang())/$per_page);
	$data['template_file'] = 'auth/san_pham.php';
	render('layout.php', $data);

	
}

function san_pham_sony()
{
	$data=array();
	global $page, $per_page;
	
	
	$data['sp'] = model('sanpham')->phan_trang($page, $per_page,"where thuong_hieu='sony'");
	$data['page'] = $page;
	$data['total_page'] = ceil((model('sanpham')->dem_so_trang("where thuong_hieu='Sony'"))/$per_page);

	$data['template_file'] = 'danh_muc_san_pham/sony.php';
	render('layout.php', $data);
}
function san_pham_samsung()
{
	$data=array();
	
	global $page, $per_page;
	
	$data['sp'] = model('sanpham')->phan_trang($page, $per_page,"where thuong_hieu='samsung'");
	$data['page'] = $page;
	$data['total_page'] = ceil((model('sanpham')->dem_so_trang("where thuong_hieu='samsung'"))/$per_page);
	$data['template_file'] = 'danh_muc_san_pham/samsung.php';
	render('layout.php', $data);
}
function san_pham_LG()
{
	$data=array();
	
	global $page, $per_page;
	
	$data['sp'] = model('sanpham')->phan_trang($page, $per_page,"where thuong_hieu='LG'");
	$data['page'] = $page;
	$data['total_page'] = ceil((model('sanpham')->dem_so_trang("where thuong_hieu='LG'"))/$per_page);
	$data['template_file'] = 'danh_muc_san_pham/LG.php';
	render('layout.php', $data);
}
	//lấy sản phẩm theo thương hiệu
function san_pham_apple()
{
	$data=array();
	global $page, $per_page;
	
	$data['sp'] = model('sanpham')->phan_trang($page, $per_page,"where thuong_hieu='apple'");
	$data['page'] = $page;
	$data['total_page'] = ceil((model('sanpham')->dem_so_trang("where thuong_hieu='apple'"))/$per_page);
	$data['template_file'] = 'danh_muc_san_pham/Apple.php';
	render('layout.php', $data);
	
	
}
function san_pham_sp()
{
	$data = array();
	$currentUser = isLogged();
	
	$data['sp'] = model('sanpham')->all($currentUser);
	$data['template_file'] = 'auth/ds_sp.php';
	render('layout.php', $data);
}

function san_pham_delete()
{
	$id=$_POST['ma_sp'];
	
	if(model('sanpham')->xoa_sp($id))
		san_pham_sp();
}

	//hien thi trang sua san pham

function san_pham_laysp()
{
	$data=array();

	$id = $_POST['ma_sp'];
	
	$data['sp']=model('sanpham')->getOneBy($id,'ma_sp');

	$data['template_file']='auth/sua_sp.php';
	render('layout.php',$data);
}	
	//thay doi noi dung san pham

function san_pham_update()
{
	
	$id=$_POST['ma_sp'];
	if(model('sanpham')->sua_sp($id))
		san_pham_sp();

}



	//them san pham
function san_pham_insert()
{
	$data=array();

	if (isPostRequest()) {

		$postData = postData();

		
		$file=$_FILES['hinh_anh'];
		
		if($file['name']=="")
		{
			echo "Bạn chưa chọn hình";
		}else
		{
			move_uploaded_file($file['tmp_name'],"hinh_anh/". $file['name']);
			$ten_hinh=$_FILES['hinh_anh']['name'];
			$postData['hinh_anh']=$ten_hinh;
			if(model(sanpham)->them_sp($postData)){
				redirect('index.php?c=san_pham&m=all');
			}
		}
		
		
	}
	$data['template_file']='auth/them_sp.php';
	render('layout.php',$data);
}

function san_pham_gio_hang()
{
	$data=array();
	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $id => $qty) {
			$data['mang'][$id]=model('sanpham')->getOneBy($id);
		}
	}
	$data['template_file']='auth/gio_hang.php';
	render('layout.php',$data);
}

function san_pham_them_sp_vao_gh(){
	if(isset($_GET['id'])){
		$product_id = $_GET['id'];
		if(isset($_SESSION['cart'][$product_id])){

			$_SESSION['cart'][$product_id]++;
		} else{
			$_SESSION['cart'][$product_id]=1;
		}
	}

	
	san_pham_gio_hang();
}

function san_pham_xoa_session_id()
{
	$id=$_GET['id'];

	unset($_SESSION['cart'][$id]);

	san_pham_gio_hang();
}
?>