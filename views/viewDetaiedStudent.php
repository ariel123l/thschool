<?php 


	$stmt = DB::getConn()->prepare("SELECT name, phone, email, image FROM student stu WHERE stu.id = ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	$stmt->bind_result($name, $phone, $email, $image);
	$stmt->fetch();


 ?>

 <form class='form_view_Details_course'>

 	<h1 class='title_form'><?php echo "Student :" .$name ; ?></h1>
 	<?php  if ($_SESSION['role']!== 3 ) {
 		echo "<a class='linke_to_edit' href='?subject=student&view=edit&id=$id'>Edit</a>";
 		echo "<a class='linke_to_delete' href='?subject=student&view=delete&id=$id'>Delete</a>";
 	}; ?>
 	<div class='view_details_student'>
		<div class='details_student'>
			<img class='view_details_student_image' src="uploads/<?php echo $image; ?>">
			<div class="flex_rigth_image">
			<div class='view_details_student_phone rigth_image'><?php echo $name; ?>  </div>
			<div class='view_details_student_phone rigth_image'><?php echo $phone; ?>  </div>
			<div class='view_details_student_email rigth_image'><?php echo $email; ?> </div>
			
			</div>
		 </div>
		
		<h3 class="tiltle_list_courses_for_student">courses :</h3>
		<div class="view_details_student_in_courses">
		<?php 
			
			$stmt->free_result();
			$stmt->close();
			$id_student = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
			$result = DB::getConn()->query("SELECT image_course, c.name_course FROM courses c JOIN student_in_course sic on c.id = sic.course_id WHERE sic.student_id = $id_student ");

			while ($row = $result->fetch_assoc()) {

				foreach ($row as $key => $value) {
				if ($key == 'image_course') {
					echo "<img class='view_details_student_course_image' src='uploads/".$value."'>";
				}else{
					echo "<div class='view_details_student_course_image'>". $value . "</div>";
				};

				};
			};

			
		 ?>
		
		
</div></form>



<!-- 	$stmt = DB::getConn()->prepare("SELECT name, phone, email, image FROM student stu WHERE stu.id = ?");
$stmt->bind_param('i', $id);

$stmt->execute();

$stmt->bind_result($name, $phone, $email, $image);
$stmt->fetch(); -->