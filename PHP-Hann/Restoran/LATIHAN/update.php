<!-- MATERI : UPDATE DATA (MEMPERBARUI / MENGUBAH DATA DARI PHP KE MYSQL) -->


<?php 

    require_once "../function.php";

    

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);
    // echo $row['kategori'];


    // $kategori = 'Buah Semangka';
    // $id = 6;

    

    // echo $sql;

?>

<form action="" method="post">
    Update Data Anda :
    <input type="text" name="kategori" value=" <?php echo $row['kategori'] ?> " id="">
    <br>
    <input type="submit" name="simpan" value="Simpan" id="">
</form>


<?php 

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['kategori'];
        
        $sql = "UPDATE tblkategori SET kategori = '$kategori' WHERE idkategori = $id";

        $result = mysqli_query($koneksi, $sql);

        header("location:http://localhost/PHP-Hann/Restoran/Kategori/select.php");

    }

?>