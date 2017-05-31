<?php
if (isset($_GET['error']) && ($_GET['error'] === 'true') ){
	$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The School</title>
	<link rel="stylesheet" type="text/css" href="Header.css">
</head>
<body>
	
	<?php
	include 'views/header.php';
	if (isset($error) && $error === true ) {
		echo "<h1>username or password is incurect</h1>";
	}
	?>

	<form action="api.php" method="POST" class="login_form">
		<input type="hidden" name="action" value="login">
		<input type="text" name="user_name" placeholder="user name">
		<input type="password" name="password" placeholder="Insert your password">
		<input type="submit" value="Log in">
	</form>


</body>
</html>