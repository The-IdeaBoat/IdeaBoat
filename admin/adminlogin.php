<?php
session_start();
include '../common/connection.php';


if(isset($_POST['submit'])){
  
   $email1 = $_POST['email1'];
   $pass = $_POST['pass'];
    $sql = "SELECT email,password FROM admin WHERE email = '$email1'";
   $query = mysqli_query($conn,$sql);
  
    while ($result = mysqli_fetch_assoc($query)) {
      if($email1 == $result['email']){
      $password = password_verify($pass, $result['password']);
      if($password){
        $_SESSION['adminlogin'] = $email1;
        echo "<script> alert('Done'); window.location='adminpage.php' </script>";
      }
      else{
        echo "<script> alert('Incorrect Password'); </script>";
      }
    }
    else{
      echo "<script> alert('Email not found'); </script>";
    }
    }
    

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="h1 bg-dark text-light text-center px-5 py-5"> IdeaBoat </div>
    <hr>
    <div class="container mt-5">
      <form class="form-group" action="" method="POST">
        <p class="h3 text-center mt-5"> LOGIN </p>
        <div class="row mt-5 ">

          <div class="col-md-4 mt-2"></div>
          <div class="col-md-4 mt-2">
            <input type="email" name="email1" class="form-control" placeholder="Email" required>
          </div>
          <div class="col-md-4 mt-3"></div>
        
          <div class="col-md-4 mt-3"></div>
          <div class="col-md-4 mt-3">
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
          </div>
          <div class="col-md-4 mt-3"></div>
       
          <div class="col-md-4 mt-3"></div>
          <div class="col-md-4 mt-3">
            <input type="submit" name="submit" class="btn btn-dark form-control" placeholder="Submit">
          </div>
          <div class="col-md-4 mt-3"></div>
          
        </div>
      </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>