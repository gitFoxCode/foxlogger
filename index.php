<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>foxLogger - log database</title>
</head>
<body>

<h1 class="title">foxLogger</h1>
<form action="login.php" method="POST">
  <h2>Zaloguj się do panelu administracyjnego</h2>
  <?php 
    if(isset($_SESSION['error'])){
      echo '<div class="error">';
      echo $_SESSION['error'];
      echo '</div>';
      unset($_SESSION['error']);
    }
  ?>
  <input type="text" name="login" placeholder="login">
  <input type="password" name="password" placeholder="hasło">
  <input type="submit" name="submit" value="Zaloguj się">
</form>

</body>
</html>