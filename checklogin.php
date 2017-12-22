<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="haha";
$dbname="dbinfo2";
$details="details.php";
$check=0;
$p=$_POST["uname"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM userinfo1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
if(($row[uname]==$_POST["uname"])&&(password_verify($_POST["passw"],$row[passw])))
{$check=-1;
echo "<span class='w'>WELCOME  $row[fname] $row[lname]</span>";
}
}
}
 if($check==0)
{ echo "<div class='box'><b>____________________________________<br><br><br>INVALID CREDENTIALS!!!<br><br>____________________________________<br><br><br><br><br><a href='login.php'>TO LOGIN CLICK HERE</a><br><br><br><a href='signup.php'>New user? CREATE ACCOUNT</a><br></b></div>";
}
else{ 

echo "<div class='clr'><h1>USER PROFILE</h1>
<form action='profilet.php' method='post'>
USER NAME:<br>
<input type='text' name='uname' value='$p' readonly><br>
BIRTHDAY:<br>
<input type='date' name='bday' placeholder='dd/mm/yyyy'><br>
<br>GENDER:<br>
     <input type='radio' name='gender' value='female'>Female        
     <input type='radio' name='gender' value='male'>Male<br>
<br>ADDRESS:<br>
<textarea name='address' rows='5' cols='50'></textarea><br>
PIN CODE:<br>
<input type='text' name='pincode' placeholder='e.g. 342011'><br>
<br>PHONE NUMBER:<br>
<input type='tel' name='phnumber' placeholder='e.g. 0000000000'><br><br>
<input type='submit' value='SAVE'><br> 
</form></div>";
}

mysqli_close($conn);
?>


</body>
</html>
