<?php
include_once 'DAL.php';
$connection = new DAL();
$table = "message";
if(isset($_GET['edit_id']))
{
	$conn = mysqli_connect("localhost","root","","blog");
	$sql=mysqli_query($conn,"SELECT * FROM message WHERE number=".$_GET['edit_id']);
	$result=mysqli_fetch_array($sql);
}
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$message = $_POST['msg'];
	
	$id=$_GET['edit_id'];
	$res=$connection->EditMessage($table,$id,$name,$message);
	if($res)
	{
		?>
		<script>
		alert('Record updated...');
        window.location='view.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error updating record...');
        window.location='view.php'
        </script>
		<?php
	}
}

?>
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
	background-color:#529bfd;
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
				<tr><th>Edit.</th></tr>
				<tr><td>Name</tr></td>
				<tr><td><input id="inputs" type="text" name="name" value="<?php echo $result['name']; ?>" required/></td></tr>
				<tr><td>Message:</td></tr>
				<tr><td><textarea  id="textarea" name="msg" value=""><?php echo $result['msg']; ?></textarea></td></tr>
			</table>
			<table>
				<tr><td><input id="submit" type="submit" value="Update" name="submit"></td>
				<td><a href="view.php"><b><font size="4px">VIEW ALL</font></b></a></td>
				</tr>
			</table>
		</form>
		
</div>

</body>
</html>
