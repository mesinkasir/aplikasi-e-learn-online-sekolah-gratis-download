<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
if (isset($_GET['q'])) {
	$number = (int) $_GET['q'];
}else{
	header("Location:exam.php");
}

$total = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);
?>

<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$process = $pro->processData($_POST);
	}

 ?>
<div class="main row">
	<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
	<div class="col-12 col-md-4 p-3 p-md-5 shadow rounded">
<h3>Pertanyaan <?php echo $question['quesNo']; ?> dari <?php echo $total; ?> soal</h3>
	<div class="test">
		<form method="post" action="">
		<table class="table"> 
			<tr>
				<td colspan="2">
				 <h5>Pertanyaan <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h5>
				</td>
			</tr>

			<?php 

				$answer = $exm->getAnswer($number);
				if ($answer) {
					while ($result = $answer->fetch_assoc()) {
				
			 ?>

			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>" /> <?php echo $result['ans']; ?>
				</td>
			</tr>
		<?php }} ?>

			<tr>
			  <td>
				<input type="submit" name="submit" class="btn btn-danger rounded float-right" value="Berikutnya →"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</td>
			</tr>
			
		</table>
	</form>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
 </div>
<?php include 'inc/footer.php'; ?>