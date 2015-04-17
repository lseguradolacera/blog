<?php

class DB_con
{
	public function add($name,$msg)
	{
		$conn = mysqli_connect("localhost","root","","blog");
		mysqli_query($conn,"insert into message(name,msg) values('$name','$msg')");
	}
	
	public function view()
	{
		$conn = mysqli_connect("localhost","root","","blog");
		$res = mysqli_query($conn, "SELECT * FROM message");
		return $res;
	}
	
}

?>
