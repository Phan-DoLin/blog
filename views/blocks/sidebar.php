<h3>Menu Chính</h3>

<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
     <li ><a href="index.php?c=auth&m=admin" >Quản lý blog</a></li>
    <li ><a href="index.php?c=auth&m=dang_bai">Đăng bài viết</a></li>
    <li ><a href="index.php?c=san_pham&m=sp">Quản lý sản phẩm</a></li>
    <li ><a href="index.php?c=don_hang&m=all">Đơn hàng</a></li>
    <li ><a href="index.php?c=auth&m=logout" onclick="return confirm('Bạn có thật sự muốn thoát');">Logout</a></li>

    <?php else: ?>
    <li><a href="index.php?c=auth&m=login">Login</a></li>
    <li><a href="index.php?c=auth&m=register">Register</a></li>
    
    <li><a href="index.php?c=auth&m=bai_viet">Logout</a></li>
    <?php endif; ?>
</ul>

