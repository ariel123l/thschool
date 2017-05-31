<?php 
	$stmt = DB::getConn()->prepare("SELECT name_course,description, image_course, COUNT(sic.student_id) FROM courses c JOIN student_in_course sic ON c.id = sic.course_id WHERE id= ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name_course, $description, $image_course,$countStudent);
	$stmt->fetch();
	$stmt->close();
?>
<form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<h4 class="title_count_student_in_course inside_form_to_edit_student" ><?php echo "Total ". $countStudent . " tudents taking this course"; ?></h4>
	<input type="hidden" class="view_details_student_phone inside_form_to_edit_student" name="action" value="saveUpdateCourse">
	<input type="hidden" class="view_details_student_phone inside_form_to_edit_student" name="id" value="<?php echo $id; ?>">

	name course :<input class="view_details_student_name inside_form_to_edit_student" name="edit_name" value=<?php echo $name_course; ?>>
	<br>
	description course :<textarea id="description_in_edit_course" class="inside_form_to_edit_student" name="edit_description" ><?php echo $description; ?></textarea>
	<input type="file" class="view_details_student_image inside_form_to_edit_student" name="edit_image" value="<?php echo $name_course; ?>">

	<input type="submit">
</form>