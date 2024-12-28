<!-- MATERI : UPLOAD FILE PHP -->


<form action="" method="post" enctype="multipart/form-data">

    Pilih File Gambar :
    <input type="file" name="Upload">
    <input type="submit" name="Kirim" value="Simpan">

</form>

<?php 

    if (isset($_POST['Kirim'])) {   //Bagian yg diperlukan
        
        $file = $_FILES['Upload'];

        // var_dump($_FILES['Upload']);

        foreach ($file as $key => $value) {
            echo $key.' = '.$value;
            echo '<br>';
        }

        echo '<br>';
        $nama = $_FILES['Upload']['name'];              //Bagian yg diperlukan
        $temporary = $_FILES['Upload']['tmp_name'];     //Bagian yg diperlukan


        echo $nama;
        echo '<br>';
        echo $temporary;


        move_uploaded_file($temporary,'images/'.$nama);  //Bagian yg diperlukan
                                                         //untuk memindahkan file gambar ke folder images

    }

?>