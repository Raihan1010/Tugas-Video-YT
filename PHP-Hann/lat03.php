<?php 
    //MATERI : FUNCTION


    // Function = Wadah / Tempat menyimpan

    function belajar(){
        echo 'Saya belajar PHP';
    }
    
    belajar();  //memanggil isi function
    echo '<br>';
    belajar();  //Bisa dipanggil berulang

    echo '<br>';
    echo '<br>';


    // function utk operasi mtk #1
    function luaspersegi(){
        $p = 100;
        $l = 50;
        $luas = $p*$l;

        echo $luas;
    }
    luaspersegi();

    echo '<br>';
    echo '<br>';

    // #2 Versi lebih Dinamis
    function luaspersegi2($p= 8,$l =5){
        $luas = $p*$l;

        echo $luas;
    }
    luaspersegi2(200,50);

    echo '<br>';
    echo '<br>';


    
    // Return(Berfungsi utk menampilkan hasil)  #1
    function output(){
        return "Belajar function";
    }
    echo output(); //Return => echo

    echo '<br>';
    echo '<br>';

    // Return #2
    function luaspersegi3($p= 8,$l =5){
        $luas = $p*$l;

        return $luas;
    }
    echo luaspersegi3(200,50) / 5; //Bisa ditambah lagi dgn operasi MTK
?>