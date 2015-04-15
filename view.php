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
</style>

<center><h1>BLOG</h1>
<?php
	$con = mysqli_connect("localhost", "root", "", "blog");
	$result = mysqli_query($con, "SELECT * FROM message");
	
	echo "<table border='0'>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td colspan='1' style='background: grey;'><b>" . $row['name'] . ":</b></td></tr>";
		echo "<tr><td colspan='2'>--- " . $row['msg'] . "</td></tr>";
	}
	echo "</table></center>";
	mysqli_close($con)
?>
<footer><center><a href='page1.php'>Home</a></center></footer>
</body>
</html>
	
