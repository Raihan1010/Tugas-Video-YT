<!-- MATERI : GET PHP -->


<form action="" method="get">

    Nama :
    <input type="text" name="nama">
    
    Alamat :
    <input type="text" name="alamat">

    <input type="submit" name="kirim" value="Meluncur">

</form>

<?php 

    if (isset($_GET['kirim'])) {
        $jeneng = $_GET ['nama'];
        $panggon = $_GET ['alamat'];

        echo $jeneng;
        echo '<br>';
        echo $panggon;
    }

?>