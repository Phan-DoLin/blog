
<h2>Quản lý blog</h2>
<table class="table table-bordered">

<tr >
	<th style="text-align:center">STT</th>
	<th style="text-align:center">Tiêu đề</th>
	
	
	<th style="text-align:center">Ngày đăng</th>
	<th></th>
	<th></th>
</tr>

<?php 
 		$i = 0;
	foreach ($data['admin'] as $a) :
?>
<tr>
<td style="text-align:center"><?php echo $i; ?></td>
<td style="text-align:center"><?php echo $a['title']; ?></td>

<td style="text-align:center"><?php echo $a['date']; ?></td>

<form method="post" action="index.php?c=auth&m=delete_blog">
	<input type="hidden" name="ID" value="<?php echo $a['ID']?>">
	<td style="text-align:center"><input type="submit" class="btn btn-primary" value="Xóa" onclick="return confirm('Bạn có chắc là muốn xóa');"></input></td>
</form>
<form method="post" action="index.php?c=auth&m=sua_bai">
		<input type="hidden" name="ID" value="<?php echo $a['ID']?>">
<td style="text-align:center"><input type="submit" class="btn btn-primary" value="Sửa" ></input></td>

</form>
</tr>
<?php 
$i++;
endforeach;
?>

</table>

