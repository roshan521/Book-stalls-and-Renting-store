<?php
include("config.php");
  if(isset($_POST['re_password']))
  {
    session_start();
  $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $user=$_SESSION['username'];
 
  $email=$_POST['email'];
  $query_run=mysqli_query($connection,"select * from users where email='$email'");
  while($row = mysqli_fetch_assoc($query_run))
      {  
  $data_pwd=$row['password'];

      }
  
  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
    $update_pwd=mysqli_query($connection,"update users set password='$new_pass' where email='$email'");
    echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
  }
  else{
    echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
  }

  }
  else
  {
  echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
  }}
?>
