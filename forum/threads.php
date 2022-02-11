<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            .browsebox{
                min-height:370px;
            }
        </style>
    <title>Iforums-life saver</title>
</head>

<body>


    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>




    <?php
    $id=$_GET['thread-id'];
    $sql="  SELECT * FROM `threads` WHERE thread_id=$id";
   $result=mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($result))
   {
     $title=$row['thread_title'];
     $desc=$row['thread_desc'];
   }
?>
    <!-- Slider start here -->
    <!-- Slider end here -->
    <div class="container my-1">
        <div class="jumbotron bg-secondary p-5 my-4">
            <h1 class="display-4 text-white"><?php echo $title; ?></h1>
            <p class="lead text-white"><?php
            echo $desc; ?></p>
            <hr class="my-4 ">
            <p class="text-white">It is a peer Forum Dont be Misbehave to anyone its a social organization and dont post
                same question again and again</p>
            <p class="lead text-white">
              <b> posted by: Harry</b>
            </p>
        </div>


    </div>



<?php
$comment_added=false;
$id=$_GET['thread-id'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $desc= $_POST['comment_desc'];

    $sql="INSERT INTO `comment` ( `comment_content`, `thread_id`, `comment_date`) VALUES ('$desc', '$id', current_timestamp())
    ";
    $result=mysqli_query($conn,$sql);
 $comment_added=true;
 if($comment_added)
 {   
     echo '
     <div class="container">
     <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>SUCCESS!</strong> Your comment is successfully added below!!
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   </div>';
 }



 

}

?>
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
  echo '  <div class="container mb-3">
    <form action=" $_SERVER["REQUEST_URI"]" method="post">
        <h2>Put your Comment here..</h2>
    <div class="mb-3 col-md-6 form-control" align-items: center">
        

        <div class="form-group my-3">
            <label for="description">Elaborate your Comment</label>
            <textarea class="form-control" name="comment_desc" required id="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success my-3">Submit</button>
        </div>
    </form>
    </div>';
}
else
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Please logIn</strong> you post your queries only when you logged in
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
?>
    <div class="container ">
        <h1 class="py-3">Discussions</h1>
</div>

<div class="container">
<?php

$sql="SELECT * FROM `comment` WHERE thread_id=$id
";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result))
{    $comment=$row['comment_content'];
    $comment_time=$row['comment_date'];
 echo '<div class="media d-flex my-4 ">
 <img class="mr-3" src="img/user-default.png" width="55px" alt="Generic placeholder image">
 <div class="media-body">
     <h5 class="mt-0 ml-3">  Anomys user   <small> '.$comment_time.'</small></h5>
     '.$comment.'
 </div>
</div>
';
}

?>


</div>

    <div class="container browsebox">
        <!-- <h1 class="py-3">Discussions</h1> -->


        <!-- <?php
    $id=$_GET['catid'];
    $sql="  SELECT * FROM `threads` WHERE thread_cat_id=$id";
   $result=mysqli_query($conn,$sql);
  $noresult=true;
   while($row=mysqli_fetch_assoc($result))
   {$noresult=false;
     $id=$row['thread_id'];
     $title=$row['thread_title'];
     $description=$row['thread_desc'];

  echo '<div class="media d-flex my-4 ">
  <img class="mr-3" src="img/user-default.png" width="55px" alt="Generic placeholder image">
  <div class="media-body">
      <h5 class="mt-0"><a href="thread.php?thread-id='.$id.'" class="text-decoration-none ">'.$title.'</a></h5>
      '.$description.'
  </div>
</div>
';

    }

    
        if($noresult)
{
   echo '<div class="jumbotron jumbotron-fluid bg-secondary p-5 text-white">
   <div class="container">
     <h1 class="display-4">No Threads Found!! </h1>
     <p class="lead">Be the first one to answer this.</p>
   </div>
 </div>' ;
}
?>
    
 -->
</div>        

       
<?php
include 'partials/_footer.php';
?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>


</html>