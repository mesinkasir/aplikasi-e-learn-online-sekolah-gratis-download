<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<?php 
if (isset($_GET['delque'])) {
		$quesno = (int)$_GET['delque'];
		$delQue = $exm->delQuestion($quesno);
	}
 ?>
	<?php 
		if (isset($delQue)) {
			echo $delQue;
		}
	 ?>
	<table class="table table-striped shadow rounded">
				<tr class="bg-danger text-white">
			<th>#</th>
			<th>Soal Ujian</th>
			<th></th>
		</tr>
<?php 
$getData = $exm->getQueByOrder();
if ($getData) {
	$i = 0;
	while ($result = $getData->fetch_assoc()) {
		$i++;
 ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $result['ques']; ?></td>
			<td>
				<a class="btn btn-danger" onclick="return confirm('Hapus soal ini ??')" href="?delque=<?php echo $result['quesNo'];?>">Hapus</a>
			</td>
		</tr>
	<?php  }} ?>
	</table>
<?php include 'inc/footer.php'; ?>