<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Pendaftaran</title>
    <?php
    
    include 'config/koneksi.php';
    include 'library/oop.php';

    session_start();

    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $login    = @$_POST['login'];
 
    $go = new oop();
    $logCek = $go -> logCek($username, $password, $con);
    $status = $go -> cekDbLog($con, $username);    

    if(isset($_POST['login']))
    {
      $go -> login($logCek, $username, $status);
    }
    ?>
  </head>
  <body>
  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('image/bg_2.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>PENDAFTARAN PESERTA DIDIK BARU</strong></h3>
              </div>
              <form action="" method="post">
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" class="form-control" placeholder="Email" id="username" name="username" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <a href="register.php"><label>Register &rarr;</label></a>
                </div>

                <input type="submit" name="login" value="Log In" class="btn btn-block btn-info">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="resources/js/jquery-3.3.1.min.js"></script>
    <script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/main.js"></script>
  </body>
</html>