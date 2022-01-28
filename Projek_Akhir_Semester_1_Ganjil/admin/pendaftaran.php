
    <form method="get">
        <body>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Form Pendaftaran Calon Siswa Baru
                </div>
                <div class="card-body">
                    <?php
                    include "../config/koneksi.php";
                    include "../library/oop.php";

                    $go = new oop();

                    $table = 'data_pribadi';
                    $id_peserta = $_GET['id_peserta'];
                    $edit = $go->edit($con, $table, $id_peserta);

                    include 'form/form_data_pribadi.php';
                    include 'form/form_data_tempat_tinggal.php';
                    include 'form/form_data_orangtua.php';   
                    include 'form/form_data_file.php';       

                              
                    ?>
                    <a href="index.php?menu=formulir" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </form>