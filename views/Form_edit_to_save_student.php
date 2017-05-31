<?php 
	$stmt = DB::getConn()->prepare("SELECT name, phone, email, image FROM student WHERE id = ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name, $phone, $email, $image);
	$stmt->fetch();
	$stmt->close();

?>

<form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<input type="hidden" name="action" value="saveUpdateStudent">
	<input type="hidden" class="view_details_student_phone inside_form_to_edit_student" name="id" value="<?php echo $id; ?>">
	<!-- <img type="file" class="view_details_student_image" src="uploads/<?php echo $image; ?> " alt=""> -->
	<input class="inside_form_to_edit_student" type="file" class="view_details_student_image" name="edit_image" value="<?php echo $image; ?>">
	name student :<input class="view_details_student_name inside_form_to_edit_student" name="edit_name" value=<?php echo $name; ?>>
	phone :<input class="view_details_student_phone inside_form_to_edit_student" name="edit_phone" value="<?php echo $phone; ?>">
	email :<input class="view_details_student_email inside_form_to_edit_student" name="edit_email" value="<?php echo $email; ?>">
	<?php 
			
/*			$stmt->free_result();
			$stmt->close();*/
			$id_student = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
			$result = DB::getConn()->query("SELECT image_course, c.name_course FROM courses c JOIN student_in_course sic on c.id = sic.course_id WHERE sic.student_id = $id_student ");

			while ($row = $result->fetch_assoc()) {

				foreach ($row as $key => $value) {
				if ($key == 'image_course') {
					echo "<img class='view_details_student_course_image' src='uploads/".$value."'>";
				}else{
					//echo "<input type='checkbox' class='view_details_student_email inside_form_to_edit_student' checked>". $value;
				};

				};
			};
			
		/*	$result->free_result();
			$result->close();*/
			$result = DB::getConn()->query("SELECT image_course, name_course FROM courses");

			while ($row = $result->fetch_assoc()) {
				foreach ($row as $key => $value) {
				
				if ($key == 'image_course') {
					echo "<img class='view_details_student_course_image' src='uploads/".$value."'>";
				}else{
					echo "<input type='checkbox' class='checkbox_edit_student' checked>". $value;
				};

				};
			};



		 ?>
	<input class="inside_form_to_edit_student inside_form_to_edit_student_submit" type="submit">
</form>