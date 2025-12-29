<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Student Mangement System</title>
</head>
<body>
  
<style>
  .hover-link:hover {
    color: success; /* blue hover */
  }
</style>

    <nav class="navbar navbar-expand-lg" style="background-color: #111;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link text-white hover-link"  href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link text-white" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link text-white" href="#">Admission</a>
        </li>
   <a href="login.php" class="btn btn-outline-success" type="button">Log in</a>
<a href="add.php" class="btn btn-outline-success" type="button">Add</a>
      
      </ul>
      
      <span class="navbar-text badge text-bg-success">
        E-School                                        
      </span>
    </div>
  </div>
</nav>
    <div class="image" >
      <label class="img_text"> We teach Student with care</label>
      <div class="section1"></div>
        
        <p class="text"> Welcome to [E-school]!
Our management platform helps you stay organized and informed.
 From class schedules to student records, everything you need is just a click away
 . Let’s make learning and administration easier together!e</p>
    </div>
    <section class="text-center">
      <h1>Our clasess</h1>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
 <img  class="class" src="c1.jpg" alt="My Image">
 <p>This advanced class is for students who want to master the subject. 
  It focuses on challenging exercises, projects, and practical applications.
   The environment is calm and organized, allowing students to concentrate and explore their creativity while the teacher guides them through complex topics</p>
        </div>
        <div class="col-md-4">
 <img  class="class" src="c2.jpg" alt="My Image">
 <p>This class is for intermediate learners who want to improve their skills. 
  It includes group activities, discussions, and interactive lessons that encourage students to participate actively.
   The room is equipped with modern tools like whiteboards, projectors, and educational charts to make learning easier</p>
        </div>
        <div class="col-md-4">
 <img  class="class" src="c3.jpg" alt="My Image">
 <p>This class is designed for beginners who are just starting to learn.
   It focuses on basic concepts and simple exercises to help students understand the fundamentals. 
   The classroom is bright and welcoming, with comfortable desks and learning materials ready for everyone</p>
        </div>
      </div>
    </div>
        <section class="text-center">
      <h1>Our Courses</h1>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
 <img  class="class" src="english.jpg" alt="My Image">
 <h1 class="text-center">English</h1>
        </div>
        <div class="col-md-4">
 <img  class="class" src="math.jpg" alt="My Image">
<h1 class="text-center">Math</h1>
        </div>
        <div class="col-md-4">
 <img  class="class" src="science.jpg" alt="My Image">
<h1 class="text-center">science</h1>
        </div>
      </div>
    </div>
      <section class="text-center">
      <h1>Admission Form</h1>
    </section>
    
    <form class="container my-5" method="POST">
     
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="name"></div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"name="email">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
<div class="mb-3 my-4">
  <button type="submit" class="btn btn-primary" name="apply">apply</button></div>
</form>
  
</body>
</html>