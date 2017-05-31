<?php 

include 'Person.php';
class Student extends Person{
	protected $image;

	function __construct($name,$phone,$email){
		parent::__construct($name,$phone,$email);
		$this->image = filter_var(movePicture(), FILTER_SANITIZE_STRING);
	}

	private function movePicture() {
		$uploadfile = 'uploads/' . basename($_FILES["image"]['name']);

		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
		return $_FILES['image']['name'];
	
	}

	public function save_student(){
		$stmt = DB::getConn()->prepare("INSERT INTO student(name,phone,email,image) VALUES(?,?,?,?)");
		$stmt = bind_param('ssss',$this->name,$this->phone,$this->email,$this->image);
		$stmt->execute();
	}

	public function update_student($id, $edit_name, $edit_phone, $edit_email, $edit_image){
		$stmt = DB::getConn()->prepare("UPDATE student SET(name = ?, phone = ?,email = ?,image = ?)WHERE id = $id");
		$stmt = bind_param('ssss',$this->name,$this->phone,$this->email,$this->image);
		$stmt->execute();
	}
};