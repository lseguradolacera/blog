<?php	
	session_start();
	error_reporting(1);

	require('DAL.php');
	$connection = new DAL();
	$table = "username";
	$result = $connection->ViewMessage($table);

	
?>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> View </title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

function del_id(id)
{
	<?php $userid = $_SESSION['userid']; ?>
	if(confirm('Are you sure you want to delete this message?'))
	{
		window.location='delete.php?delete_id='+id+'&user_id='+<?php echo $userid;?>
	}
}


function edit_id(id)
{
	<?php $userid = $_SESSION['userid']; ?>
	if(confirm('Are you sure you want to edit this message?'))
	{
		window.location='update.php?edit_id='+id+'&user_id='+<?php echo $userid;?>
	}
}

</script>
</head>
<body>
<style>
footer{
		position: fixed;
		bottom: 0;
		width: 100%;
	}
body{
		font-family: calibri;
		background: whitesmoke;
	}
	#comments{
		float:left;
		width:310px;
		padding:10px;
		}
	#message{
		width:290px;
		padding:15px;
		background-color:#529bfd;
		border-radius:9px;
		color:black;
		}
	#name{
		width:290px;
		height:30px;
		padding:3px;
		color:white;
		background-color:#333333;
		border-radius:5px;
		}
		a:link {
    text-decoration: none;
		color:#cccccc;
}
	
</style>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['username'] . "<br>"; ?></i></b>
<b id="welcome">User ID : <i><?php echo $_SESSION['userid'] . "<br>"; ?></i></b>
<a href='login.php'><b id="logout"><button>Log Out</button></b></a>
<a href='homepage.php'><b id="logout"><button>Home</button></b></a>

</div>
<?php
	
	include ('header.php');
	echo"<br>";
	echo"<br>";
	echo "<table border='0'>";

	while($row = mysqli_fetch_array($result))
	{		
		echo"<tr>";
		echo "<div id='comments'>";

			echo"<div id='message'>";
			echo "<div> "?> <a href="javascript:del_id(<?php echo $row[0]; ?>)">x</a> <?php "</div>";
			echo "<div> "?> <a href="javascript:edit_id(<?php echo $row[0]; ?>">e</a> <?php "</div>";
			echo"<br>";
			echo "<b>". $row['name'] ."</b></br>";
			echo"<br>";
			echo $row['msg']."<br/>";
			echo"<br />";
			echo "<div id='name'>";
			echo "<b>". $row['username'] ."</b>";
			echo "<i>"." - ".date('jS \of F Y')."</i>";
			echo "</ div>";
			echo"</div>";
		echo "</div>";
		echo"</tr>";
		
	}
	echo "</table></center>";
?>

</body>
</html>
