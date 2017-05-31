<?php 


	$stmt = DB::getConn()->prepare("SELECT  user_name, image, phone, email, role_name   FROM managers m JOIN roles r ON m.role_id = r.id  WHERE m.user_name = ?");
	$stmt->bind_param('s', $user_name);

	$stmt->execute();

	$stmt->bind_result($user_name, $image, $phone, $email, $role_name);
	$stmt->fetch();



		


 ?>

 <form class='form_view_Details_course'>
 	<h1 class='title_form'><?php echo "Manager :" .$user_name ; ?></h1>
 	<?php
 		echo "<a class='linke_to_edit' href='?subject=administration&view=edit&id=$user_name'>Edit</a>";
		echo "<a class='linke_to_delete' href='?subject=administration&view=delete&id=$user_name'>Delete</a>";
 	 ?>
 	<div class='view_details_student'>

		<div class='details_student'>
		<img class='view_details_student_image' src="uploads/<?php echo $image; ?>">
		<div class="flex_rigth_image">
			<div class='view_details_student_phone rigth_image'><?php echo $phone; ?>  </div>
			<div class='view_details_student_email rigth_image'><?php echo $email; ?> </div>
			<div class='view_details_student_email rigth_image'><?php echo $role_name; ?> </div>
		</div>		
</div>

</form>

<!-- <button>change password</button> -->