<div class="col-md-12">
    <form action="" method="post">
        <h2>Daftar Peserta Yang Mendaftar</h2>
        <hr>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../config/koneksi.php';
                include '../library/oop.php';

                $tabel = "data_pribadi";
                $user = $_SESSION['username'];

                $go = new oop();
                $a = $go->tampilUser($con, $tabel, $user);
                $no = 0;

                if($a == ""){
                    echo "<tr><td colspan=4>--No Record--</td></tr>";
                } else {

                foreach($a as $value){
                $no++;
            ?>
            <tr>
                
                <td><?php echo $no; ?></td>
                <td><?php echo $value['nama_lengkap'] ?></td>
                <td><?php echo $value['NIK'] ?></td>
                <td><?php echo $value['status'] ?></td>
            </tr>
                <?php }  } ?>
        </tbody>
        </table>
    </form>
</div>