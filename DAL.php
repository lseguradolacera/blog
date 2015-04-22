<?php

class DAL{
	
	private $Connection;
	
	public function __construct(){ 
		$this->Connection = mysqli_connect("localhost","root","","blog");
		//initialize the DB connection here, assign to $connection
	}
	
	public function AddMessage($name,$message,$userid,$username){
		
		$res = mysqli_query($this->Connection,"INSERT INTO message(name,msg,userid,username) VALUES('$name','$message',$userid,'$username')");
		
	}	
	
	public function ViewMessage($userid){
		
		$res = mysqli_query($this->Connection,"SELECT * FROM message ORDER BY userid = $userid");
		return $res;
		
	}	
	
	public function DeleteMessage($table,$id,$userid){
		
		$res = mysqli_query($this->Connection,"DELETE FROM message WHERE number= '$id' AND userid = '$userid'");
	}	

	public function EditMessage($table,$id,$name,$message){
		
		$res = mysqli_query($this->Connection,"UPDATE message SET name='$name', msg='$message' WHERE number=".$id);
		return $res;
		//$this->Connection
	}
	public function CheckDelete($userid){
		$res = mysqli_query($this->Connection,"SELECT  FROM message, users WHERE userid ='$userid'");
		return $res;
		echo $res;
	}public function CheckEdit($userid){
		$res = mysqli_query($this->Connection,"SELECT  FROM message, users WHERE userid ='$userid'");
		return $res;
		echo $res;
	}
	
	
}
