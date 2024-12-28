<!-- MATERI : COOKIE PHP -->


<?php 
    //cookie digunakan utk mengetahui user yg membuka web

    $cookie_name = 'user'; //nama cookie
    $cookie_value = 'Yoni'; //nama isi / value

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'Yanto'; //merubah isi dari cookie

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name]; //menampilkan 

    setcookie("name", "", time() -7200);  //menghapus cookie menggunakan expired

    echo '<br>';

    var_dump($_COOKIE); 

?>