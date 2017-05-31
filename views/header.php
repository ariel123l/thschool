<header class="header">
	<img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/LOGO_Transparent.png" class="header_logo">
	
	<nav class="header_nav">
<?php
	if (!empty($_SESSION['role'])) {

		echo "<a href='index.php?subject=student' class='header_school insid_nav_header'>School</a>";


		switch ($_SESSION['role']) {
		case '1':
			echo "<a href='index.php?subject=administration' class='header_administration insid_nav_header'>Administration</a>";
			break;

		case '2':
			echo "<a href='index.php?subject=administration' class='header_administration insid_nav_header'>Administration</a>";
			break;
		
		default:
			# code...
			break;
	}
	}


?>

		
	</nav>
	<div class="header_right">
		<a href="api.php?action=logout" class="logout">logout</a>
		
		<div class="name_user_header">
		<?php if (!empty($_SESSION['name'])) {
			echo $_SESSION['name'] . " , ";
		} ?></div>
		<div class="name_user_header"><?php if (!empty($_SESSION['role_name'])) {
			echo $_SESSION['role_name'];
		} ?></div>
	</div>
</header>