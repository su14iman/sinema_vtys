<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;


include("../php/config.php");
include("../php/salesClass.php");

    $salesClass = new salesClass();
    $error = '';

  if (isset($_SESSION['costumer_id'])) {
    header('Location: ../explorer.php');
    exit();
  }

  if(isset($_POST['submit'])){
    $data = new \stdClass;
    $data->costumer_email = $_POST['costumer_email'];
    $data->costumer_password = $_POST['costumer_password'];
    if($salesClass->signinCostumers($data) !== false){
      $_SESSION['costumer_id'] = $salesClass->signinCostumers($data);
      header('Location: explorer.php');
      exit();  
    }else{
      $error = "Email or password worrng ! ";
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
      .sign-in-form{
        max-width: 450px;
        margin: 15% auto;
        padding: 30px;
      }
      
    </style>

    <title>Signin</title>
  </head>
  <body>
    <div class="container">
        <form method="post" class="sign-in-form card" style="margin-top: 18%;" id="loginForm">
            <div class="card-body">
                <a href="index.html" class="brand text-center d-block m-b-20"></a>
                <h2 class="sign-in-heading text-center m-b-20">Signin</h2>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="inputUsername" name="costumer_email" class="form-control" placeholder="Email address" required="">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="costumer_password" id="inputPassword" class="form-control" placeholder="Password" required="">
                </div>
                <div style="margin-top: -1%;" id="PasswordError"><p style="color: red;"><?php echo $error; ?></p></div>
                <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" id="inputLogin" name="submit" type="submit">Sign In</button>
                <a href="signup.php" class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" id="inputLogin" type="submit">Sign Up</a>
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