<?php 

abstract class Person{

	public $name;
	public $phone;
	public $email;

	function __construct($name,$phone,$email){
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
	}
}