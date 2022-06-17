<?php

include('config.php');
$user = $_POST[$_SESSION['username']];

if(isset($_POST['deletebtn']))
{
  
  $sql = "DELETE FROM `users` WHERE `users`.`id` ='$user'";
  

  $query_run = mysqli_query($conn,$sql);

  if($query_run)
  {
    echo '<script> alert("Account Deleted"); </script>';
    header("Location: index.php");
  }
  else {
      echo("Error description: " . mysqli_error($conn));
      
  }
}

?>