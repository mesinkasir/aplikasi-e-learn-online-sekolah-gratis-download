<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$addQue = $exm->addQuestions($_POST);
	}
	//Get Total
	$total = $exm->getTotalRows();
	$next = $total+1;

 ?>
<?php 
if (isset($addQue)) {
	echo $addQue;
}
 ?>
 <div class="row">
 <div class="col-12 col-md-3 p-3"></div>
 <div class="col-12 col-md-6 p-3">
	<form action="" class="row shadow rounded p-3 p-md-5 text-left" method="post">
	<div class="col-12 col-md-12 p-3">
	<h3><strong>SOAL UJIAN ONLINE</strong></h3>
	</div>
	<div class="col-12 col-md-3 p-1">
	No Soal 
	</div>
	<div class="col-12 col-md-4 p-1">
	<input class="rounded col-8" type="number" value="<?php 
					if(isset($next)){
						echo $next;
					}
					 ?>"  name="quesNo">
				</div>
				<div class="col-12 col-md-12"></div>
			<div class="col-12 col-md-3 p-1">
					 Pertanyaan 
					 </div>
					 <div class="col-3 col-md-9 p-1">
					 <input class="rounded" type="text"  name="ques" placeholder="Masukan Pertanyaan Soal" required>
					</div>
					<div class="col-12 col-md-3 p-1">
Opsi
			</div>
<div class="col-12 col-md-8 p-1">
<input class="rounded p-1" type="text"  name="ans1" placeholder="Opsi Pilihan 1" required>
<br/>
<input class="rounded p-1" type="text"  name="ans2" placeholder="Opsi Pilihan 2" required>
<br/>
<input class="rounded p-1" type="text"  name="ans3" placeholder="Opsi Pilihan 3" required>
<br/>
<input class="rounded p-1" type="text"  name="ans4" placeholder="Opsi Pilihan 4" required>
</div>
 <div class="col-3 col-md-3 p-1">
			Jawaban
			</div>
			<div class="col-12 col-md-8 p-1">
			<input class="rounded" type="number"  name="rightAns" required>
			<br/><small class="text-muted"><small><i>Masukan opsi no jawaban</i></small></small>
			</div>
			 <div class="col-3 col-md-3 p-1"></div>
			<div class="col-12 col-md-9 p-1">
			<input type="submit" class="btn btn-danger col-5" value="Simpan Soal">
			</div>
	</form>
	</div>
	 <div class="col-12 col-md-3 p-3"></div>
	 </div>
<?php include 'inc/footer.php'; ?>