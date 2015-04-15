<html>
<head> <title>blog</title>
<style>
body {
	font-family: "myriad pro", arial, sans-serif;
	margin:auto;
}
#container{
	margin-left:550px;
	margin-top:130px;
	width:315px;
	padding:8px;
	background-color:#cccccc;
	border-radius:8px;
	}
#head{
	background-color:yellowgreen;
	}
#inputs{
	height:35px;
	width:305px;
	border-radius:5px;
	border:1px solid;
	border-color:yellowgreen;
	padding:5px;
	}
#textarea{
	height:200px;
	width:305px;
	border-radius:5px;
	border:1px solid;
	border-color:yellowgreen;
	padding:5px;
	
	}
#submit{
	height:35px;
	width:80px;
	color:white;
	border-radius:5px;
	border:1px solid;
	border-color:green;
	background-color:yellowgreen;
	}	
	a:link {
    text-decoration: none;
		color:black;
}
</style>
</head>

<body>
<div id="container">
		<form  method="POST">
			<table>
				<tr><th>Pls fill the following information.</th></tr>
				<tr><td>Name</tr></td>
				<tr><td><input id="inputs" type="text" name="name" placeholder="Name" required/></td></tr>
				<tr><td>Message:</td></tr>
				<tr><td><textarea  id="textarea" name="message" placeholder="Your Message"></textarea></td></tr>
			</table>
			<table>
				<tr><td><input id="submit" type="submit" value="Send" name="submit"></td>
				<td><a href="view.php"><b><font size="4px">VIEW ALL</font></b></a></td>
				</tr>
			</table>
		</form>
		
		<?php
			if (isset($_POST['submit']))
				{	  
					include 'connect.php';
					$name=$_POST['name'] ;
					$message= $_POST['message'] ;					
					mysql_query("INSERT INTO message (name,message) 
					VALUES ('$name','$message')");
				}
		?>
</div>

</body>
</html>
