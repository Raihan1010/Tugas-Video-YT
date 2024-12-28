<!-- Materi : OOP PHP (OBJECT ORIENTED PHP) -->


<?php 

    class DB {      //Class = wadah dari variabel / function
        
        public $host = "127.0.0.1";         //Variabel yg masuk dalam class disebut properti
        private $user = "root";
        private $password = "";
        private $database = "hannrestaurant";

        public function __construct(){     //construct : function yg otomatis dijalankan ketika sebuah object dibuat
            echo 'function construct';
        }

        public function SelectData(){       //Function yg masuk dalam class disebut method
            echo 'Select Data';
        }

        public function getUser(){       // agar bisa memanggil properti privat 
            echo $this->user;
            // return $this-user;
        }

        public function tampil(){
            $this -> SelectData();
        }

        public static function insertData(){     //Static : function yg bisa dijalankan tanpa harus membuat Object
            echo 'static function';
        }
    }

    DB::insertData();  //mamunculkan static
    echo '<br>';


    //Object (agar bisa menggunakan/menampilkan var/funct dalam class)
    $db = new DB;

    echo '<br>';

    $db -> SelectData();    #1
    echo '<br>';

    echo $db -> host;
    echo '<br>';

    $db -> getUser();
    // echo $db -> getUser();
    echo '<br>';

    $db -> tampil();        #2
    

?>