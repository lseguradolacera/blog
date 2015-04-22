<?php
	session_start();
	if (isset($_POST['submit']))
	{	  
		include('DAL.php');
		$connection = new DAL();
		$name=$_POST['name'];
		$message=$_POST['msg'];
		$userid = $_SESSION['userid'];
		$username = $_SESSION['username'];
		$connection->AddMessage($name,$message,$userid,$username);
	}
?>
	
<html>
<head> <title>blog</title>
<style>
body{
	background: whitesmoke;
}
#container_home{
	margin-left:50px;
	}
#input_home{
	width:400px;
	height:40px;
	border-radius:5px;
	border: 1px solid;
	padding:5px;
	
	}
#message_home{
	width:400px;
	height:350px;
	padding:5px;
	border-radius:5px;
	}
#submit_home{
	width:400px;
	height:40px;
	border-radius:5px;
	background-color:#ff8a00;
	color:white;
	border-color:#fcf685;
	}
	

</style>
</head>

<body>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['username'] . "<br>"; ?></i></b>
<b id="welcome">User ID : <i><?php echo $_SESSION['userid'] . "<br>"; ?></i></b>
<a href='login.php?'><b id="logout"><button>Log Out</button></b></a>
</div>
<div id="container">
		<?php //<div id="view_all"><a href="view.php"><b><font size="4px">VIEW ALL</font></b></a></div
		?>
	 	<br/>
		<div id="header">
			<table><tr>
			<td></td>
			
			</tr></table>	
		</div>
			<br/>
			<br/>
		<div id="message_entry">
		
			<table>
				<tr>
				<th><a href="homepage.php"> ADD MESSAGE </a>| </th>
				<th><a href="view.php?user=<?php echo $_GET['user'];?>"> VIEW MESSAGE </a> </th>
			</table>
			
		</div>
</div>
<div id="container">
	<div id="container_home">
	<form action="" method="POST">
		<table>
			<tr><td><i> Type Your Message: </i></td></tr>
			
			<tr><td><input id="input_home" type="text" name="name" placeholder="Subject" required></td></tr>

			<tr><td> <textarea id="message_home" type="text" name="msg"placeholder="Your Message" required></textarea> <td></tr>
			<br>
			<tr><td> <input id="submit_home" type="submit" value="SUBMIT" name="submit" onclick="return(sendmessage());"></td></tr>
		</table>
	</form>
	</div>
</div>


</body>
</html>
