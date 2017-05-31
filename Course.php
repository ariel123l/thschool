<?php 


class Course{
	protected $name;
	protected $description;
	protected $image;

	function __construct($name,$description,$image){
		$this->name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
		$this->description = filter_var($_POST['edit_description'], FILTER_SANITIZE_STRING);
		$this->image = filter_var(movePicture(), FILTER_SANITIZE_STRING);

	}

	public function movePicture() {
		$uploadfile = 'uploads/' . basename($_FILES["edit_image"]['name']);

		move_uploaded_file($_FILES['edit_image']['tmp_name'], $uploadfile);
		return $_FILES['edit_image']['name'];

	}

	public function save_course(){
		//echo "dmv mbvfbjkfdb";
		/*$stmt->free_result();
		$stmt->close();*/
	$stmt = DB::getConn()->prepare("INSERT INTO `courses`(name_course, description, image_course) VALUES ( ? , ? , ? )");
	$stmt->bind_param('sss', $this->name ,$this->description ,$this->image);
	$stmt->execute();
	//$stmt->error;
	header("Location: index.php?subject=course");
	}

}