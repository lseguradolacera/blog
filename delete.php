<?php 

include ('DAL.php');
include ('header.php');
session_start();

$connection = new DAL();
$table = "message";

	
			$username = $_SESSION['userid'];
			$id=$_GET['delete_id'];
			$userid=$_GET['user_id'];
			
			echo $username;
			echo $userid;
			echo $id;
			$connection->DeleteMessage($table,$id,$userid);
			
			$res= $connection->checkDelete($userid);
			
			
			if(!$res) 
			{
				?>
				<script>
				
				alert('Ok!!!')
						window.location='view.php'
						</script>
				<?php
			}	
	?>
