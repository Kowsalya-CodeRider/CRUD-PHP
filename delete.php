<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student details updation</title>
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
      <a class="navbar-brand" href="#">Student details updation</a>
    </div>

  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Students in various departments</h3>
  <img src="images/index.png" class="img-responsive img-circle margin" style="display:inline" alt="profile" width="350" height="350">
  <h3>I'm a student</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <form action="" method="post">
        

 	<div class="col-sm-3"></div>

	<div class="col-sm-6">

 <?php
include 'config.php';
$uid = $_GET['id'];
$query = "SELECT * FROM student WHERE id = '".$uid."'";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

?>

          <pre> Register number To Update :<input type="text" name="regno" value="<?php echo $row['regno']; ?>"><br><br></pre>

          <p>Student data to update</p>

          <pre>Name           :<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br></pre>

          <pre>Department     :<input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br></pre>

          <pre>Section        :<input type="text" name="section" value="<?php echo $row['section']; ?>"><br><br></pre>

          <pre>Date of birth  :<input type="text" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>"><br><br></pre>

          <pre>Email          :<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br></pre>

          <pre>Address        :<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br></pre>

          <pre>Phone number   :<input type="text" name="phoneno" value="<?php echo $row['phoneno']; ?>"><br><br></pre>

         <button type="submit" name="delete"  class="del" value="Delete Data" style="color:black">
</div>
       </form>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">Students division</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Student fees and account balances may be paid with cash, check or card.  The Cashier's Office and the campus bookstore will accept Visa, MasterCard and Discover cards. </p>
          <img src="images/img19.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>present a performance of (a dramatic work), using intensive group discussion and improvisation in order to explore aspects of the production prior to formal staging.</p>
            <img src="images/img20.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>The Bus Technical, Maintenance and Procurement Workshop brings transit bus maintenance professionals to discuss and share information on the latest topics in these areas.</p>
        <img src="images/img21.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
            $(".del").click(function() {
                var id = $(this).attr('id');
                if (confirm("Are you sure want ot delete")) {
                    $.ajax({
                        type: "POST",
                        url:"studentclass.php",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            location.reload('delete.php')
                        }
                    });
                }
                return false;
            });
        });
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">

    <p><b>Phone no: 04146-231456 to 459</b></p>

  <p><b>Fax : 04146 231456

  mail:college@ifet.ac.in</b></p>
  <p><b>IFET-College-of-Engineering

  Villupuram-605-108

  Tamil-Nadu,INDIA</b></p>


</footer>

</body>
</html>
