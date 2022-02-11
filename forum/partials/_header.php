<?php
session_start();
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/FORUM">Ifourms</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/FORUM">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/FORUM/about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/FORUM/contect.php">Contect</a>
      </li>
    </ul>



    ';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
      echo '
      <div class=" mx-2 ">
    <form class="d-flex form-inline my-2 my-lg-0">
   <a href="partials/_logout.php" class="btn btn-outline-success mr-3 ml-2"  data-bs-target="#loginModal" >LogOut</a>
    <p class="text-white" my-0 mx-2>Welcome '. $_SESSION['username'].'</p>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      
    </form>
    </div>';
    }
    else{
      echo'
      <div class=" mx-2 ">
      <button class="btn btn-outline-success ml-2" data-bs-toggle="modal" data-bs-target="#loginModal" >login</button>
    
      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal" >Signup</button>
      </div>
      
      <form class="d-flex form-inline my-2 my-lg-0">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>';
    }
    echo '
  </div>
</div>
</nav>
';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if(isset($_GET['signupsuccess'])==true && $_GET['signupsuccess']=="true")
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS!</strong> you have successfully Signup.........
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>