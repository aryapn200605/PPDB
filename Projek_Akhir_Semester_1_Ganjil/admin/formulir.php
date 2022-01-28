<div class="col-md-12">
    <form action="" method="get">
        <h2>Daftar Peserta Yang Mendaftar</h2>
        <hr>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Email Pendaftar</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../config/koneksi.php';
                include '../library/oop.php';

                $tabel = "data_pribadi";

                $go = new oop();
                $a = $go->tampil($con, $tabel);
                $no = 0;
                
                @$NIK = $_GET['NIK'];
                $redirect = "index.php?menu=formulir";

                if($a == ""){
                    echo "<tr><td colspan=6>--No Record--</td></tr>";
                } else {

                if(isset($_GET['terima'])){
                    $go -> terima($con, @$NIK, $redirect);
                }

                if(isset($_GET['tolak'])){
                    $go -> tolak($con, @$NIK, $redirect);
                }

                foreach($a as $value){
                $no++;
            ?>
            <tr>
                
                <td><?php echo $no; ?></td>
                <td><?php echo $value['nama_lengkap'] ?></td>
                <td><?php echo $value['NIK'] ?></td>
                <td><?php echo $value['user'] ?></td>
                <td><?php echo $value['status'] ?></td>
                <td>
                    <a href="?menu=formulir&terima&NIK=<?php echo $value['NIK'] ?>" class="btn btn-success"><img src="images/check-bold.svg" alt=""></a>
                    <a href="?menu=formulir&tolak&NIK=<?php echo $value['NIK'] ?>" class="btn btn-danger"><img src="images/close-thick.svg" alt=""></a>
                    <a class="btn btn-primary" href="?menu=pendaftaran&edit&id_peserta=<?php echo $value['id_peserta'] ?>"><img src="images/application-edit.svg" alt=""></a>
                </td>
            </tr>
                <?php }  } ?>
        </tbody>
        </table>
    </form>
</div>