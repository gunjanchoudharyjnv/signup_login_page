<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "haha";
$a=$_POST["uname"];
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE dbinfo2";
 if (mysqli_query($conn, $sql)) {
 //   echo "Database created successfully";
   $dbname="dbinfo2";
   $conn = mysqli_connect($servername, $username, $password, $dbname);  
 // Check connection   FOREIGN KEY (uname) REFERENCES userinfo1(uname)
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
 // sql to create table
    $sql = "CREATE TABLE profile1 (
    sno INT PRIMARY KEY AUTO_INCREMENT,
    bday VARCHAR(12),
    uname VARCHAR(30) NOT NULL,
    gender VARCHAR(6),
    address VARCHAR(200),
    pincode VARCHAR(10),
    phnumber VARCHAR(15),
    FOREIGN KEY (uname) REFERENCES userinfo1(uname)
    )";
    if (mysqli_query($conn, $sql)) {
        // echo "Table profile created successfully";
         $sql="INSERT INTO profile1 (uname,bday,gender,address,pincode,phnumber) VALUES ('$a','$_POST[bday]','$_POST[gender]','$_POST[address]','$_POST[pincode]','$_POST[phnumber]')";
         if(mysqli_query($conn,$sql)){
         //  echo "<br>new record created in new table <br>";
           }
        }
 }
 elseif(mysqli_error($conn)=="Can't create database 'dbinfo2'; database exists") {
    $dbname="dbinfo2";
    //echo " using existing database <br>";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
    // sql to create table
    $sql = "CREATE TABLE profile1 (
    sno INT PRIMARY KEY AUTO_INCREMENT,
    bday VARCHAR(12),
    uname VARCHAR(30) NOT NULL,
    gender VARCHAR(6),
    address VARCHAR(200),
    pincode VARCHAR(10),
    phnumber VARCHAR(15),
    FOREIGN KEY (uname) REFERENCES userinfo1(uname)
    )";
 //echo "table created";
    if (mysqli_query($conn, $sql)) {
 $conn = mysqli_connect($servername, $username, $password, $dbname);
         //echo "Table profile created successfully";
      $sql="INSERT INTO profile1 (uname,bday,gender,address,pincode,phnumber) VALUES ('$a','$_POST[bday]','$_POST[gender]','$_POST[address]','$_POST[pincode]','$_POST[phnumber]')";
//echo "<br>data entered<br>";
         if(mysqli_query($conn,$sql)){
          // echo "<br>new record created in new table <br>";
           }
        } 
    elseif(mysqli_error($conn)=="Table 'profile1' already exists") {
        // echo "<br>exists table<br>";

$sql="INSERT INTO profile1 (uname,bday,gender,address,pincode,phnumber) VALUES ('$a','$_POST[bday]','$_POST[gender]','$_POST[address]','$_POST[pincode]','$_POST[phnumber]')";
         if(mysqli_query($conn,$sql)){
          // echo "<br>new record created <br>";
           }
          //else{echo "<br>problem in new record creation<br>";}
        }
  } 
mysqli_close($conn);
?>
<body>
<div class="box">
<h1>USER PROFILE UPDATED SUCCESSFULLY</h1><br><br>
<h2><b>THANKYOU!!!</b></h2></div>
</body>
</html>

