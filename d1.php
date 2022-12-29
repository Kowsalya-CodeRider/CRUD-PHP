<?php
include 'config.php';
if($_POST['id'])
{
$id = mysql_real_escape_string($_POST['id']);
$query = "DELETE FROM `student` WHERE id = '$id'";
 $result = mysqli_query($con, $query);
 if($result)
  {
      echo 'Data deleted';
  }else{
      echo 'Data Not deleted';
  }
  mysqli_close($con);
}
?>