<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Iforums-life saver</title>
</head>

<body>


    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <!-- Slider start here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2300x700/?coding,code" class="d-block w-100" alt="img1">
            </div>

            <div class="carousel-item">
                <img src="https://source.unsplash.com/2300x700/?code,programmers" class="d-block w-100" alt="img2">
            </div>

            <div class="carousel-item">
                <img src="https://source.unsplash.com/2300x700/?computer,coding,codinglanguage" class="d-block w-100"
                    alt="img3">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Slider end here -->
    <div class="container my-3">
        <h1 class="my-2 text-center">Welcome To Iforums- Browse Categories.</h1>

        <div class="row">
<!-- fetch all the category here -->
   <?php  $sql="SELECT * FROM `category`";
   $result=mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($result))
   {
     $cat=$row['category_name'];
     $id=$row['category_id'];
    //  echo "name".$row['category_name']."desc".$row['category_description'];
    echo '
    <div class="col-md-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x300/?computer,laptop,tablet,'.$cat.',python" class="card-img-top" alt="...">
                    <div class="card-body">
                       <a class="text-decoration-none" href="threadlist.php?catid='.$id.'"> <h5 class="card-title">'.$cat.'</h5></a>
                        <p class="card-text">'.substr($row['category_description'],0,80).'....</p>
                        <a href="threadlist.php?catid='.$id.' " class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>';
   }
   
   ?>


<!-- for loop for all the categories -->
            
        </div>

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