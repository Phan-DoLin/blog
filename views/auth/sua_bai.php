<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<h2>Thay đổi thông tin bài viết</h2>
<br>
<form method="post" action="index.php?c=auth&m=thaydoi">

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<table style="margin-left:100px">
        <tr>
            <td style="text-align:right"><label class="control-label" for="inputName">Title</label></td>

            <td><input type="text" id="inputName" placeholder="Title" name="title" value="<?php echo $admin['title']?>"/></td>

          <tr>
            <td style="text-align:right"><label class="control-label" for="inputEmail">Content</label></td>
            <td><textarea cols="70" rows="20" class="ckeditor" name="content" id="ckeditor1"><?php echo $admin['content']; ?></textarea></td>
        </tr>
       <!--    <tr>
            <td style="text-align:right"><label class="control-label" for="inputPassword">picture</label></td>
            <td><input type="file"/></input></td>
        </tr> -->
          <tr>
            <td style="text-align:right"><label class="control-label" for="inputPassword">Date</label></td>
            <td><input type="date" name="date" value="<?php echo $admin['date']?>"/></input></td>
        </tr>
        <tr>
            <td></td>
            
                    <input type="hidden" name="ID" value="<?php echo $admin['ID']?>">
            <td><button type="submit" class="btn btn-primary" style="width:100px; margin-left:60px">Thay đổi</button></td>
        </tr>
</table>
</form>
