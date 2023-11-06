<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>welcome <?php echo $_SESSION['email']?></title>
  </head>
  <body>
    <div class="container my-5">
    <div class="jumbotron">
  <h1 class="display-4">welcome <?php echo $_SESSION['email']?> </h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
  </p>
</div>
    </div>
 
   
  </body>
</html>