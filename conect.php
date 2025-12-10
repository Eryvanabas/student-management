<?php
 include 'session.php';

error_reporting(0);

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

    $name = $_POST["username"];
    $password = $_POST["password"];

    // 1️⃣ Empty fields
    if (empty($name) || empty($password)) {
        $_SESSION['loginmessage'] = "Please enter your username and password";
        header("Location: login.php");
        exit;
    }

    // 2️⃣ Check database
    $sql = "SELECT * FROM tblschool WHERE username='$name' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);

    // 3️⃣ If user found
    if ($row) {

        if ($row["usertype"] == "student") {
         $_SESSION['username'] =$name;
          $_SESSION['usertype'] ="student";
            header("Location: studenthome.php");
            exit;
        }

        if ($row["usertype"] == "admin") {
          $_SESSION['username'] =$name;
          $_SESSION['usertype'] ="admin";
            header("Location: adminhome.php");
            exit;
        }

    }

    // 4️⃣ Wrong username or password
    $_SESSION['loginmessage'] = "Username or password do not match";
    header("Location: login.php");
    exit;
}
?>
