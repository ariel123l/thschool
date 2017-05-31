<?php 
echo "<div class='div_contaner_list_students_courses'>";



echo "<div class='div_contaner_list_students'><div class='title_list_student_and_courses'>Student<a href=' ?subject=student&view=new&id=?' class='link_insert_new_student_and_courses'>+</a></div>";
list_student();
echo "</div>";

function list_student(){

	$result = DB::getConn()->query("SELECT id,image,name, phone FROM student");

	while ($row = $result->fetch_assoc()) {
		echo "<a class='student_in_list' ";
		foreach ($row as $key => $value) {
			if ($key === 'id') {
				$id_student = $value;
			}
			if ($key === 'image') {
				echo "href='?subject=student&view=view&id=$id_student'>" . "<img class='image_student' src='uploads/" . "$value"."'><div class='container_name_phone_student'>" ;
			}else{
				if ($key === 'id') {
					
				}else{
					echo "<div class='name_phone_student'>" . "$value". "</div><br>";
				}
			
			}
		}
		echo "</div></a><br>";
	}

}

echo "<div class='div_contaner_list_courses'><div class='title_list_student_and_courses'>Courses<a href='?subject=course&view=new&id=?' class='link_insert_new_student_and_courses'>+</a></div>";
list_courses();
echo "</div>";

function list_courses(){

	$result = DB::getConn()->query("SELECT  id, image_course, name_course FROM courses");

	while ($row = $result->fetch_assoc()) {

		echo "<a class='student_in_list' ";
		foreach ($row as $key => $value) {
			if ($key === 'id') {
				$id_course = $value;
			}
			if ($key === 'image_course') {
				echo "href='?subject=course&view=view&id=$id_course'>" . "<img class='image_student' src='uploads/" . "$value"."'><div class='container_name_phone_student'>" ;
			}else{
				if ($key === 'id') {
					
				}else{
					echo "$value <br>";
				}
			}
		}
		echo "</div></a><br>";
	}

}


echo "</div>";