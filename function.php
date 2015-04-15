<html>
	<head>
		<title>Blog</title>
	</head>
	<body>
	
		<?php
			$conn = mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("blog", $conn) or die(mysql_error());
			
			mysql_query("ALTER TABLE message AUTO_INCREMENT = 0");
				$name = $_POST['name'];
				$msg = $_POST['msg'];
			
			$rec = "INSERT INTO message VALUES('','$name','$msg')";

 
				if(mysql_query($rec)){
				echo "<h1 align='center'>Your Message Has Been Successfully Sent!!!</h1>"."<br />";
				echo "<h2 align='center'><a href='page1.php'><INPUT TYPE=submit value=OK></a></h2>"."<br />";
				}
				else{
				die("Your Message was not sent!!!");
				}
			
		?>
		
	</body>
</html>
