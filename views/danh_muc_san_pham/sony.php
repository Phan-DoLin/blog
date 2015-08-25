<h2>Sản phẩm của Sony</h2>

<span style="float:left;width:800px">

<?php 

	$i=0;
	//echo "<pre>";var_dump($spham);die;
	foreach ($sp as $s) {
		if((strtolower($s['thuong_hieu']) == 'sony')){
?>
		<div class="item">
				<div class="item_tensp"><?php echo $s['ten_sp'] ?></div>
				
				<div class="item_hinhanh"><img src="hinh_anh/<?php echo $s['hinh_anh']?>" width="130" height="130"/></div>
				
				<div class="item_gia"><?php echo "Gía" .": " . $s['gia_sp'] ." ". "Triệu"  ?></div>
				<form method="POST" action="index.php?c=san_pham&m=them_sp_vao_gh&id=<?php echo $s['ma_sp']?>">
				<div class="item_submit"><input type="submit" class="btn btn-primary" value="Mua Hàng"></input></div>
			</form>
		</div>
	


<?php }
}
$i++;

?>
</span>
	<div style="clear: both;padding-top:20px">
			<?php $total_page = (int)$data['total_page']?>

			<ul style="list-style:none; ">
				<?php
				for($i = 1;$i<=$total_page;$i++){
					if($i==$data['page']){
						?>
						<li class="btn btn-primary"><?php echo $i; ?></li>
						<?php
						}
						else{
							?>
							<li><a href="index.php?c=san_pham&m=all&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
						}
					}
				?>
			</ul>
		</div>

