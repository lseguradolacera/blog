<!DOCTYPE html>
<html>
<head>
<title> </title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="Username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="Password" type="password">
<input name='submit' type="submit" value='submit'>
</form>
</div>
</div>
</body>
</html>

<?php  
error_reporting(1);
    include_once('dbLoginFunction.php');  
       
    $funObj = new dbFunction();  
    if($_POST['submit']){
        $username = $_POST['username'];  
        $password = $_POST['password']; 
        $user = $funObj->Login($username, $password);
		if ($user) {  
								// Login Success  
							 header("location:index.php?user=$username");  
						} else {  
								// Failed  
								echo "<script>alert('Username / Password Not Match')</script>";  
						}  
				}  
?>  
