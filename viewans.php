<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$total = $exm->getTotalRows();


 ?>
<div class="main row">
<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
	<div class="col-12 col-md-4 p-3 p-md-5 shadow rounded">
<p>Jawaban dari <?php echo $total; ?> Soal</p>
	<div class="viewans">
		<table> 
			<?php 
			$getQues = $exm->getQueByOrder();
			if ($getQues) {
				while ($question = $getQues->fetch_assoc()) {
			

			 ?>
			<tr>
				<td colspan="2">
				<p><br/><?php echo $question['quesNo']; ?>. <?php echo $question['ques']; ?></p>
				</td>
			</tr>

			<?php 
				$number = $question['quesNo'];
				$answer = $exm->getAnswer($number);
				if ($answer) {
					while ($result = $answer->fetch_assoc()) {
				
			 ?>

			<tr>
				<td>
				 <input type="radio"/>
				 <?php 
				 if ($result['rightAns'] == '1') {
				 	echo " <span style='color:blue'>".$result['ans']."</span>"; 
				 }else{
				 echo $result['ans']; 
				}
				 ?>
				</td>
			</tr>
		<?php }} ?>
		<?php }} ?>

			
		</table>
		<!--<a href="starttest.php">Mulai Laghi</a>-->
</div>
	<div class="col-12 col-md-4 p-3 p-md-5"></div>
 </div>
<?php include 'inc/footer.php'; ?>