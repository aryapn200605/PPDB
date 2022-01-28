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

    $simpan    = @$_POST['simpan'];
    $nama      = @$_POST['nama'];
    $username  = @$_POST['username'];
    $password  = @$_POST['password'];
    $sec_pass  = @$_POST['sec_pass'];

    $cek = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    $cek = mysqli_num_rows($cek);

    if(isset($simpan)){
      if($cek != 0){
        echo "<script>alert('Username Telah Digunakan !');</script>";
        }else{
        if($password == $sec_pass){
          $go       = new oop();
          $table    = 'user';
          $redirect = 'login.php';
          $field    = array(
            'nama_lengkap'  => $nama,
            'username'      => $username,
            'password'      => $password,
            'status'        => "user" );

          if(isset($simpan)){
            $go->simpan($con, $table, $field, $redirect);
          }
        }else{
          echo "<script>alert('Konfirmasi password salah !');</script>";
        }
      }
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
              <h3><strong>REGISTER MENJADI PENDAFTAR SISWA/I</strong></h3>
              </div>
              <form action="" method="post">
                <div class="form-group first">
                  <label for="username">Nama Lengkap</label>
                  <input type="text" class="form-control text-capitalize" placeholder="Nama Lengkap" id="username" name="nama" required>
                </div>
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" class="form-control" placeholder="Email" id="username" name="username" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="sec_pass" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <a href="login.php"><label>Log In &rarr;</label></a>
                </div>

                <input type="submit" name="simpan" value="Register" class="btn btn-block btn-info">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="resources/js/jquery-3.3.1.min.js"></script>
    <script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/main.js"></script>
  </body>
</html>