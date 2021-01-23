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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <form class="sign-in-form card" style="margin-top: 18%;" id="loginForm">
            <div class="card-body">
                <a href="index.html" class="brand text-center d-block m-b-20"></a>
                <h2 class="sign-in-heading text-center m-b-20">LOGIN</h2>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="inputUsername" class="form-control" placeholder="Email address" required="">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                </div>
                <div style="margin-top: -1%; display: none;" id="PasswordError"><p style="color: red;">user name or password worrng !</p></div>
                <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" id="inputLogin" type="submit">Sign In</button>
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