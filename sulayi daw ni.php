<html>
<head> 
<title> View </title>
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
		background-color:#99ff00;
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
	$con = mysqli_connect("localhost", "root", "", "blog");
	$result = mysqli_query($con, "SELECT * FROM message order by id");
	
	echo "<table border='0'>";
	while($row = mysqli_fetch_array($result))
	{	
		echo"<tr>";
		echo "<div id='comments'>";
			echo"<div id='message'>";
			echo"<div style='float:right'><a href=''><b>x</b></a></div><br/>";
				echo $row['message']."<br/>";
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
	mysqli_close($con)
?>

<footer><center><a href='index.php'>Home</a></center></footer>
</body>
</html>
	
