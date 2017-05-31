<?php
session_start();

if (!isset($_SESSION['name'])) {
		header("Location: login.php");
}

if (!isset($_GET['subject']) || empty($_GET['subject'])) {
	header("Location: index.php?subject=student");
	die();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The School</title>
	<link rel="stylesheet" type="text/css" href="aatheSchool.css">
</head>
<body>
	<?php include 'views/header.php';?>
	<div class="container_all">

		<?php include 'views/main_subject.php' ?>
		
		<?php include 'views/main_view.php' ?>
		

	</div>


</body>
</html>


