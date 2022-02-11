<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include '_dbconnect.php';
$showError="";

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

    $sql="SELECT * FROM `user` WHERE username='$username' AND email='$email'
    ";
  $result=mysqli_query($conn,$sql);
  $numOfRows=mysqli_num_rows($result);
  if($numOfRows>0)
  {
      $showError="username of email already exist";
      echo $showError;
  }
  else
  {
      if($password==$cpassword)
      {
          $sql="INSERT INTO `user` ( `username`, `password`,`email`,`date`) VALUES ('$username', '$password','$email', current_timestamp())
          ";
          $result=mysqli_query($conn,$sql);
          header("Location: /FORUM/index.php?signupsuccess=true");
      }
      else{

          $showError="password does not match";
          $result=mysqli_query($conn,$sql);
          header("Location: /FORUM/index.php?signupsuccess=false and $showError");
      }
  }

}


?>