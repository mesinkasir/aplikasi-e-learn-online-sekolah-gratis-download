<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$question = $exm->getQuestion();
$total = $exm->getTotalRows();
?>
<div class="main row">
	<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
	<div class="col-12 col-md-4 p-3 p-md-5 starttest">
	<div class="p-3 p-md-5 shadow rounded">
		<h2>Ujian Siswa Online</h2>
		<p>Ujian online ini dengan type pilihan jawaban .</p>

		<ul>
			<li><strong>Total Soal:</strong> <?php echo $total; ?></li>
			<li><strong>Type Soal:</strong> Dengan Opsi Pilihan Jawaban</li>
		</ul>
<div class="text-center">
		<a class="btn btn-danger btn-lg btn-block" href="test.php?q=<?php echo $question['quesNo']; ?>">Mulai</a>
		</div>
	</div>
	</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
  </div>
<?php include 'inc/footer.php'; ?>