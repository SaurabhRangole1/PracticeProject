<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

//variables 
$uname=$_POST["username"];
$upwd=$_POST["pwd"];
$upass=$_POST["password"];
$uadd=$_POST["address"];
$firstName=$_POST["firstname"];
$lname=$_POST["lastname"];
$mono=$_POST["mobilenumber"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query to insert the data into database
$sql = "INSERT INTO usermaster (username, password, address,fname,lname,mono)VALUES ('$uname','$upass','$uadd','$firstName','$lname','$mono')";

//validation for password and checking the connection
if ($upwd==$upass)
{
  if ($conn->query($sql) === TRUE) {
    header("location:login.php");
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else
{
 echo "password not matched ";
}
$conn->close();
?>