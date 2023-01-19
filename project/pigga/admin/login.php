<?php
include '../backup.php';

if (isset($_SESSION['admin'])){
header("location:index.php");
exit();
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pigga-Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tekrar Hoşgeldiniz!</h1>
                                    </div>

                                    <form method="post" action="login.php" class="user" style="width: 500px; margin-left: 150px;">
                                        <div class="form-group">
                                            <input type="text" name="k_adi" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Kullanıcı Adı">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="sifre" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Şifre">
                                        </div>
                                        <hr class="border border-primary border-2 opacity-50">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Giriş Yap</button>
                                        <hr>
                                    </form>

                                        <?php
                                            if ($_POST){
                                                if (!empty($_POST['k_adi']) and !empty($_POST['sifre'])){
                                                    $getKadi = filter($_POST['k_adi']);
                                                    $getSifre = md5(filter($_POST['sifre']));
                                                        $sorgu = $connect->prepare("SELECT * FROM admin WHERE username=? and password=?");
                                                        $sorgu->execute(array($getKadi,$getSifre));
                                                        $kayit = $sorgu->fetch(PDO::FETCH_ASSOC);
                                                            if (is_array($kayit) and $kayit['username'] == $getKadi and $kayit['password']==$getSifre){
                                                                $_SESSION['admin'] = $getKadi;
                                                                header("location:index.php");
                                                                die();
                                                            }else{
                                                                echo "<div class='alert alert-danger' role='alert'>
                                                                        Kullanıcı adı Veya Şifre Yanlış!
                                                                    </div> ";
                                                            }
                                                }else{
                                                    echo "<div class='alert alert-danger' role='alert'>
                                                                      Boş bırakılan yerleri doldurunuz!
                                                                    </div> ";
                                                }
                                            }
                                        ?>
                                </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
}
$connect = null;
?>