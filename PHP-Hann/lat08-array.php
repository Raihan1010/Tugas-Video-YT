<?php 
    //MATERI : ARRAY PHP


    //#1 Array Dimensi
    $nama = array('Budi','Risky','Yoni','Yanto', 99 , 7.5 );  //index array/key = integer, lgsg ditulis valuenya

    var_dump($nama);
    echo '<br>';

    //memanggil array
    echo $nama[2]; //1
    echo '<br>';

    for ($i=0; $i < 4; $i++) { //2
        echo $nama[$i].',';
    }
    echo '<br>';

    foreach ($nama as $key) { //3
        echo $key.'<br>';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';


    //#2 Array Asosiatif (array berpasangan)
    $name = array (
        'Joni' => 'Surabaya',    //Index array/key menjadi String, value nya ditulis disamping
        'Budi' => 99999,
        'Tejo' => 'Saranjana',
        'Siti' => 77.77    
    );
    //Bentuk lain penulisannya :
    // $name['Joni']='Surabaya';
    // $name['Budi']=99999;
    // $name['Tejo']='Saranjana';
    // $name['Siti']=77.77;
    

    var_dump($name); 
    echo '<br>';

    foreach ($name as $key => $value) {
        echo $key. ' = '.$value.'<br>';
    }
?>