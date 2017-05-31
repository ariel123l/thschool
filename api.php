<?php

session_start();

include 'views/DB.php';
include_once 'Person.php';
include 'Student.php';
include 'Manager.php';
include 'Course.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if (!empty($_GET['action'])) {
	
		switch ($_GET['action']) {
			case 'logout':
				logout();
				break;
			
			default:
				
				
				break;
		}
	
	}
};/*else{
	 header("Location: login.php?aaa");
};*/


if (!empty($_POST['action'])) {


	switch ($_POST['action']) {
		case 'login':
			chack_login();
			break;
		case 'saveUpdateStudent':
			save_update_student();
			break;
		case 'saveUpdateCourse':
			save_update_course();
			break;
		case 'save_new_student':
			save_new_student();
			break;
		case 'save_new_course':
			save_new_course();
			break;
		case 'saveNnewAdministration':
			save_new_administration();
			break;
		case 'saveUpdateAdministration':
			save_update_administration();
			break;
		default:
			
			break;
	}
}else{
	header("Location: login.php?");
};




function chack_login(){

	$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	$name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);

	$stmt = DB::getConn()->prepare("SELECT hash, role_id, role_name from users u JOIN managers m on u.user_name = m.user_name JOIN roles r on r.id = m.role_id WHERE u.user_name = ? AND hash = ?");
	$stmt->bind_param('ss', $name, $pass);

	$stmt->execute();

	$stmt->bind_result($hash, $role, $role_name);
	$stmt->fetch();
	$stmt->close();

	
	if(!empty($hash)){
		$_SESSION['name'] = $name;
		$_SESSION['role'] = $role;
		$_SESSION['role_name'] = $role_name;

		header("Location: index.php");
	}else {
		header("Location: login.php?error=true");
	}

/*	if (password_verify($pass, $hash)) {
		header("Location: index.php");
	} else {
		header("Location: login.php?error=true");
	}*/

}

function logout(){
	session_destroy();
	header("Location: login.php");
}


function save_update_student(){
	//$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
	$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
	$edit_name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
	$edit_phone = filter_var($_POST['edit_phone'], FILTER_SANITIZE_STRING);
	$edit_email = filter_var($_POST['edit_email'], FILTER_SANITIZE_STRING);
	$edit_image = filter_var(movePicture(), FILTER_SANITIZE_STRING);

	update_student($id, $edit_name, $edit_phone, $edit_email, $edit_image);
	//$edit_student = new Student($edit_name, $edit_phone,$edit_image, $edit_email);


}

function update_student($id, $edit_name, $edit_phone, $edit_email, $edit_image){
	$stmt = DB::getConn()->prepare("UPDATE student SET name = ?, phone = ?, email = ?, image = ? WHERE student.id = ?");
	$stmt->bind_param('sssss',$edit_name, $edit_phone, $edit_email, $edit_image, $id);
	$stmt->execute();
	header("Location: index.php?subject=student&view=save&id=$id");
	
}

function save_new_student(){

	$edit_name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
	$edit_phone = filter_var($_POST['edit_phone'], FILTER_SANITIZE_STRING);
	$edit_email = filter_var($_POST['edit_email'], FILTER_SANITIZE_STRING);

	$student = new Student($edit_name, $edit_phone ,$edit_email);
	//var_dump($student);
	$student->save_student();

}

function save_new_course(){

	$edit_name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
	$edit_description = filter_var($_POST['edit_description'], FILTER_SANITIZE_STRING);

	$course = new Course($edit_name, $edit_description);
	$course->save_course();

}

function save_new_administration(){

	$edit_name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
	$edit_password = filter_var($_POST['edit_password'], FILTER_SANITIZE_STRING);
	$edit_phone = filter_var($_POST['edit_phone'], FILTER_SANITIZE_STRING);
	$edit_email = filter_var($_POST['edit_email'], FILTER_SANITIZE_STRING);
	$edit_role = filter_var($_POST['edit_role'], FILTER_SANITIZE_STRING);


	$new_manager = new Manager($edit_name, $edit_password, $edit_phone, $edit_email, $edit_role);
	$new_manager->save_Managar();

	header("Location: index.php?subject=administration");
	 //("INSERT INTO student(name, phone, email, image)VALUES ('$edit_name','$edit_phone','$edit_email','$edit_image')");
	
};


function movePicture() {
	$uploadfile = 'uploads/' . basename($_FILES["edit_image"]['name']);

	move_uploaded_file($_FILES['edit_image']['tmp_name'], $uploadfile);
	return $_FILES['edit_image']['name'];

}

function save_update_course(){
	$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);	
	$edit_name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
	$edit_description = filter_var($_POST['edit_description'], FILTER_SANITIZE_STRING);
	$edit_image = filter_var(movePicture(), FILTER_SANITIZE_STRING);

	update_course($id, $edit_name, $edit_description, $edit_image);

}

function update_course($id, $edit_name, $edit_description, $edit_image){
	$stmt = DB::getConn()->prepare("UPDATE courses SET name_course = ?, description = ?, image_course = ? WHERE id = ? ");
	$stmt->bind_param('ssss',$edit_name, $edit_description, $edit_image, $id);
	$stmt->execute();
	header("Location: index.php?subject=course&view=save&id=$id");
	
}


function save_update_administration(){
	$user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
	$edit_phone = filter_var($_POST['edit_phone'], FILTER_SANITIZE_STRING);
	$edit_email = filter_var($_POST['edit_email'], FILTER_SANITIZE_STRING);
	$edit_role_name = filter_var($_POST['edit_role_name'], FILTER_SANITIZE_STRING);
	$edit_image = filter_var(movePicture(), FILTER_SANITIZE_STRING);
	

	update_administration($user_name, $edit_phone, $edit_email, $edit_role_name, $edit_image );

};

function update_administration($user_name, $edit_phone, $edit_email, $edit_role_name, $edit_image ){

		$stmt = DB::getConn()->prepare("UPDATE managers SET phone = ?, email = ?, image = ? WHERE user_name = ? ");
		$stmt->bind_param('ssss', $edit_phone, $edit_email, $edit_image, $user_name);
		$stmt->execute();

	header("Location: index.php?subject=administration&view=save&id=$user_name");
};
