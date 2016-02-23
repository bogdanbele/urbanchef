<?php
include('actions/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){

}
?>
<!DOCTYPE html>
<html>
<head>
  
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
    

<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="index.php" method="post">
<label>UserName :</label>
<input id="name" name="email" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>