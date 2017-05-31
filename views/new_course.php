<?php 
	$stmt = DB::getConn()->prepare("SELECT name_course,description, image_course, COUNT(sic.student_id) FROM courses c JOIN student_in_course sic ON c.id = sic.course_id WHERE id= ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name_course, $description, $image_course,$countStudent);
	$stmt->fetch();
	$stmt->close();
?>

<form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<input type="hidden" class="view_details_student_phone" name="action" value="save_new_course">
	<input class="view_details_student_name" name="edit_name" placeholder="Name_course">
	<textarea class="view_details_student_phone" name="edit_description" placeholder="Insert description"></textarea>
	<input type="file" class="view_details_student_image" name="edit_image" >
	<input type="submit">
</form>