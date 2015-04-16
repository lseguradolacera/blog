<?php
include('homepage.php'); 

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}

?>
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
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
