<?php
	
	require('functions.php');
	$con = new DB_con();
	$table = "message";
	$result = $con->view($table);
	
?>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> View </title>
<script type="text/javascript">
function del_id(id)
{
	if(confirm('Sure to delete this record ?'))
	{
		window.location='delete.php?delete_id='+id
	}
}
function edit_id(id)
{
	if(confirm('Sure to edit this record ?'))
	{
		window.location='edit_data.php?edit_id='+id
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
		color:white;
		}
	#name{
		width:290px;
		height:30px;
		padding:3px;
		background-color:#333333;
		border-radius:5px;
		}
		a:link {
    text-decoration: none;
		color:#cccccc;
}
	
</style>

<center><h1>BLOG</h1>
<hr color="grey">
<?php

	echo "<table border='0'>";
	while($row = mysqli_fetch_array($result))
	{	
		echo"<tr>";
		echo "<div id='comments'>";
			echo"<div id='message'>";
			echo $row['msg']."<br/>";
			echo "<div> "?> <a href="javascript:del_id(<?php echo $row[0]; ?>)"><img src="b_drop.png" alt="DELETE" /></a> <?php "</div>";
				echo"<br />";
				echo "<div id='name'>";
				echo "<b>". $row['name'] ."</b>";
				echo "<i>"." - ".date('jS \of F Y')."</i>";
				echo "</ div>";
			echo"</div>";
		echo "</div>";
		echo"</tr>";
	}
	echo "</table></center>";
?>

<footer><center><a href='index.php'>Home</a></center></footer>
</body>
</html>
