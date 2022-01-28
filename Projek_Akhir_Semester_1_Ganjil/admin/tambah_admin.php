<?php
    
include '../config/koneksi.php';
include '../library/oop.php';

$simpan    = @$_POST['simpan'];
$nama      = @$_POST['nama_lengkap'];
$username  = @$_POST['username'];
$password  = @$_POST['password'];
$sec_pass  = @$_POST['sec_pass'];

$cek = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
$cek = mysqli_num_rows($cek);

if(isset($simpan)){
    if($cek != 0){
    echo "<script>alert('Email Telah Digunakan !');</script>";
    }else{
    if($password == $sec_pass){
        $go       = new oop();
        $table    = 'user';
        $redirect = 'index.php?menu=admin';
        $field    = array(
        'nama_lengkap'  => $nama,
        'username'      => $username,
        'password'      => $password,
        'status'        => "admin" );

        if(isset($simpan)){
        $go->simpan($con, $table, $field, $redirect);
        }
    }else{
        echo "<script>alert('Konfirmasi password salah !');</script>";
    }
    }
}

?>
<form action="" method="post">
    <h2 class="card-title">Tambah Akun Admin</h2>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
        <input type="text" class="form-control text-capitalize" name="nama_lengkap" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="username" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="password" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="sec_pass" required>
        </div>
    </div>
    <input type="submit" name="simpan" value="Register" class="btn btn-block btn-info">
    <hr>
</form>