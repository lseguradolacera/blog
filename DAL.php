<?php

class DAL{
	
	private $Connection;
	
	public function __construct(){ 
		$this->Connection = mysqli_connect("localhost","root","","blog");
		//initialize the DB connection here, assign to $connection
	}
	
	public function AddMessage(Message $message){
		
		$res = mysqli_query($this->Connection,"UPDATE Messages SET name='{$message->Name}', msg='$msg' WHERE number=".$id);
		$this->Connection
	}
	
	
}

class Message{
	
	public $Name;
	public $Message;
	//etc
	
	public function __construct($name,$message){
		$this->Name = $name;
		$this->Message = $message;
		//etc
	}
	
}
