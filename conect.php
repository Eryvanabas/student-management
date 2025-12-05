<?php

$servername = "localhost";   // Usually localhost
$username = "root";          // Your DB username
$password = "";              // Your DB password
$dbname = "school";    // Your database name

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from tblschool where  username='".$name."'AND password='".$password."'" ;
    $res=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($res);

}

?>
