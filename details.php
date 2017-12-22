<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "haha";
$pass=$_POST['passw'];
$hashpass=password_hash($pass,PASSWORD_DEFAULT);
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
 // Check connection
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
 // sql to create table
    $sql = "CREATE TABLE userinfo1 (
    uname VARCHAR(30) NOT NULL PRIMARY KEY,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL,
    passw VARCHAR(200) NOT NULL
    )";
    if (mysqli_query($conn, $sql)) {
        // echo "Table userinfo1 created successfully";
         $sql="INSERT INTO userinfo1 (uname,fname,lname,passw) VALUES ('$_POST[uname]','$_POST[fname]','$_POST[lname]','$hashpass')";
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
    //echo "<br>connected to existing database";
    // sql to create table
    $sql = "CREATE TABLE userinfo1 (
    uname VARCHAR(30) NOT NULL PRIMARY KEY,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL,
    passw VARCHAR(200) NOT NULL
    )";

    if (mysqli_query($conn, $sql)) {
         //echo "Table userinfo1 created successfully";
         $sql="INSERT INTO userinfo1 (uname,fname,lname,passw) VALUES ('$_POST[uname]','$_POST[fname]','$_POST[lname]','$hashpass')";
         if(mysqli_query($conn,$sql)){
           //echo "<br>new record created in new table <br>";
           }
        } 
    elseif(mysqli_error($conn)=="Table 'userinfo1' already exists") {
        // echo "<br>exists table<br>";
         $sql="INSERT INTO userinfo1 (uname,fname,lname,passw) VALUES ('$_POST[uname]','$_POST[fname]','$_POST[lname]','$hashpass')";
         if(mysqli_query($conn,$sql)){
          // echo "<br>new record created <br>";
           }
         }
  } 

echo "<div class='box'><b><div class=w>HELLO $_POST[fname] $_POST[lname]</div>_____________________________________________________<br><br><br>YOUR ACCOUNT CREATED SUCCESSFULLY<br><br>_____________________________________________________<br><br><br><br><br><br><a href='login.php'>TO LOGIN CLICK HERE</a><br></b></div>";
mysqli_close($conn);
?>
</html>
