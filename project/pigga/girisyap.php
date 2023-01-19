<?php require 'backup.php';

if (isset($_SESSION['kullanici'])){
    header("Location: index.php");
    exit();
}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <title>Pigga | Components</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Pigga main styles -->
    <link rel="stylesheet" href="assets/css/pigga.css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- FONTAWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- Page Header -->
<header class="header header-mini">
    <div class="header-title">Giriş Yap</div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="color: #bc8c4c; text-decoration: none;" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giriş Yap</li>
            <li class="breadcrumb-item"><a style="color: #bc8c4c; text-decoration: none;" href="kayitol.php">Kayıt Ol</a></li>
        </ol
    </nav>

</header> <!-- End Of Page Header -->

<!-- main content -->
<br>
<div class="container" align="center">
    <form action="girisyap.php" method="post">
        <div class="form-group">
            <input style="width: 300px;" type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input style="width: 300px;" name="sifre" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Şifre" required>
        </div>
        <div class="form-group">
            <input style="width: 300px; background-color: #dfc8a9; text-align: center; border: 1px solid black; border-radius: 3px;" type="submit"  value="Giriş Yap" id="exampleFormControlInput1">
        </div>
        <div>
            Sende Üyemiz olmak istiyorsan, <a href="kayitol.php" style="color: #6c757d;"><b>Kayıt Ol!</b></a>
        </div><br>
    </form>
<?php

if ($_POST) {

    if (!empty($_POST['email'] and !empty($_POST['sifre']))) {
        $emailSina = $connect->prepare("SELECT * FROM uyeler WHERE email = ?");
        $emailSina->execute(array($_POST['email']));
        if(!$emailSina->rowCount()>0){
            echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                           Böyle bir email kayıtlı değil!
                                        </div>';
        }else{
            $getEmail = filter($_POST['email']);
            $getSifre = md5(filter($_POST['sifre']));

            if (empty($_POST['email']) or empty($_POST['sifre'])) {
                echo "Boş alanları doldurunuz!";
            } else {
                $Sorgu = $connect->prepare("SELECT * FROM uyeler WHERE email = ? and sifre = ?");
                $Sorgu->execute(array($getEmail, $getSifre));
                $KayitSayisi = $Sorgu->rowCount();
                $Kayit = $Sorgu->fetch(PDO::FETCH_ASSOC);
//  is_array($Kayit) yapmamın sebebi verdiği sorunun gitmesi için
                if (is_array($Kayit) and $getEmail == $Kayit['email'] and $getSifre == $Kayit['sifre']) {
                    $sorgu = $connect->prepare("SELECT ad,soyad FROM uyeler");
                    $sorgu->execute();
                    $_SESSION['kullanici'] = $getEmail . "&" . $getSifre;
                    header("Location: index.php");
                } else {
                    echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                            Email veya Şifre Hatalı!
                                        </div>';
                }
            }
        }
        }

    }
?>
</div>

<br>
<!-- Page Footer -->
<!-- End of Page Footer -->

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

</body>
</html>
<?php } ?>