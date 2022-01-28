<div class="col-md-12">
    <form action="" method="get">
        <h2>Informasi Akun Admin</h2>
        <hr>
        <table class="table">
        <thead>
            <tr>
                <td>
                    <a class="btn btn-primary" href="index.php?menu=tambah_admin">
                        <img src="images/account-multiple-plus.svg" alt="">
                        Tambah
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Username</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../config/koneksi.php';
                include '../library/oop.php';

                $table = "user";

                $go = new oop();
                $a = $go->tampilUser($con, $table, "admin");
                $no = 0;

                $table = "user";
                $redirect = "index.php?menu=admin";
                @$username = $_GET['username'];
                @$where = "username = $username";
                
                if(isset($_GET['hapus'])){
                    $go->hapus($con, $table, @$where, $redirect);
                }

                if($a == ""){
                    echo "<tr><td colspan=5>--No Record--</td></tr>";
                } else {

                foreach($a as $value){
                $no++;
                
                
            ?>
            <tr>
                
                <td><?php echo $no; ?></td>
                <td><?php echo $value['nama_lengkap'] ?></td>
                <td><?php echo $value['username'] ?></td>
                <td><?php echo $value['status'] ?></td>
                <td>
                    <a class="btn btn-danger" href="?menu=admin&hapus&username=<?php echo $value['username'] ?>" 
                    onclick="return confirm('Hapus data <?php echo $value['nama_lengkap'] ?> ?')"><img src="images/trash-can.svg" alt=""></a>
                </td>
            </tr>
                <?php }  } ?>
        </tbody>
        </table>
    </form>
</div>