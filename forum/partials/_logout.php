<?php
session_start();
echo "you are requesting for logout...please Wait";
session_destroy();
$_SESSION['loggedin']=false;
header("Location: /FORUM/index.php");
?>