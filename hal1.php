<?php
	include("header.html");
	session_start();
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['akses'] = $_POST['akses'];
	$_SESSION['iduser'] = 1234;
	print_r($_SESSION);
	include("footer.html");
 ?>
 
