<?php 

$stmt = DB::getConn()->prepare("SELECT  u.user_name, hash, phone, email, role_name, image   FROM managers m JOIN users u ON m.user_name = u.user_name JOIN roles r ON r.id = m.role_id");

$stmt->execute();

$stmt->bind_result($user_name, $hash, $phone, $email, $role_name, $image);
$stmt->fetch();

 ?>

 <form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<input type="hidden" class="view_details_student_phone" name="action" value="saveNnewAdministration">
	<input class="view_details_student_name" name="edit_name" placeholder="user name">
	<input class="view_details_student_name" name="edit_password" placeholder="Password">
	<input class="view_details_student_phone" name="edit_phone" placeholder="Phone">
	<input class="view_details_student_email" name="edit_email" placeholder="Email">
	<!-- <input class="view_details_student_email" name="edit_role" placeholder="role"> -->
	<select name="edit_role" class="select_view_details_student_email">
	<?php 
	$stm = DB::getConn()->prepare("SELECT role_id from managers WHERE role_id = '1'");
	if (empty($stm)) {
		echo "<option value='1'>owner</option>";
		}
	 ?>
	 <!--  <option value="1">owner</option> -->
	  <option value="2">manager</option>
	  <option value="3">salse</option>
	</select>
	image :<input type="file" class="view_details_student_image" name="edit_image" placeholder="Image ">
	<input type="submit">
</form>