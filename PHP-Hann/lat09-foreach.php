<?php 
    //MATERI : FOREACH PHP ( = MATERI ARRAY )


    //Foreach digunakan utk menampilkan isi dalam array
    //Salah satu cara menampilkan isi array (Materi sebelumnya)
    $nama = array('Anam','Biboy','Ayi',999);

    var_dump($nama);

    echo '<br>';

    foreach ($nama as $key) {
        echo $key.'<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Array asosiatif
    $jeneng = array(
        'Anam'=>999,
        'Biboy'=>888,
        'Ayi'=>777
    );

    var_dump($jeneng);

    echo '<br>';
    foreach ($jeneng as $key => $value) {
        echo $key.' ======> '.$value.'<br>';
    }

?>