<!-- MATERI : SESSION PHP -->


<nav>
    <ul>
        <li><a href="?menu=ISI">ISI</a></li>
        <li><a href="?menu=HAPUS">HAPUS</a></li>
        <li><a href="?menu=DESTROY">DESTROY</a></li>
    </ul>
</nav>

<?php 
    //session digunakan utk menyimpan variabel yg akan tersimpan terus dalam browser

    session_start();

    var_dump($_SESSION);
    echo '<br>';

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;

        switch ($menu) {
            case 'ISI':
                IsiSession();
                break;

            case 'HAPUS':
                unset($_SESSION['user']);
                break;

            case 'DESTROY':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }

    

    function IsiSession(){
        $_SESSION['user'] = 'Yono';
        $_SESSION['name'] = 'Yanto';
        $_SESSION['alamat'] = 'Sidoarjo';
    }

?>