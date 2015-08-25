<h2>Bài Viết</h2>

	<?php 
		$i=0;
		foreach ($admin as $b) :
			
	?>
<table class="table table-bordered" style="width:880px">
	<tr>
		<td style="text-align:center;font-weight: bold;width:80px">Tiêu đề</td>
		<td style="text-align:center; font-style: italic;color:green;width:800px"><h2><?php  echo $b['title']?></h2></td>
	</tr>	
	<tr>
		<td style="text-align:center;font-weight: bold;width:80px">Nội dung</td>
		<td style="width:800px"><?php echo $b['content']?></td>
	</tr>
	<tr>
		<td style="text-align:center;font-weight: bold;width:80px">Ngày đăng</td>
		<td style="text-align:center;color:red;width:800px"><?php echo $b['date']?></td>
	</tr>
	</table>
	<hr style="border-color:#000099;margin-left:50px; margin-right:50px">
	<?php 
		$i++;
		endforeach;

	?>

