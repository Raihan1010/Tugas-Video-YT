<?php 

    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restaurant</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">

            <div class="col-4 mx-auto mt-4">

                <div class="form-group">
                    <form action="" method="post">

                        <div>
                            <center><h3>LOGIN DULU LE</h3></center>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" required  class="form-control mt-2">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" required  class="form-control mt-2">
                        </div>

                        <div>
                            <input type="submit" name="login" value="LOGIN" class="btn btn-primary mb-2">
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</body>
</html>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']) ;

        $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password='$password' ";
        $count = $db->rowCOUNT($sql);

        if ($count == 0) {
            echo "<center><h3>Email atau Password Salah</h3></center>";
        } else {
            $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password='$password' ";
            $row = $db->getITEM($sql);

            $_SESSION['user'] = $row['email'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['iduser'] = $row['iduser'];

            header("location:index.php");
        }

    }

?>

