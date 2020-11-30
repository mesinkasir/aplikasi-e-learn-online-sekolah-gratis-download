<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>
<div class="row main">
<div class="col-12 col-md-4"></div>
	<div class="col-12 col-md-4 p-3 p-md-5 segment">
	<div class="p-3 p-md-5 shadow rounded text-center">
	<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
	<form action="" method="post" class="rounded">
		<input class="form-control" name="email" type="text" id="email" placeholder="masukan email"><br/>
		<input class="form-control" name="password" class="rounded" type="password" placeholder="masukan password" id="password"><br/>
		<input type="submit" id="loginsubmit" class="btn btn-danger rounded btn-block" value="Login">
	   </form><br/>
	   <p>Siswa Baru ? Silahkan <a href="register.php">Register</a></p>
	   <span class="empty" style="display: none;">Kolom wajib di isi</span>
	   <span class="error" style="display: none;">Email dan password salah</span>
	   <span class="disable" style="display: none;">User sudah di non aktifkan</span>
	</div>
</div>
<div class="col-12 col-md-4"></div>
	
</div>
<?php include 'inc/footer.php'; ?>