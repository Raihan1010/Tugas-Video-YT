<!-- MATERI : DELETE DATA (MENGHAPUS DATA DARI PHP KE MYSQL) -->


<?php 

    require_once "../function.php";

    // $id = 13;

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/PHP-Hann/Restoran/Kategori/select.php");

?>