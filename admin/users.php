<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$usr = new User();
?>
<?php 
	if (isset($_GET['dis'])) {
		$dblid = (int)$_GET['dis'];
		$dblUser = $usr->disableUser($dblid);
	}

	if (isset($_GET['ena'])) {
		$ebllid = (int)$_GET['ena'];
		$eblUser = $usr->enableUser($ebllid);
	}

	if (isset($_GET['del'])) {
		$delid = (int)$_GET['del'];
		$delUser = $usr->deleteUser($delid);
	}
 ?>

	<?php 
		if (isset($dblUser)) {
			echo $dblUser;
		}

		if (isset($eblUser)) {
			echo $eblUser;
		}

		if (isset($delUser)) {
			echo $delUser;
		}

	 ?>
	<table class="table table-striped shadow rounded">
		
		<tr class="bg-danger text-white">
			<th>#</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Email</th>
			<th></th>
		</tr>

<?php 
$userData = $usr->getAllUser();
if ($userData) {
	$i = 0;
	while ($result = $userData->fetch_assoc()) {
		$i++;

 ?>
		<tr>
			<td><?php 
				if ($result['status'] == '1') {
					echo "<span class='error'>".$i."</span>"; 
				}else{
					echo $i;
				}
			

			?></td>
			<td><?php echo $result['name'] ; ?></td>
			<td><?php echo $result['username'] ; ?></td>
			<td><?php echo $result['email'] ; ?></td>
			<td>

				<?php
					if ($result['status'] == '0') { ?>
						<a class="btn btn-dark" onclick="return confirm('Siswa ini akann non aktifkan')" href="?dis=<?php echo $result['userid'];?>">Non Aktif</a>
					<?php } else{ ?>
						<a class="btn btn-success" onclick="return confirm('Aktifkan siswa ini')" href="?ena=<?php echo $result['userid'];?>">Aktif</a>
					<?php }?>
				<a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus siswa ini')" href="?del=<?php echo $result['userid'];?>">Hapus</a>
			</td>

		</tr>

	<?php }} ?>

	</table>
<?php include 'inc/footer.php'; ?>