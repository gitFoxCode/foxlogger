<?php
session_start();
if(isset($_POST['submit'])){
	if(isset($_POST['login']) && isset($_POST['password'])){
		if($_POST['login'] == "admin" && $_POST['password'] == "admin"){
			$_SESSION['logged'] = true;
			header('location: panel.php');
		} else{
			$_SESSION['error'] = "Nieprawidłowy login lub hasło";
			header('location: index.php');
		}
	}else{
		$_SESSION['error'] = "Nieprawidłowe dane";
		header('location: index.php');
	}
}else{
	$_SESSION['error'] = "Nieprawidłowe dane";
	header('location: index.php');
}
