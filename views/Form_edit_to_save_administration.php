<?php 

	$stmt = DB::getConn()->prepare("SELECT  user_name, image, phone, email, role_name   FROM managers m JOIN roles r ON m.role_id = r.id  WHERE m.user_name = ?");
	$stmt->bind_param('s', $user_name);

	$stmt->execute();

	$stmt->bind_result($user_name, $image, $phone, $email, $role_name);
	$stmt->fetch();
?>

<form class="form_edit_Details_student" method="POST" action="api.php" enctype="multipart/form-data">
	<input type="hidden" class="view_details_student_phone" name="action" value="saveUpdateAdministration">
	<input readonly class="view_details_student_name" name="user_name" value="<?php echo $user_name; ?>">
	<input type="file" class="view_details_student_image" name="edit_image" value="<?php echo $image; ?>">
	<input placeholder="phone" class="view_details_student_phone" name="edit_phone" value="<?php echo $phone; ?>">
	<input placeholder="email" class="view_details_student_email" name="edit_email" value="<?php echo $email; ?>">
	
	
	<?php 

		switch ($_SESSION['role_name']) {
			case 'manager':
				echo "<input disabled class='view_details_student_email' name='edit_role_name' value=" .$role_name . ">";
				break;
			case 'owner':
				//echo "<input class='view_details_student_email' name='edit_role_name' value=" .$role_name. ">";
				$st = DB::getConn()->prepare("SELECT role_id from managers WHERE role_id = '1'");

				echo "<select name='edit_role' class='select_view_details_student_email' value=" .$role_name . "'>";
				if ($role_name ==='owner') {
					  	echo "<option value='1' selected >owner</option>";
				    }else{
					  	echo "<option value='1'>owner</option>";
				    };
			  	if ($role_name ==='manager') {
			  		echo "<option value='2' selected>manager</option>";
	  				}else{
			  		echo "<option value='2'>manager</option>";
			  	};
			  	if ($role_name ==='sales') {
			  		echo "<option value='3' selected>sales</option>";
	  				}else{
			  		echo "<option value='3'>sales</option>";
			  	};
				echo "</select>";
				break;
			}

	 ;?> 
	<input type="submit">
</form>