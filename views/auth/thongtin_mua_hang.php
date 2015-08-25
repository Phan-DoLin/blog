<h2>Thông tin đặt hàng</h2>

<form method="POST" action="" id="frmthongtin">
<table>
		<tr>
			<td>Tên khách hàng : </td>
			<td><input type="text" name="ten_kh" id="ten"></input></td>
		</tr>
		<tr>
			<td>Địa chỉ :</td>
			<td><input type="text"  name="dia_chi" id="dc"></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><input type="text"  name="sdt" id="sdt"></td>
		</tr>
		<tr>
			<td></td>
			
			<td><button type="submit" class="btn btn-primary" />Đặt hàng</button></td>
			
		</tr>	

</table>
</form>

<script>
    $('#frmthongtin').submit(function() {
        if ($('#ten').val()=="") {
            if (!alert("Yêu cầu nhập tên")) {
                $('#ten').focus();
                return false;
            }
        }

          if ($('#dc').val()=="") {
            if (!alert("Yêu cầu nhập địa chỉ")) {
                $('#dc').focus();
                return false;
            }
        }
           if ($('#sdt').val()=="") {
            if (!alert("Yêu cầu nhập số điện thoại")) {
                $('#sdt').focus();
                
            }
        }
        return true;
    });
</script>