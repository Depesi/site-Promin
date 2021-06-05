<?php 
	$login = "admin";
	$pass = "admin123";

	$adminLogin = $_POST['login'];
	$adminPass = $_POST['pass'];

	if($login === $adminLogin && $pass === $adminPass) {
		
		session_start();

		$_SESSION["login"] = $adminLogin;
		$_SESSION["pass"] = $adminPass;

		header('Location: /diplom_&_sitePromin/admin/content.php');
	} else {
		header('Location: /diplom_&_sitePromin/admin/');
	}
?>