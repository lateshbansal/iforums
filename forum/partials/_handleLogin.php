<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
include '_dbconnect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM `user` WHERE username='$username' AND password='$password'
";
$result = mysqli_query($conn,$sql);
$num_of_rows=mysqli_num_rows($result);
if($num_of_rows==1)
{
    //$row=mysqli_fetch_assoc($result);

//if(password_verify($password,$row['password']))
if($result)

{
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
  
    header("Location: /FORUM/index.php?userid=$username");
}
else{
    echo "something going wrong";
    header("Location: /FORUM/index.php?userid=$username");
}
}
}




?>