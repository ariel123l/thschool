<?php 


class Student extends Person{
	//protected $image;

	function __construct($name,$phone,$email){
		parent::__construct($name,$phone,$email);
		var_dump($name);
		$this->image = filter_var(movePicture(), FILTER_SANITIZE_STRING);

	}

		public function movePicture() {
			$uploadfile = 'uploads/' . basename($_FILES["edit_image"]['name']);

			move_uploaded_file($_FILES['edit_image']['tmp_name'], $uploadfile);
			return $_FILES['edit_image']['name'];

		}

		public function save_student(){
			
		$stmt = DB::getConn()->prepare("INSERT INTO `student`(name, phone, email, image) VALUES ( ? , ? , ? , ? )");
		$stmt->bind_param('ssss', $this->name ,$this->phone ,$this->email ,$this->image);
		$stmt->execute();
		//$stmt->error;
		header("Location: index.php?subject=student");
		}
	
}