<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminData = $ad->getAdminData($_POST);
}

  ?>
<div class="row">
<div class="col-12 col-md-4 p-3 p-md-5"></div>
<div class="col-12 col-md-4 p-3 p-md-5">
<div class="adminlogin p-3 p-md-5 shadow rounded text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
	<form action="" method="post">
		<input type="text" class="form-control" name="adminUser" placeholder="username"/>
		<br/>
		<input type="password" class="form-control" name="adminPass" placeholder="Password"/><br/>
		<input type="submit" name="login" class="btn btn-danger rounded-pill btn-lg btn-block" value="Login"/></td>
			
					<?php 
					if (isset($adminData)) {
						echo $adminData;
					}
					 ?>
				
	</form>
	</div>
	</div>
	<div class="col-12 col-md-4 p-3 p-md-5"></div>
		<div class="col-12 col-md-12 text-center">
	<a href="../index.php">home page</a>
	</div>
</div>
<?php include 'inc/footer.php'; ?>