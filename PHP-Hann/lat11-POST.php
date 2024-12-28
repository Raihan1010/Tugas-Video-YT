<!-- MATERI : POST PHP -->


<!-- post digunakan utk mengirim data menggunakan form -->
<form action="lat01.php" method="post">    
    <!-- action = memanggil file lain / untuk tempat masuk setelah mengisi form-->
    Email :
    <input type="email" name="email">

    Password : 
    <input type="password" name="password">

    <input type="submit" name="kirim" value="Login">

</form>


<?php 

    if (isset($_POST['kirim'])) {       //Isset = sudah ditekan/diisi/ di klik
        $wadah1 = $_POST['email'];         //agar tidak error jika belum diisi apa2
        $wadah2 = $_POST['password'];

        echo $wadah1;
        echo '<br>';
        echo $wadah2;
    }

    
?>