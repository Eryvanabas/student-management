<?php
include 'conection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <legend>Enter your Information</legend>

        <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" name="username" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label">Your Phone Number</label>
            <input type="number" name="phone" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label">User Type</label>
            <select name="usertype" class="form-select">
                <option>student</option>
                <option>admin</option>
            </select>
        </div>
<div class="mb-3">
            <label class="form-label">Your password</label>
            <input type="password" name="password" class="form-control" placeholder="">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</body>

</html>
<?php
 
// test = اسم قاعدة البيانات

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];
    $password = $_POST["password"];  

    $sql = "INSERT INTO tblschool (username, phone, email, usertype,password)
            VALUES ('$name', '$phone', '$email', '$usertype' ,'$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record added!";
    } else {
        echo "Error!";
    }
}
?>
