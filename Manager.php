<?php 


class Manager extends Person{
	protected $role;
	protected $password;

	function __construct($name, $password, $phone, $email,$role){
		parent::__construct($name,$phone,$email);
		$this->password = filter_var($password, FILTER_SANITIZE_STRING);
		$this->role = filter_var($role, FILTER_SANITIZE_STRING);
		$this->image = filter_var(movePicture(), FILTER_SANITIZE_STRING);
	}

	public function save_Managar(){
		$this->save_user($this->name, $this->password);
		var_export($this);
		$stmt = DB::getConn()->prepare("INSERT INTO managers(user_name ,role_id, phone, email, image) VALUES(?,?,?,?,?)");
		$stmt->bind_param('sssss',$this->name, $this->role ,$this->phone,$this->email,$this->image);
		echo $stmt->error;
		// die();
		echo "sdfsdfsdfsdfdsf";
		$stmt->execute();
	}



	public function save_user($name,$password){

		$password = password_hash($password, PASSWORD_DEFAULT);

		$stmt = DB::getConn()->prepare("INSERT INTO users (user_name, hash) values ( ?, ?)");
		$stmt->bind_param('ss', $name, $password);

		$stmt->execute();

	}

	function movePicture() {
	$uploadfile = 'uploads/' . basename($_FILES["edit_image"]['name']);

	move_uploaded_file($_FILES['edit_image']['tmp_name'], $uploadfile);
	return $_FILES['edit_image']['name'];

	}
};

