<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<h2>Nhập đầy đủ thông tin bài đăng</h2>
<br>
<form method="post" action="">

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<table style="margin-left:100px">
        <tr>
            <td style="text-align:right"><label class="control-label" for="inputName">Title</label></td>

            <td><input type="text" id="inputName" placeholder="Title" name="title" value=""/></td>

          <tr>
            <td style="text-align:right"><label class="control-label" for="inputEmail">Content</label></td>
            <td><textarea class="ckeditor" name="content" id="ckeditor1"></textarea></td>
        </tr>
      
          <tr>
            <td style="text-align:right"><label class="control-label" for="inputPassword">Date</label></td>
            <td><input type="date" name="date" /></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-primary" style="width:100px; margin-left:60px">Đăng Bài</button></td>
        </tr>
</table>
</form>
