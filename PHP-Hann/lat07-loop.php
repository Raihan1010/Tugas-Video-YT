<?php 
    //MATERI : PENGULANGAN PHP (LOOPING)


    //#1 FOR
    //Perulangan Naik
    for ($i=1; $i <= 15 ; $i++) { 
        echo $i.',';
    }

    echo '<br>';

    for ($i=0; $i <= 15 ; $i=$i+3) { 
        echo $i.',';
    }

    echo '<br>';
    echo '<br>';

    //Perulangan Menurun
    for ($i=15; $i >= 1 ; $i--) { 
        echo $i.',';
    }

    echo '<br>';

    for ($i=15; $i >= 0 ; $i=$i-3) { 
        echo $i.',';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';


    //#2 WHILE
    //Perulangan Naik
    $a= 1;
    while ($a <= 10) {
        echo $a.',';
        $a++;
    }

    echo '<br>';

    $a= 1;
    while ($a <= 10) {
        echo $a.',';
        $a=$a+2;
    }

    echo '<br>';
    echo '<br>';

    // Perulagan Menurun
    $a= 10;
    while ($a >= 1) {
        echo $a.',';
        $a--;
    }

    echo '<br>';

    $a= 10;
    while ($a >= 1) {
        echo $a.',';
        $a=$a-2;
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';


    //#3 Do While
    //Perulangan naik
    $a=1;
    do {
        echo $a.',';
        $a++;
    } while ($a <= 20);

    echo '<br>';

    $a=0;
    do {
        echo $a.',';
        $a=$a+4;
    } while ($a <= 20);

    echo '<br>';
    echo '<br>';

    // Perulangan Menurun
    $a=20;
    do {
        echo $a.',';
        $a--;
    } while ($a >= 1);

    echo '<br>';

    $a=20;
    do {
        echo $a.',';
        $a=$a-4;
    } while ($a >= 0);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    


    //VERSI STRING
    for ($i=1; $i <=3 ; $i++) { 
        echo ('Hann Project').'<br>';
    }

    echo '<br>';

    $a=1;
    while ($a <= 3) {
        echo ('HanzTzy').'<br>';
        $a++;
    }

    echo '<br>';

    $a=1;
    do {
        echo ('Hahaha').'<br>';
        $a++;
    } while ($a <= 3);

    echo '<br>';
?>