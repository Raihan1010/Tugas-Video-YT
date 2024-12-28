<!-- MATERI :   - SELECT DATA (Menyambungkan PHP dengan My SQL + memilih dan  
                        memunculkan data dari MySQL)
                - PAGING -->


<div style="margin:auto; width: 900px;">

<h3><a href="http://localhost/PHP-Hann/Restoran/Kategori/insert.php">TAMBAH DATA</a></h3>

<?php 

    require_once "../function.php";

    if (isset($_GET['update'])) {
        $id = $_GET['update'];
        require_once "update.php";
    }


    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        require_once "delete.php";
    }

    echo '<br>'.'<br>';


    $sql = "SELECT idkategori FROM tblkategori";
    $hasil = mysqli_query($koneksi,$sql);

    $jumlahdata = mysqli_num_rows($hasil);

    

    // Paging adalah menampilkan data dengan dipotong-potong menjadi beberapa bagian / halaman
    // $mulai = 3;       //dimulai dari :
    $banyak = 3;         //banyak data yg ditampilkan

    $halaman = ceil( $jumlahdata / $banyak);

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp &nbsp';
    }

    echo '<br>';

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p; 
        $mulai = ($p * $banyak) - $banyak;  

    } else{
        $mulai = 0;
    }

    echo '<br>';
    echo '<br>';

    $sql = "SELECT * FROM tblkategori LIMIT $mulai, $banyak";      

    $hasil = mysqli_query($koneksi,$sql);

    var_dump($hasil);

    $jumlah = mysqli_num_rows($hasil);

    echo '<br>';
    echo '<br>';

    echo $jumlah;   //jumlah variabel dalam num_rows


    echo '
    
    <table border="1">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Hapus</th>
        <th>Update</th>
    </tr>
    
    ';

    echo '<br>';
    echo '<br>';

    $nomor = $mulai+1;     //menggunakan variabel nomor
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($hasil)) {
            echo '<tr>';
            // echo '<td>'.$row['idkategori'].'</td>';         //menggunakan idkategori
            echo '<td>'.$nomor++.'</td>';                      //mengguakan variabel nomor
            echo '<td>'.$row['kategori'].'</td>';
            echo '<td><a href="?hapus='.$row['idkategori'].'">'.'Hapus'.'</a></td>';
            echo '<td><a href="?update='.$row['idkategori'].'">'.'Update'.'</a></td>';
            echo '</tr>';
        }
    }

    echo '</table>';
?>

<!-- 
    <br><br>


        1
        <td>Kategori</td>
    
    <tr>
        <td>2</td>
        <td>Kategori</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Kategori</td>
    </tr>
-->




    <h1>Saya Hanyalah Programmer Pemula</h1>
</div>
