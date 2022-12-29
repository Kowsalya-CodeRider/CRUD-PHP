    <?php
include 'config.php';
$uid = $_GET['id'];
$query = "DELETE FROM `student` WHERE id = '$uid'";
 $result = mysqli_query($con, $query);
 if($result)
  {
      echo 'Data deleted';
  }else{
      echo 'Data Not deleted';
  }
  mysqli_close($con);
?>