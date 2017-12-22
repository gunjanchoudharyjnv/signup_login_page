<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>SIGNUP PAGE</title>
<metaname="viewport content="device-width,initial-scale=1">
</head>
<body>
<div class="box">
<h1>SIGNUP</h1>
<form action="details.php" method="post"> 
FIRST NAME:<br>
<input type="text" name="fname" placeholder="first name" autofocus required><span class="error">* </span>
  <br>
LAST NAME:<br>
<input type="text" name="lname" placeholder="last name"><br>
USERNAME:<br>
<input type="email" name="uname" placeholder="username" required><span class="error">* </span><br>

PASSWORD:<br>
<input type="password" name="passw" placeholder="password" required><span class="error">* </span><br><br>
<input type="submit" value="CREATE"><br>
<p>Already user? <a href="login.php"><span class='lin'><b>LOGIN NOW</b></span></a></p> 
</form></div>
</body>
</html>
