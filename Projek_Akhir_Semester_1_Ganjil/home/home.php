<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SMK Wikrama 1 Garut</title>
</head>
<body>
    <!--Navbar-->
    <form method="POST">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
            <div class="container">
                <a href="index.html" class="navbar-brand">SMK Wikrama 1 Garut</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a name="daftar" href="../register.php" class="nav-link">
                                Daftar
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../register.php" class="nav-link">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Showcase-->
        <section class="bg-dark text-light p-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Selamat datang di<br>
                            <span class="text-primary">
                                SMK Wikrama 1 Garut
                            </span>
                        </h1>
                        <p class="lead my-4">
                            Padamu Negri Kami Berjanji <br>
                            Lulus Wikrama Siap Membangun Negri
                        </p>
                    <a href="../register.php">
                        <button name="daftar" class="btn btn-primary btn-lg">
                            Daftar Sekarang
                        </button> 
                    </a>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="image/showcase.svg" alt="">
                </div>
            </div>
        </section>

        <!--Newsletter-->
        <section class="bg-primary text-light p5 opacity-50">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="row align-items-start my-4">
                        <div class="col text-center">
                            <img class="w-25" src="image/mortarboard.png" alt="">
                            <h2>Karakter Insan Wikrama</h2>
                            <p>
                                Ilmu yang Amaliyah <br>
                                Amal yang Ilmiyah <br>
                                Akhlakul Karimah
                            </p>
                        </div>
                        <div class="col text-center">
                            <img class="w-25" src="image/book.png" alt="">
                            <h2>Sertifikasi</h2>
                            <p>
                                Bekerjasama dengan lembaga nasional <br>
                                dan internasional untuk menyetarakan <br>
                                kompetensi siswa dengan industri
                            </p>
                        </div>
                        <div class="col text-center">
                            <img class="w-25" src="image/notes.png" alt="">
                            <h2>SMK Islam Terpadu</h2>
                            <p>
                                Membekali peserta didik dengan program <br>
                                akhlaq mulia, tahfidz qur'an, pengajian rutin,<br>
                                sholat duha bersama
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-dark text text-center py-5">
            <div class="container">
                <div class="d-block justify-content-between align-items-center">
                    <h1 class="display-3">
                        SMK Wikrama 1 Garut Membuka Pendaftaran Siswa Baru !!!
                    </h1>
                    <p class="lead py-3">
                        Yuk Daftar <br>
                        Kuota Terbatas Hanya Untuk 252 Siswa
                    </p>
                    <a href="../register.php">
                        <button name="daftar" class="btn btn-primary btn-lg">
                            Daftar Sekarang
                        </button> 
                    </a>
                </div>
            </div>
        </section>

        <section class="bg-dark text-light py-3">
            <div class="container marketing py-5">
                <div class="row featurette">
                    <div class="col-md-7 pt-3">
                        <h2 class="featurette-heading">SMK Wikrama 1 Garut <br><h4 class="text-muted">Sekolah Inspirasi</h4></h2>
                        <p class="lead">
                            Tenaga pengajar berdedikasi tinggi berperan sebagai sahabat belajar yang baik !
                            Sebagai sekolah yang dinobatkan sebagai “Sekolah Sehat” di Kabupaten Garut sebagai bukti komitmen menegakan budaya cinta lingkungan. 
                            Bekerjasama dengan IDS Consultant, Google Education, AWS Education, Mikrotik Academy dan Cyberlabs Academy dalam pengelolaan pendidikan.
                        </p>
                    </div>
                    <div class="col-md-5 pt-5">
                        <img class="w-100" src="image/map.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light text-dark py-3">
            <div class="container marketing py-5">
                <div class="row featurette">
                    <div class="col-md-5 pt-5">
                        <img class="w-100" src="image/sofyan.jpg" alt="">
                    </div>
                    <div class="col-md-7 pt-3">
                        <h2 class="featurette-heading">Sambutan Kepala Sekolah <br><h4 class="text-muted">Mochamad Sofyan</h4></h2>
                        <p class="lead">
                            SMK Wikrama 1 Garut berkomitmen untuk menjadi sekolah menengah kejuruan terbaik di Kabupaten Garut 
                            dengan mendidik generasi muda Indonesia dengan program kepemimpinan, akhlaq mulia, tahfidz qur’an, sertifikasi kompetensi tingkat nasional 
                            maupun internasional dan kurikulum yang terus dikembangkan sesuai tantangan zaman insyaallah program ini akan mengantarkan para siswa 
                            menjadi lulusan yang sukses di dunia dan di akhirat.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark text text-light py-3">
            <div class="container">
                <div class="d-block justify-content-between align-items-center">
                    <h1 class="display-3 text-center">
                        Seputar SMK Wikrama 1 Garut & Pondok Pesantren Al Ikrom
                    </h1>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h4>
                                Jurusan di SMK Wikrama 1 Garut
                            </h4>
                        </button>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-dark">
                                <p>
                                    1. Rekayasa Perangkat Lunak <br>
                                    2. Teknik Jaringan Komputer <br>
                                    3. Perhotelan <br>
                                    4. Bisnis Daring dan Pemasaran
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <h4>
                                Keringanan Biaya di SMK Wikrama 1 Garut
                            </h4>
                        </button>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-dark">
                                <p>
                                    Melalui Program Beasiswa, yaitu :
                                    <br><br>
                                    1. Prestasi <br>
                                    2. Beasiswa Ar-Rohmah <br>
                                    3. Dhuafa <br>
                                    4. Yatim/Piatu
                                    <br><br>
                                    Dengan ketentuan setiap peserta yang mengajukan beasiswa akan diseleksi dan dievaluasi setiap semester
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <h4>
                                Apakah Bisa Langsung Daftar?
                            </h4>
                        </button>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-dark">
                                <p>
                                    Bisa cek di link berikut : <a name="daftar" class="text-success" href="../register.php" style="font: poppins;">klik disini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="text-dark text text-center py-5">
            <div class="container">
                <div class="d-block justify-content-between align-items-center">
                    <h1 class="display-3">
                        Daftar Langsung !
                    </h1>
                    <p class="lead py-3">
                        Klik Tombol Dibawah Ini !
                    </p>
                    <a href="../register.php">
                        <button name="daftar" class="btn btn-primary btn-lg">
                            Daftar Sekarang
                        </button> 
                    </a>
                </div>
            </div>
        </section>
        <footer class="text-center text-lg-start bg-light text-muted pt-4">
            <div class="text-center p-4 text-light" style="background-color: #45637d;">
                <p class="text-reset fw-bold d-inline">Arya Putra Nugroho</p> From SMK Wikrama 1 Garut
            </div>
        </footer>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php

if(isset($_POST['daftar'])){
    echo "<script type='text/javascript'>window.location = '../register.php';</script>";
}

?>