<?php 
    //MATERI : PENGUJIAN IF ELSE


    $tanggal = 29;
    // $hasil = $tanggal < 32;
    
    if ($tanggal < 32) {
        if ($tanggal > 0) {
            echo 'Benar';
        }
        else {
            echo 'Salah';
        }
    }
    else {
        echo 'Salah';
    }


    echo '<br>';
    echo '<br>';


    //#1
    $nilai = 99;

    if ($nilai <= 100) {
        if ($nilai >= 0){
            echo 'Nilai Benar';
        }
        else {
            echo 'Nilai Salah';
        }
    }
    else{
        echo 'Nilai Salah';
    }

    echo '<br>';

    //#2 (versi singkat menggunakan &&)
    $skor = -1;

    if ($skor >= 0 && $skor <= 100) {  //jika salah satu kondisi salah,  dia menjalankan else,
        echo 'Skor Benar';             //Dua kondisi harus benar, agar dia menjalankan if/true
    }
    else{
        echo 'Skor Salah';
    }

    echo '<br>';

    //#3 (Versi singkat menggunakan or / ||)
    $value = 101;

    if ($value >= 100 || $value <= 0) {    //Jika salah satu kondisi benar, dia akan menjalankan if
        echo 'Value Salah';                //Dua kondisi harus salah, agar dia menjalanka else
    }
    else {
        echo 'Value Benar';
    }
?>