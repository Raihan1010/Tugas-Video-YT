<?php 
    //MATERI : MACAM-MACAM OPERATOR PHP

    
    // OPERATOR MATEMAKIKA 

    $a = 5;
    $b = 2;

    $c = $a + $b;
    echo $c.'<br>';

    $c = $a - $b;
    echo $c.'<br>';

    $c = $a * $b;
    echo $c.'<br>';

    $c = $a / $b;
    echo round($c).'<br>';   //ROund = Pembulatan keatas, Floor = Pembulatan kebawah

    $c = $a % $b;
    echo $c.'<br>'.'<br>';



    // OPERATOR LOGIKA

    $c = $a > $b;   //true = 1, false = kosong
    echo $c.'<br>'.'<br>';

    // $c = $a < $b;   
    // echo $c;

    // $c = $a != $b;
    // echo $c;

    // $c = $a == $b;   
    // echo $c;



    // INCREMENT & DECREMENT
    $a++;
    echo $a.'<br>';

    $b--;
    echo $b.'<br>'.'<br>';



    // OPERATOR STRING
    $kata1 = 'SURA';
    $kata2 = 'BAYA';
    $hasil = $kata1.$kata2;
    $hasil.=' KOTA PAHLAWAN'; 

    echo $hasil;

?>