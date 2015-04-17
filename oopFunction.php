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
	
	public function delete()
	{
		$conn = mysqli_connect("localhost","root","","blog");
		$res = mysqli_query($conn, "SELECT * FROM message");
		return $res;
		
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("arlyn", $conn) or die(mysql_error());

		$rec = "delete from hotelreservation where id='$id'";

		if(mysql_query($rec)){
			echo "<center></h1>Data Deleted in the database</h1></center>"."<br />";
			echo "<center></h6>Please wait...</h6></center>"."<br />";
			header('Refresh: 0; url=hrView.php');
		}
		else{
			die("Data failed to delete in the database");
		}
		
	}
	
	public function update()
	{
		$conn = mysqli_connect("localhost","root","","blog");
		$res = mysqli_query($conn, "SELECT * FROM message");
		return $res;
	}
	
}

?>
