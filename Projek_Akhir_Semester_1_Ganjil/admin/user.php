<div class="col-md-12">
    <form action="" method="get">
        <h2>Informasi Akun User</h2>
        <hr>
        <table class="table">
        <thead>
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
                $a = $go->tampilUser($con, $table, "user");
                $no = 0;

                $redirect = "index.php?menu=user";
                
                @$username = $_GET['username'];
                @$where = "username = '$username' AND status = 'user'";
                
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
                    <a class="btn btn-danger" href="?menu=user&hapus&username=<?php echo $value['username']; ?>" 
                    onclick="return confirm('Hapus data <?php echo $value['nama_lengkap'] ?> ?')"><img src="images/trash-can.svg" alt=""></a>
                </td>
            </tr>
                <?php }  } ?>
        </tbody>
        </table>
    </form>
</div>