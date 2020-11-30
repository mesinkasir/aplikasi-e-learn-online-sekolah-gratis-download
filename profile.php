<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$userid = Session::get("userid");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$updateUser = $usr->updateUserData($userid, $_POST);

}

?>
<div class="main row">
	<div class="col-12 col-md-12 text-center">
<img class="img-fluid" width="160" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img class="img-fluid" src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</div>
<div class="profile col-12 col-md-4 p-3 p-md-5"></div>
<div class="profile col-12 col-md-4 p-3 p-md-5 shadow rounded">
   <?php 
if (isset($updateUser)) {
	echo $updateUser;
}

	 ?>
	<form action="" method="post">
	<?php
	$getData = $usr->getUserData($userid);
	if ($getData) {
	//here we can skip while loop for fetching 1 row data
		$result = $getData->fetch_assoc();
	?>
	<div class="text-center p-3">
		<svg width="5em" height="5em" viewBox="0 0 16 16" class="text-danger text-center bi bi-person-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></div>
		<table class="table"> 
		     <tr>
			   <td>Nama</td>
			   <td><input class="rounded" name="name" type="text" value="<?php echo $result['name'] ?>" /></td>
			 </tr> 
			  <tr>
			   <td>Username</td>
			   <td><input class="rounded" name="username" type="text" value="<?php echo $result['username'] ?>"/></td>
			 </tr>  
			 <tr>
			   <td>Email</td>
			   <td><input class="rounded" name="email" type="text" value="<?php echo $result['email'] ?>"/></td>
			 </tr>		 
			  <tr>
			  <td></td>
			   <td><input type="submit" class="btn btn-danger rounded btn-block" value="Update">
			   </td>
			 </tr>
       </table>

   <?php } ?>
	   </form>	
	   </div>
	   <div class="profile col-12 col-md-4 p-3 p-md-5"></div>
</div>
<?php include 'inc/footer.php'; ?>