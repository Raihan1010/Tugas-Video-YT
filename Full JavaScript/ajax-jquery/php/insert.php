<?php 

    require_once 'koneksi.php'; 

    $data = stripslashes(file_get_contents("php://input"));
    $dataPelanggan = json_decode($data, true);

    $pelanggan = $dataPelanggan['pelanggan'];
    $alamat = $dataPelanggan['alamat'];
    $telp = $dataPelanggan['telp'];

    
    // $sql = "INSERT INTO tblpelanggan VALUES('','$pelanggan','$alamat','$telp','','','')";

    if (!empty($pelanggan) and !empty($alamat) and !empty($telp)) {

        $sql = "INSERT INTO tblpelanggan (pelanggan, alamat, telp, email, password, aktif) 
        VALUES ('$pelanggan', '$alamat', '$telp', '', '', 0)";

        if ($result = mysqli_query($con, $sql)) {
            echo 'data sudah disimpan';
        } else {
            echo 'data gagal disimpan';
        }
    }else{
        echo 'data kosong';
    }

    
    

?>