<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>
<div class="main row">
<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
	<div class="col-12 col-md-4 p-3 p-md-5 shadow rounded">
<h1>Selesai</h1>


	<p>Kamu sudah menyelesaikan semua tugas dengan baik.</p>
	<p>Total Jawaban Benar Kamu: 
		<?php 
		if (isset($_SESSION['score'])) {
			echo $_SESSION['score'];
			unset($_SESSION['score']);
		}
		 ?>
	</p>

	<a class="btn btn-danger" href="viewans.php">Lihat Jawaban</a>
	<!--<a href="starttest.php">Start Again</a>-->
</div>
	<div class="col-12 col-md-4 p-3 p-md-5"></div>
  </div>
<?php include 'inc/footer.php'; ?>