<?php include 'inc/header.php'; ?>
<div class="row">
<div class="col-12 col-md-12 p-3 p-md-5 text-center lead">
<a href="index.php">
<img width="120" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/><br/>
<img src="https://2.bp.blogspot.com/-qMv0G3yldTk/XS9kKKfMbgI/AAAAAAAABP8/nE-r8B1kujolP2u-Awwr3Pi2jFXggUrlQCK4BGAYYCw/s600/axcora%2Bdesign%2Bpembuatan%2Bwebsite%2Bblogspot%2Btemplate.gif"/>
</a>
</div>
<div class="col-12 col-md-4 p-3 p-md-5"></div>
<div class="col-12 col-md-4 p-3 p-md-5 shadow rounded">
<h3>Register Siswa</h3>
	<form action="" method="post">
		<table class="table">
		<tr>
           <td>Nama</td>
           <td><input class="rounded" type="text" name="name" id="name"></td>
         </tr>
		<tr>
           <td>Username</td>
           <td><input class="rounded" name="username" type="text" id="username"></td>
         </tr>
         <tr>
           <td>Password</td>
           <td><input class="rounded" type="password" name="password" id="password"></td>
         </tr>
         
         <tr>
           <td>E-mail</td>
           <td><input class="rounded" name="email" type="text" id="email" ></td>
         </tr>
         <tr>
           <td></td>
           <td><input class="btn btn-danger btn-block" type="submit" id="regsubmit" value="Register">
           </td>
         </tr>
       </table>
	   </form>
	   <p>Sudah Terdaftar ? <a href="index.php">Login</a> disini</p>
          <span id="state"></span>
	</div>
	<div class="col-12 col-md-4 p-3 p-md-5"></div>
	</div>
<?php include 'inc/footer.php'; ?>