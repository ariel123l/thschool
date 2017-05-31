<?php 


	$stmt = DB::getConn()->prepare("SELECT  user_name, image, phone, email, role_name   FROM managers m JOIN roles r ON m.role_id = r.id  WHERE m.user_name = ?");
	$stmt->bind_param('s', $user_name);

	$stmt->execute();

	$stmt->bind_result($user_name, $image, $phone, $email, $role_name);
	$stmt->fetch();

?>

<form class="form_edit_Details_student" >
	<h2><?php echo $user_name; ?> change successful</h2>
	<img type="file" class="view_details_student_image" src="uploads/<?php echo $image; ?> " alt="">
	<input class="view_details_student_phone" disabled value="<?php echo $phone; ?>">
	<input class="view_details_student_email" disabled value="<?php echo $email; ?>">
	<input class="view_details_student_email" disabled value="<?php echo $role_name; ?>">
</form>


