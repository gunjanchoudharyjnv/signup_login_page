<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>LOGIN PAGE</title>
<metaname="viewport content="device-width,initial-scale=1">
</head>
<body><div class="box">
<h1>LOGIN</h1>
<form action="checklogin.php" method="post">
USERNAME:<br>
<input type="email" name="uname" placeholder="user name" autofocus required><span class="error">* </span><br>
PASSWORD:<br>
<input type="password" name="passw" placeholder="passwrod" required><span class="error">* </span><br><br>
<input type="submit" value="LOGIN">
<p>Not a user? <a href="signup.php"><span class="lin"><b>SIGNUP</b></span></a></p> 
</form></div>
</body>
</html>
