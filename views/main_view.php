<?php 

$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);



if (!empty($_GET['id']) && !empty($_GET['view'])) {


	switch ($_GET['subject']) {
		case 'student':

		switch ($_GET['view']) {
			case 'view':
				view_Details_student();
				break;
			
			case 'edit':
				edit_Details_student();
				break;

			case 'save':
				save_Details_student();
				break;
			
			case 'new':
				new_Details_student();
				break;
			
			case 'delete':
				delete_Details();
				break;
			case 'shureDelte':
				shureDelte_Details_student();
					break;
			default:
				
				
				break;
		}
			break;
		
		case 'course':
			switch ($_GET['view']) {
				case 'view':


					view_Details_course();
					break;
				case 'edit':
					edit_Details_course();
					break;
				case 'save':
					save_Details_course();
					break;
				case 'new':
					new_Details_course();
					break;
				case 'delete':
					delete_Details();
					break;
				case 'shureDelte':
					shureDelte_Details_course();
					break;

			
				default:
					
					
					break;
			}
			break;

	case 'administration':
			switch ($_GET['view']) {
				case 'view':
					view_Details_administration();
					break;
				case 'edit':
					edit_Details_administration();
					break;
				case 'save':
					save_Details_administration();
					break;
				case 'new':
					new_Details_administration();
					break;
				case 'delete':
					delete_Details();
					break;
				case 'shureDelte':
					shureDelte_Details_administration();
					break;
		default:
			# code...
			break;
	};

};
};
function view_Details_student(){

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$view = filter_var($_GET['view'], FILTER_SANITIZE_STRING);
	include 'viewDetaiedStudent.php';



};


function edit_Details_student(){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);
	

		include 'Form_edit_to_save_student.php';

};

function save_Details_student(){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);		

		include 'popUpNextChenghStudent.php';

};

function new_Details_student(){
	
	include 'new_student.php';

};


function shureDelte_Details_student(){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
	$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);

	$stmt = DB::getConn()->prepare("DELETE FROM `student` WHERE id = ?");
	$stmt->bind_param('s', $id);

	$stmt->execute();

	//header("Location: index.php?subject=$subject&view=view");

}


function view_Details_course(){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$view = filter_var($_GET['view'], FILTER_SANITIZE_STRING);

	include 'viewDetaiedCourse.php';


		


};
function edit_Details_course(){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$view = filter_var($_GET['view'], FILTER_SANITIZE_STRING);

	include 'Form_edit_to_save_course.php';
};


function save_Details_course(){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);		

		include 'popUpNextChenghcourse.php';

};

function new_Details_course(){

	include 'new_course.php';
};

function shureDelte_Details_course(){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
	$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);

	$stmt = DB::getConn()->prepare("DELETE FROM `courses` WHERE id = ?");
	$stmt->bind_param('i', $id);

	$stmt->execute();

	//header("Location: index.php?subject=$subject&view=view");

}

function view_Details_administration(){
		$user_name = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);

		include 'viewDetaiedAdministration.php';

};

function edit_Details_administration(){
		$user_name = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);

		include 'Form_edit_to_save_administration.php';
};

function save_Details_administration(){
		$user_name = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
		/*$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);*/		

		include 'popUpNextChenghadministration.php';
};


function delete_Details(){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
		$subject = filter_var($_GET['subject'], FILTER_SANITIZE_STRING);		

		include 'alert_before_delete.php';
		

		//include 'popUpNextDeleteadministration.php';

}

function shureDelte_Details_administration(){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

	$stmt = DB::getConn()->prepare("DELETE FROM `managers` WHERE user_name = ?");
	$stmt->bind_param('s', $id);

	$stmt->execute();

	header("Location: index.php?subject=administration&view=view");

};

function new_Details_administration(){

		include 'new_Administration.php';
}