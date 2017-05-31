<?php 
	$stmt = DB::getConn()->prepare("SELECT name_course,description, image_course, COUNT(sic.student_id) FROM courses c JOIN student_in_course sic ON c.id = sic.course_id WHERE id= ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name_course, $description, $image_course,$countStudent);
	$stmt->fetch();
	$stmt->close();
?>


<form class="form_edit_Details_student">

	
	<input class="view_details_student_name" disabled name="edit_name" value=" <?php echo $name_course; ?>">
	<img type="file" class="view_details_student_image" src="uploads/<?php echo $image_course; ?> " alt="">
	<textarea class="view_details_student_phone" disabled name="edit_description" ><?php echo $description; ?></textarea>
	<input type="file" class="view_details_student_image" disabled name="edit_image" value="<?php echo $name_course; ?>">
	<h4 class="view_details_student_image" ><?php echo "Total ". $countStudent . " tudents taking this course"; ?></h4>
</form>