<?php
$servername="localhost";
$username="root";
$password="";
$database="iforums";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "Sorry We Have some issue right now we will come back later";
}

?>