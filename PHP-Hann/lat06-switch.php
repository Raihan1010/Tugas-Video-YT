<?php 
    //MATRI : SELECTOR PHP (SWITCH CASE)


    //Integer
    $hari = 4;

    switch ($hari) {
        case 1:
            echo 'Minggu';
            break;
        case 2:
            echo 'Senin';
            break;
        case 3: 
            echo 'Selasa';
            break;
        case 4;
            echo 'Rabu';
            break;
        
        default:
            echo 'Hari Belum Dibuat!';
            break;
    }

    echo '<br>';
    echo '<br>';


    //String
    $pilihan = 'simpan';

    switch ($pilihan) {
        case 'ubah':
            echo 'Anda memutuskan untuk mengubah';
            break;
        case 'tambah';
            echo 'Anda memutuskan untuk menambah';
            break;
        case 'hapus';
            echo 'Anda memutuskan untuk menghapus';
            break;
        
        default:
            echo 'Pilihan masih belum tersedia';
            break;
    }


?>