<?php 


	$stmt = DB::getConn()->prepare("SELECT name_course,description, image_course, COUNT(sic.student_id) FROM courses c JOIN student_in_course sic ON c.id = sic.course_id WHERE id= ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name_course, $description, $image_course,$countStudent);
	$stmt->fetch();
	$stmt->close();


 ?>

 <form class='form_view_Details_course'>
 	<h1 class='title_form'><?php echo $name_course . "," . $countStudent . " Students"; ?></h1>
 	<?php  if ($_SESSION['role']!== 3 ) {
 		echo "<a class='linke_to_edit' href='?subject=course&view=edit&id=$id'>Edit</a>";
 		echo "<a class='linke_to_delete' href='?subject=course&view=delete&id=$id'>Delete</a>";
 	}; ?>
 	<div class='view_details_student'>
		<img class='view_details_student_image' src="uploads/<?php echo $image_course ; ?>">
		<h3 class="tiltle_list_courses_for_student">description :</h3>
		<div class='description_in_Details_course'><?php echo $description; ?>  </div>

	</div>
</form>