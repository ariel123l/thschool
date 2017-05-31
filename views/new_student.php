<?php 


$stmt = DB::getConn()->prepare("SELECT  name_course, image_course FROM courses");
	//$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name_course, $image_course);
	$stmt->fetch();
	$stmt->close();
?>

<form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<input type="hidden" class="view_details_student_phone" name="action" value="save_new_student">
	image :<input type="file" class="view_details_student_image" name="edit_image" placeholder="Image ">
	<input class="view_details_student_name" name="edit_name" placeholder="Name student">
	<input class="view_details_student_phone" name="edit_phone" placeholder="Phone">
	<input class="view_details_student_email" name="edit_email" placeholder="Email">
	<input type="checkbox" class="view_details_student_email" value="<?php echo'' ?>">
	<input type="submit">
</form>