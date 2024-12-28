<!-- MATERI : PERSIAPAN SEBELUM MASUK KEDALAM PEMBUATAN APK RESTORAN (MENYIAPKAN SEMUA JENIS FUNCTION   ) -->


<?php 

    class DB{

        private $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "hannrestaurant";
        private $koneksi;

        public function __construct(){
            $this->koneksi = $this->KoneksiDB();
        }

        public function KoneksiDB (){
            $koneksi = mysqli_connect($this->host,$this->user,$this->password,$this->database);
            return $koneksi;
        }

        public function getALL($sql){           //function yg menampilkan semua data #1
            $result = mysqli_query($this->koneksi, $sql);       
            while ($row = mysqli_fetch_assoc($result)) {
                $data[]= $row;
            }
            if(!empty($data)){
                return $data;
            }            
        }

        public function getITEM($sql){          //function yg menampilkan satu data #2
            $result = mysqli_query($this->koneksi, $sql);   
            $row = mysqli_fetch_assoc($result);
            return $row;
        }

        public function rowCOUNT($sql){         //function untuk menghitung banyak baris dalam data #3
            $result = mysqli_query($this->koneksi, $sql);
            $count = mysqli_num_rows($result);

            return $count;
        }

        public function runSQL($sql){           //function untuk menambah & menghapus data #4
            $result = mysqli_query($this->koneksi, $sql);
        }

        public function Pesan($text =""){       //functionn untuk menampilkan pesan #5
            echo $text;
        }
    }


    
    // $db = new DB;
    
    // #1
    // $row = $db->getALL("SELECT * FROM tblkategori");

    // foreach ($row as $key) {              
    //     echo $key['kategori'].'<br>';  
    // }

    // echo '<br>'.'<br>';


    // #2
    // $row = $db->getITEM("SELECT * FROM tblkategori WHERE idkategori=1");

    // echo $row['kategori'];

    // echo '<br>'.'<br>'.'<br>';


    // #3
    // $count = $db -> rowCOUNT("SELECT * FROM tblkategori");

    // echo $count;

    // echo '<br>'.'<br>'.'<br>';

    // #4
    // // $db -> runSQL("INSERT INTO tblkategori  VALUES ('','Muani') ");    //menambah
    // $db -> runSQL("DELETE FROM tblkategori WHERE idkategori = 20");    //menghapus


    // #5
    // $db -> pesan("HanzTzy");



?>