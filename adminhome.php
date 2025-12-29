<?php
 include 'session.php';

// إذا المستخدم ليس admin → رجّعه للّوغن
if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] !== "admin") {
    header("Location: login.php");
    exit;
}
 elseif($_SESSION['usertype'] =="student")
 {
     header("location: login.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg" style="background-color: #111;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link text-success hover-link"  href="#">Admin Dashboard</a>
        </li>
      </ul>
      <span class="">
        <a href="logout.php" class="btn btn-outline-success" type="button">Logout</a>                                       
      </span>
    </div>
  </div></nav>
  <div class="container-fluid">
  <div class="row">
    
    <!-- Sidebar -->
    <div class="col-md-2 bg-light vh-100">
      <ul class="nav flex-column p-4">
        <li class="nav-item "><a class="nav-link text-success" href="#">Admission</a></li>
        <li class="nav-item"><a class="nav-link text-success" href="#">Add Student</a></li>
        <li class="nav-item"><a class="nav-link text-success" href="#">View Student </a></li>
            <li class="nav-item"><a class="nav-link text-success" href="#">Add Classes</a></li>
        <li class="nav-item"><a class="nav-link text-success" href="#">View Classes </a></li>
            <li class="nav-item"><a class="nav-link text-success" href="#">Add Course</a></li>
        <li class="nav-item"><a class="nav-link text-success" href="#">View Course </a></li>
      </ul>
    </div>
    <div class="col-md-10 p-4">
  <h3 class="text-success mb-3">Sidebar Accordion</h3>

  <p class="text-muted">
    In this example, we have added an accordion and a dropdown menu inside the side navigation.
    Click on both to understand how they differ from each other.
    The accordion will push down the content, while the dropdown lays over the content.
  </p>
</div>
</body>
</html>