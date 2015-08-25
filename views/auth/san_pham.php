



<span style="float:left;width:800px;margin-bottom: 30px;">
  <?php 

  	$i=0;
  	foreach ($sp as $s):
 
  ?>
	
	
		<div class="item">
				<div class="item_tensp"><?php echo $s['ten_sp'] ?></div>
				
				<div class="item_hinhanh"><img src="hinh_anh/<?php echo $s['hinh_anh']?>" width="130" height="130"/></div>
				
				<div class="item_gia"><?php echo "Gía" .": " .number_format($s['gia_sp'],0,"",".") ." ". "VND"  ?></div>
				

				<div class="item_submit"><a class="btn btn-primary" href="index.php?c=san_pham&m=them_sp_vao_gh&id=<?php echo $s['ma_sp']?>">Mua hàng</a></div>
				
		</div>
<?php 
$i++;
endforeach;

?>

</span>

		<div style="clear: both">
			<?php $total_page = (int)$data['total_page']?>

			<ul style="list-style:none ">
				<?php
				for($i = 1;$i<=$total_page;$i++){
					if($i==$data['page']){
						?>
						<li class="btn btn-primary" style="float:left; cursor: context-menu;"><?php echo $i; ?></li>
						<?php
						}
						else{
							?>
							<li  style="float:left;"><a class="btn btn-default" href="index.php?c=san_pham&m=all&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
						}
					}
				?>
			</ul>
		</div>




  