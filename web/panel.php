<?php 
session_start();
if(!isset($_SESSION['logged'])){
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FoxLogger - Logs Data</title>
</head>
<body>
Zalogowano. Tutaj będą się znajdować dane.
<a href="logout.php">wyloguj</a>
<div>
	<div>www.strona.pl</div>
	<div>
		<div>login</div>
		<div>haslo</div>
	</div>
</div>
</body>
</html>