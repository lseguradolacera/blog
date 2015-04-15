<html>
<head> <title>blog</title>
<link rel="styesheet" type="text/css" href="layout.css">
<style>
body {
	font-family: "myriad pro", arial, sans-serif;
	margin:auto;
}
#container{
	margin-left:500px;
	margin-top:130px;
	width:315px;
	
	}
#head{
	background-color:yellowgreen;
	}
#message_entry{
	width:315px;
	background-color:#cccccc;
	border-radius:8px;
	padding:15px;
	height:250px;
	
	}
#inputs{
	height:35px;
	width:310px;
	border-radius:5px;
	border:1px solid;
	border-color:white;
	padding:5px;
	}
#textarea{
	height:200px;
	width:310px;
	border-radius:5px;
	border:1px solid;
	border-color:white;
	padding:5px;
	}
#submit{
	height:35px;
	width:80px;
	color:white;
	border-radius:5px;
	border:1px solid;
	border-color:#99ff33;
	background-color:#99ff33;
	}	
#view_all{
	float:right;
	}
	a:link {
    text-decoration: none;
		color:#99ff33;
}l
</style>
</head>

<body>
<div id="container">
		<div id="view_all"><a href="view.php"><b><font size="4px">VIEW ALL</font></b></a></div>
		<br/>
		<br/>
	<form  method="POST">
		<div id="message_entry">
		
			<table>
				<tr><td><input id="inputs" type="text" name="name" placeholder="Name" required/></td></tr>
				<tr><td><textarea  id="textarea" name="message" placeholder="Your Message"></textarea></td></tr>
			</table>
			
		</div>
		<br/>
		<div id="send">
			<table>
				<tr><td><input id="submit" type="submit" value="Send" name="submit"></td>
				</tr>
			</table>
		</div>
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

