<?php
//item and add item class

class student {  
						function __construct(){
			///database configuration
			$dbServer = 'localhost'; //Define database server host
			$dbUsername = 'root'; //Define database username
			$dbPassword = ''; //Define database password
			$dbName = 'ifet'; //Define database name
			
			//connect databse
			$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
			if(mysqli_connect_errno()){
				die("Failed to connect with MySQL: ".mysqli_connect_error());
			}else{
				  $this->connect = $con;
			}

	}
	
	 public function details(){
	 							$regno = $_POST['regno'];
  								$name = $_POST['name'];
  								$department = $_POST['department'];
  								$section = $_POST['section'];
  								$dateofbirth = $_POST['dateofbirth'];
  								$email = $_POST['email'];
  								$address = $_POST['address'];
  								$phoneno = $_POST['phoneno'];


								$result = mysqli_query($this->connect,"INSERT INTO student(regno, name, department, section, dateofbirth, email, address, phoneno) VALUES ('".$regno."','".$name."','".$department."','".$section."','".$dateofbirth."','".$email."','".$address."','".$phoneno."')");

  								header("Location:student1.php");
  								}

      public function view1(){
      								$query = "SELECT id,regno,name FROM student";
                                    $result = mysqli_query($this->connect,$query);
                                                  while($row=mysqli_fetch_assoc($result))
                                                    {
                                              ?>
                                                        <tr style="border: 3px solid purple;">
                                                            <td style="border: 3px solid purple;">
                                                                <?php echo $row['id']; ?>
                                                            </td>
                                                            <td style="border: 3px solid purple;">
                                                                <?php echo $row['regno']; ?>
                                                            </td>
                                                            <td style="border: 3px solid purple;">
                                                                <?php echo $row['name']; ?>
                                                            </td>
                                                            <td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
                                                        </tr>
                                                        <?php 
                                                    } 
                                               
      }


      public function upd(){
      							$id = $_REQUEST['id'];
								$regno = $_POST['regno'];
  								$name = $_POST['name'];
  								$department = $_POST['department'];
  								$section = $_POST['section'];
  								$dateofbirth = $_POST['dateofbirth'];
  								$email = $_POST['email'];
  								$address = $_POST['address'];
  								$phoneno = $_POST['phoneno'];
								
								$result = mysqli_query($this->connect,"UPDATE student SET regno = '$regno',name = '$name',department = '$department',section = '$section',dateofbirth = '$dateofbirth',email = '$email',address = '$address',phoneno = '$phoneno' WHERE id = '$id'");
								header("location: student1.php");
		
	}

}
  	?>	