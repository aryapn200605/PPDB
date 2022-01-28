<?php
class oop{

    public function tampil($con, $table){
        $sql ="SELECT * FROM $table";
        $jalan = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($jalan))
            $isi[] = $data;
        return @$isi;
    }
    
    public function tampilUser($con, $table, $tuju){
        $sql ="SELECT * FROM $table WHERE user = '$tuju'";
        $jalan = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($jalan))
            $isi[] = $data;
        return @$isi;
    }
    
    public function simpan($con, $table, array $field, $redirect){
        $sql = "INSERT INTO $table SET ";

        foreach($field as $key => $value){
            $sql.=" $key = '$value',";
        }

        $sql = rtrim($sql,',');
        $jalan = mysqli_query($con,$sql);
        
        if($jalan){
            echo "<script>alert('Data berhasil disimpan');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal disimpan');document.location.href='$redirect'</script>";
        }
    }

    public function saveFile($con, $table, $direktori, $fotoA, $fotoB, $fotoC){
        $sql = "INSERT INTO $table SET foto1 = '$fotoA', foto2 = '$fotoB', foto3 = '$fotoC'";
        move_uploaded_file($_FILES['fotoA']['tmp_name'],$direktori.$fotoA);
        move_uploaded_file($_FILES['fotoB']['tmp_name'],$direktori.$fotoB);
        move_uploaded_file($_FILES['fotoC']['tmp_name'],$direktori.$fotoC);
        mysqli_query($con,$sql);
    }

    public function logCek($username, $password, $con){
        $cek   = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $logCek   = mysqli_num_rows($cek);
        return $logCek;
    }

    public function cekDbLog($con, $username){
        $status = "";
        $resultAll = mysqli_query($con, "SELECT status FROM user WHERE username = '$username'");
        if (mysqli_num_rows($resultAll) > 0) {
            while($rowData = mysqli_fetch_array($resultAll)){
                $status = $rowData["status"];
            }
        }
        if($status != ""){
            return $status;
        }
    }

    public function login($logCek, $username, $status){
        if($logCek > 0)
        {
            $_SESSION['username'] = $username;
            $_SESSION['status']   = $status;

            if($status == "admin"){
                echo "<script>alert('Selamat Datang Admin !');</script>";
                header("Refresh: 0; url=admin/index.php?menu=home");
            }else if($status == "user" || "user_v"){
                echo "<script>alert('Selamat Mendaftar !');</script>";
                header("Refresh: 0; url=user/index.php?menu=home");
            }
        }
        else
        {
            echo "<script>alert('Password atau Username salah !');</script>";
            header("Refresh: 0; url=login.php");
                
        }
    }
    public function count($con, $table, $status){
        $query = "SELECT * FROM $table WHERE status = '$status'";
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);
        if($row == ""){
            $row = 0;
            return $row;
        }elseif($row > 0){
            return $row;
        }
    }
    
    function edit($con, $table, $id_peserta){
        $sql = "SELECT * FROM $table WHERE id_peserta = '$id_peserta'";
        $jalan = mysqli_query($con, $sql);
        $tampung = mysqli_fetch_assoc($jalan);
        return $tampung;
    }

    function hapus($con, $table, $where, $redirect){
        $sql = "DELETE FROM $table WHERE $where";
        $jalan = mysqli_query($con, $sql);
        if($jalan){
            echo "<script>alert('Data berhasil dihapus');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Data gagal dihapus');document.location.href='$redirect'</script>";
        }
    }

    function ubahStatus($con, $ses_username){
        $sqli = "UPDATE user SET status = 'user_v' WHERE username = $ses_username";
        mysqli_query($con, $sqli);
    }

    public function terima($con, $NIK, $redirect){
        $query = mysqli_query($con,"UPDATE data_pribadi SET status = 'Diterima' WHERE NIK = '$NIK' ");
        if($query){
            echo "<script>alert('Siswa Diterima');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Data gagal diubah');document.location.href='$redirect'</script>";
        }
    }

    public function tolak($con, $NIK, $redirect){
        $query = mysqli_query($con,"UPDATE data_pribadi SET status = 'Ditolak' WHERE NIK = '$NIK' ");
        if($query){
            echo "<script>alert('Siswa Ditolak');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Data gagal diubah');document.location.href='$redirect'</script>";
        }
    }

    public function cekPeserta($con, $ses_username){
        $resultAll = mysqli_query($con, "SELECT user FROM data_pribadi WHERE user = '$ses_username'");
        if (mysqli_num_rows($resultAll) > 0) {
            while($rowData = mysqli_fetch_array($resultAll)){
                $ses_username = $rowData["user"];
            }
        }
        if($ses_username != ""){
            return $ses_username;
        }

    }
}

?>