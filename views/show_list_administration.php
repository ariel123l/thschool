<?php 

echo "<div class='div_contaner_list_students_courses'>";



echo "<div class='div_contaner_list_students'><div class='title_list_student_and_courses'>Administration<a href=' ?subject=administration&view=new&id=?' class='link_insert_new_student_and_courses'>+</a></div>";

list_administration();
echo "</div>";

function list_administration(){

	$result = DB::getConn()->query("SELECT  user_name, image, phone, role_name   FROM managers m JOIN roles r ON m.role_id = r.id");

	while ($row = $result->fetch_assoc()) {

		echo "<a class='student_in_list' ";
		foreach ($row as $key => $value) {
			if ($key === 'user_name') {
				$user_name = $value;
				
			}
			if ($key === 'image') {
				echo "href='?subject=administration&view=view&id=$user_name'>" . "<img class='image_student' src='uploads/" . "$value"."'><div class='container_name_phone_student'>" ;
				echo "<div class='name_phone_student'>" .$row['user_name'] ."</div>";
			}else{
				if ($key === 'user_name') {
					
				}else{
					echo "<div class='name_phone_student'>" . "$value". "</div><br>";
				}
			
			}
		}
		echo "</div></a><br>";
	}

}


echo "</div>";

?>
