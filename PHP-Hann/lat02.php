<?php 
    //MATERI : VARIABEL TIPE DATA & COMMENT 


    // Variabel Dalam PHP tidak perlu dideklarasikan tipe datanya (cukup $)

    $tulisan = 'Saya Belajar';
    // Variabel String
    echo $tulisan. '<br>';

    $angka = 9999;
    //Variabel Int
    echo $angka. '<br>'.'<br>';
    
    $tahun = 2024;
    echo 'Tahun '. $tahun. '<br>'.'<br>';
    // Menyambung String dan Variabel Integer


    // Melihat tipe data
    var_dump($tulisan);
    echo '<br>';
    var_dump($tahun+2); //menambah value
    echo '<br>';
    var_dump((string)$tahun); //mengubah tipe data

?>