
    <form method="post" enctype="multipart/form-data">
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

                    $simpan = @$_POST['simpan'];
                    $id_peserta = date("d/m/y|H:i:sA");

                    $go = new oop();

                    $ses_status = $_SESSION['status'];
                    $ses_username = $_SESSION['username'];

                    include 'form/form_data_pribadi.php';
                    include 'form/form_data_tempat_tinggal.php';
                    include 'form/form_data_orangtua.php';   
                    include 'form/form_data_file.php';   

                    $direktori = "../img/";

                    $table = 'data_pribadi';
                    $redirect = '../user/index.php?menu=home';
                    $field = array(
                        'id_peserta'            => $id_peserta,
                        'NIK'                   => @$_POST['NIK'],
                        'user'                  => $ses_username,
                        'nama_lengkap'          => @$_POST['nama_lengkap'],
                        'jenis_kelamin'         => @$_POST['jenis_kelamin'],
                        'tempat_lahir'          => @$_POST['tempat_lahir'],
                        'tanggal_lahir'         => @$_POST['tanggal_lahir'],
                        'agama'                 => @$_POST['agama'],
                        'cita_cita'             => @$_POST['cita_cita'],
                        'jumlah_saudara'        => @$_POST['jumlah_saudara'],
                        'berat_badan'           => @$_POST['berat_badan'],
                        'tinggi_badan'          => @$_POST['tinggi_badan'],
                        'golongan_darah'        => @$_POST['golongan_darah'],
                        'nama_ayah'             => @$_POST['nama_ayah'],
                        'pekerjaan_ayah'        => @$_POST['pekerjaan_ayah'],
                        'nama_ibu'              => @$_POST['nama_ibu'],
                        'pekerjaan_ibu'         => @$_POST['pekerjaan_ibu'],
                        'alamat'                => @$_POST['alamat'],
                        'tinggal_dengan'        => @$_POST['tinggal_dengan'],
                        'rt'                    => @$_POST['rt'],
                        'rw'                    => @$_POST['rw'],
                        'kelurahan'             => @$_POST['kelurahan'],
                        'kecamatan'             => @$_POST['kecamatan'],
                        'kota'                  => @$_POST['kota'],
                        'provinsi'              => @$_POST['provinsi'],
                        'kode_pos'              => @$_POST['kode_pos'],
                        'telepon'               => @$_POST['telepon'],
                        'nama_sekolah'          => @$_POST['nama_sekolah'],
                        'foto1'                 => $fotoA,
                        'foto2'                 => $fotoB,
                        'foto3'                 => $fotoC,
                        'status'                => "Waiting..." );
    

                    if(isset($simpan)){
                        $go->simpan($con, $table, $field, $redirect);
                        $go->saveFile($con, $table, $direktori, $fotoA, $fotoB, $fotoC);
                    }
                          
                    ?>
                    <h5 class="text-danger font-weight-bold mb-3">*Data yang telah di input tidak dapat di ubah kembali !</h5>
                <button class="btn btn-primary mt-3" name="simpan">Daftar</button>
                </div>
            </div>
        </div>
    </form>