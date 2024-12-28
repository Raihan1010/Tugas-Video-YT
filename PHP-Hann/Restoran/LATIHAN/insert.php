<!-- MATERI : INSERT DATA (MENAMBAHKAN DATA DARI PHP KE MYSQL) -->


<form action="" method="post">

    kategori :
    <input type="text" name="kategori" id="">
    <br>
    <input type="submit" name="simpan" value="simpan" id="">

</form>

<?php

require_once "../function.php";

if (isset($_POST['simpan'])) {

    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO tblkategori VALUES ('', '$kategori')";

    $hasil = mysqli_query($koneksi, $sql);

    header("location:http://localhost/PHP-Hann/Restoran/Kategori/select.php");
}


?>