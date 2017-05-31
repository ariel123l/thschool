<?php

include 'views/DB.php';
//echo "sscsc";


switch ($_GET['subject']) {
	case 'student':
		include 'show_list_student_courses.php';
		break;

	case 'course':
		include 'show_list_student_courses.php';
		break;

	case 'administration':
		include 'show_list_administration.php';
		break;

	default:
		# code...
		break;
}
