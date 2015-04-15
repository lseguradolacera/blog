<html>
	<head>
		<title>blog</title>
		<style>
			#submit{
				height:30px;
				width:50px;
				color:white;
				border-radius:5px;
				border:1px solid;
				border-color:green;
				background-color:yellowgreen;
				}	
		</style>
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
				echo "<h4 align='center'>Your Message Has Been Successfully Sent!!!</h4>"."<br />";
				echo "<h6 align='center'><a href='index.php'><INPUT id=submit TYPE=submit value=OK></a></h6>"."<br />";
				}
				else{
				die("Your Message was not sent!!!");
				}
			
		?>
		
	</body>
</html>
