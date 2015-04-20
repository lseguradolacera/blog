<?php

class DAL{
	
	private $Connection;
	
	public function __construct(){ 
		$this->Connection = mysqli_connect("localhost","root","","blog");
		//initialize the DB connection here, assign to $connection
	}
	
	public function AddMessage($name,$message){
		
		$res = mysqli_query($this->Connection,"INSERT INTO message(name,msg) VALUES('$name','$message')");
		
	}	
	
	public function ViewMessage(){
		
		$res = mysqli_query($this->Connection,"SELECT * FROM message");
		return $res;
		
	}	
	
	public function DeleteMessage($table,$id){
		
		$res = mysqli_query($this->Connection,"DELETE FROM message WHERE number=".$id);
		
	}	
	
	public function EditMessage(Message $data){
		
		$res = mysqli_query($this->Connection,"UPDATE message SET name='{$data->Name}', msg='{$data->Message}' WHERE number=".$data->ID);
		//$this->Connection
	}
	
	
}

class Message{
	
	public $Name;
	public $Message;
	public $ID;
	//etc
	
	public function __construct($name,$message,$id){
		$this->Name = $name;
		$this->Message = $message;
		$this->ID = $id;
		//etc
	}
	
}
