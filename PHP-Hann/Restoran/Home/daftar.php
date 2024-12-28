<h3>Silahkan Registrasi Dulu Le </h3>

<div class="form-group">
    <form action="" method="post">
    <div class="form-group w-50 mb-3">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="Masukkan Nama Anda" class="form-control mt-2">
        </div>

        <div class="form-group w-50 mb-3">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="Masukkan Alamat Anda" class="form-control mt-2">
        </div>

        <div class="form-group w-50 mb-3">
            <label for="">Telp</label>
            <input type="text" name="telp" required placeholder="Masukkan No Telp Anda" class="form-control mt-2">
        </div>

        <div class="form-group w-50 mb-3">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="Masukkan Email Anda" class="form-control mt-2">
        </div>

        <div class="form-group w-50 mb-3">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="password" class="form-control mt-2">
        </div>

        <div class="form-group w-50 mb-3">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="password" class="form-control mt-2">
        </div>

        

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1)";
            // echo $sql;
            $db->runSQL($sql);
            header("location:?f=home&m=info");

        } else{
            echo "<h3>Tolong Periksa Ulang Sandi Anda</h3>";
        }

    }

?>

