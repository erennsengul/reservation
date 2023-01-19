<?php include "backup.php";

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
</head>
<body>

<!-- Page Header -->
<header class="header header-mini">
    <div class="header-title">Kayıt Ol</div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="girisyap.php">Giriş Yap</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kayıt Ol</li><br><br>


        </ol>
    </nav>

</header> <!-- End Of Page Header -->

<!-- main content -->
<div class="container" align="center"><br>
    <form method="post">
        <div class="form-group">
            <input style="width: 200px; display: inline-block" type="text" name="ad" class="form-control" id="exampleFormControlInput1" placeholder="Adınız" required>
            <input style="width: 200px; display: inline-block" type="text" name="soyad" class="form-control" id="exampleFormControlInput1" placeholder="Soyadınız" required>
        </div>
        <div class="form-group">
            <input style="width: 405px;" name="telefon" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Telefon" required >
        </div>
        <div class="form-group">
            <input style="width: 405px;" name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input style="width: 405px;" name="sifre" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Şifre" required>
            <div class="alert alert-warning small" role="alert" style="width: 350px; margin: 10px;"><?php echo " Şifrenizi;
                Uzunluğu 8-20 karakter olacak şekilde oluşturunuz. <br>";
            ?></div>
        </div>
        <div class="form-group">
            <input style="width: 300px; background-color: #dfc8a9; text-align: center; border: 1px solid black; border-radius: 3px;" type="submit" name="submit" id="exampleFormControlInput1">
        </div>
    </form>
    <div>
</div>

    <?php

        if ($_POST){
            $getAd = filter($_POST['ad']);
            $getSoyad = filter($_POST['soyad']);
                if(strlen(filter($_POST['telefon']))>10 and strlen(filter($_POST['telefon']))<12){
                    $getTelefon = filter($_POST['telefon']);
                }else{
                    echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                           Telefon numarası 11 karakterli olmalidir!
                                        </div>';
                }
            $getEmail = filter($_POST['email']);

            if(strlen(filter($_POST['sifre']))>7 and strlen(filter($_POST['sifre']))<21) {
                $getSifre = md5(filter($_POST['sifre']));
            }else{
                echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                            Girilen Şifre Gereksinimleri karşılamıyor!
                                        </div>';
            }

                if (!empty($getAd) and !empty($getSoyad) and !empty($getTelefon) and !empty($getEmail) and !empty($getSifre)){

                    $telSorgu = $connect->prepare("SELECT telefon FROM uyeler WHERE telefon=?");
                    $telSorgu->execute(array($getTelefon));
                    $mailSorgu = $connect->prepare("SELECT * FROM uyeler WHERE email=?");
                    $mailSorgu->execute(array($getEmail));
                    if ($telSorgu->rowCount()==0){
                            if ($mailSorgu->rowCount()==0){
                                $kayitEkle = $connect->prepare("INSERT INTO uyeler(isim,soyisim,telefon,email,sifre) VALUES (?,?,?,?,?)");
                                $kayitEkle->execute(array($getAd,$getSoyad,$getTelefon,$getEmail,$getSifre));
                                $row = $kayitEkle->fetchAll(PDO::FETCH_ASSOC);
                                if ($kayitEkle->rowCount()>0){
                                    echo '<div class="alert alert-success" style="width: 350px;" role="alert">
                                            Kayıt Olma işlemi Başarılı! <a href="girisyap.php" class="text-dark">Giriş Yapmak için Tıklayınız!</a>
                                        </div>';
                                }else{
                                    echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                            Hata! Lütfen tekrar deneyiniz!
                                        </div>';
                                }
                            }else{
                                 echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                            Girilen Email zaten kayıtlı!
                                        </div>';
                                    }
                            }else{ //telSorgu if kapanisi
                        echo '<div class="alert alert-danger" style="width: 350px;" role="alert">
                                            Girilen Telefon numarası zaten kayıtlı!
                                        </div>';
                    }
                } // emptylerle kontrol satiri if kapanisi
        } //en bastaki POST kapanis



    ?>


<!-- Page Footer -->

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

</body>
</html>
<?php } $connect = null; ?>