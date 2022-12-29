<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Student details</a>
    </div>

  </div>
</nav>

<!-- Second Container -->
<div class="container-fluid bg-1 text-center">
  
        

 	<div class="col-sm-3"></div>

	<div class="col-sm-6">

 <?php
include 'config.php';
$uid = $_GET['id'];
$query = "SELECT * FROM student WHERE id = '".$uid."'";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

?>

          <pre> Register number:<input type="text" name="regno" value="<?php echo $row['regno']; ?>"><br><br></pre>

          <pre>Name           :<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br></pre>

          <pre>Department     :<input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br></pre>

          <pre>Section        :<input type="text" name="section" value="<?php echo $row['section']; ?>"><br><br></pre>

          <pre>Date of birth  :<input type="text" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>"><br><br></pre>

          <pre>Email          :<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br></pre>

          <pre>Address        :<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br></pre>

          <pre>Phone number   :<input type="text" name="phoneno" value="<?php echo $row['phoneno']; ?>"><br><br></pre>

      
</div>
    
</div>

<!-- Third Container (Grid) -->
</body>
</html>
