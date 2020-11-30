<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>
<div class="row">
	<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
	<div class="col-12 col-md-3 p-3 p-md-5"></div>
	<div class="col-12 col-md-6 p-3 p-md-5">
	<div class="p-3 p-md-5 shadow rounded segment text-center">
	<svg width="5em" height="5em" viewBox="0 0 16 16" class="text-danger bi bi-person-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
			<h2>Area Ujian Siswa Online.</h2>
		Hallo.. <strong><?php echo Session::get('name') ; ?></strong> , Semoga hari mu menyenangkan , dan pastikan kamu sudah belajar ya untuk mengikuti ujian ini.<br/><br/>
<a class="btn btn-danger btn-lg btn-rounded-pill" href="starttest.php">Mulai Ujian</a>
	</div>
	</div>
	<div class="col-12 col-md-3 p-3 p-md-5"></div>
  </div>
<?php include 'inc/footer.php'; ?>