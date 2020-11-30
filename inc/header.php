<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";

	});
	$db = new Database();
	$fm = new Format();
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
<title>Axcora School Apps aplikasi ujian online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="https://mesinkasironline.web.app/img/createwebsiteusingangular.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>


	<?php 
	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		Session::destroy();
		header("Location:index.php");
		exit();
	}
	 ?>

<div class="phpcoding ">
	<section class="headeroption"></section>
		<section class="maincontent">
		<nav class="nav justify-content-center bg-light shadow">
		

			<?php
			$login = Session::get("login");
			if ($login == true) {?>
			
			<a class="nav-link text-danger" href="profile.php">Profile</a>
			<a class="nav-link text-danger" href="exam.php">Ujian</a>
		<a class="nav-link text-danger" href="?action=logout">Logout</a>
		<?php } else { ?>
			<a class="nav-link text-danger" href="register.php">Register</a>
			<a class="nav-link text-danger" href="index.php">Login</a>
		<?php } ?>
			
	
		<?php
			$login = Session::get("login");
			if ($login == true) {?>

				
		<?php } ?>
		</nav>
	