<?php 
$stmt = DB::getConn()->prepare("SELECT name, phone, email, image FROM student stu WHERE stu.id = ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name, $phone, $email, $image);
	$stmt->fetch();
	$stmt->close();
?>

<form class="form_edit_Details_student" >
	<h2><?php echo $name; ?> change successful</h2>
	<img type="file" class="view_details_student_image" src="uploads/<?php echo $image; ?> " alt="">
	<input class="view_details_student_name" disabled value=" <?php echo $name; ?>">
	<input class="view_details_student_phone" disabled value="<?php echo $phone; ?>">
	<input class="view_details_student_email" disabled value="<?php echo $email; ?>">
</form>