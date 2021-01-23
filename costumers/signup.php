<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;


include("../php/config.php");
include("../php/salesClass.php");

    $salesClass = new salesClass();

  if (isset($_SESSION['costumer_id'])) {
    header('Location: ../main.php');
    exit();
  }

  if(isset($_POST['submit'])){
    $data = new \stdClass;
    $data->costumer_name = $_POST['costumer_name'];
    $data->costumer_surname = $_POST['costumer_surname'];
    $data->costumer_phone = $_POST['costumer_phone'];
    $data->costumer_email = $_POST['costumer_email'];
    $data->costumer_password = $_POST['costumer_password'];
    if($salesClass->signupCostumers($data)){
      header('Location: signin.php');
      exit();
    }
  }

?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/edo" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/bitstream-vera-serif" rel="stylesheet">

    <style>
      body{
        background-color: #f7f7f7;
      }
      .blue{
        background-color: #3F6A8A;
      }
      .gray{
        background-color: #4D5E72;
      }
      .cream{
        background-color: #F1E6C1;
      }
      .yellow{
        background-color: #F2CC8C;
      }
      #nav-header{
        color: #F2CC8C;
        font-family: 'Edo', sans-serif;
      }
      #header{
        font-family: 'Bitstream Vera Serif', sans-serif;
      }
      .form-card{
        max-width: 45%;
        margin: 5% auto;
        padding: 40px;
      }
      @media (max-width: 575px) {
        .form-card{
        max-width: 90%;
        }
      }
      
      @media (min-width: 576px) {
        .form-card{
        max-width: 80%;
        }
      }
      @media (min-width: 768px) { 
        .form-card{
        max-width: 70%;
        }
      }
      @media (min-width: 992px){
        .r{
          margin-right: 8%;
        }
      }
      @media (min-width: 1200px) {
        .form-card{
        max-width: 60%;
        }
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>

<div class="container-fluid mt-5 m-5">
    <form class="form-card card" method="post">
    <div class="form-group row justify-content-center r">
        <label for="i-name" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
        <input type="text" class="form-control" id="i-name" name="costumer_name" required>
        </div>
    </div>
    <div class="form-group row justify-content-center r">
        <label for="i-lastname" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Surname</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
        <input type="text" class="form-control" id="i-lastname" name="costumer_surname" required>
        </div>
    </div>
    <div class="form-group row justify-content-center r">
        <label for="i-tel" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Phone</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
        <input type="tel" class="form-control" id="i-tel" name="costumer_phone" required>
        </div>
    </div>
    <div class="form-group row justify-content-center r">
        <label for="i-email" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Email</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
        <input type="email" class="form-control" id="i-email" name="costumer_email" required>
        </div>
    </div>
    <div class="form-group row justify-content-center r">
        <label for="input-password" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Password</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
        <input type="password" class="form-control" id="i-password" name="costumer_password" required>
        </div>
    </div>
    <div class="form-group row justify-content-center mt-4">
        <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
        <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit" name="submit">Sign up</button>
        <a href="signin.php" class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Sign in</a>
        </div>
    </div>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>