<?php ob_start();
require("backup.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <title>Pigga | Free Bootstrap 4.3.x template</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Pigga main styles -->
    <link rel="stylesheet" href="assets/css/pigga.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<?php //echo strtotime( "1 hour");   ?>
<?php //echo "<br>" . date("d.m.y H-i-s");  ?>
<!-- First Navigation -->
<nav class="navbar nav-first navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-primary" href="#home">Bizi Arayın : <span class="pl-2 text-muted">(0312) 336 6254</span></a>
            </li>
        </ul>
    </div>
</nav>
<!-- End of First Navigation -->
<!-- Second Navigation -->
<nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <img src="assets/imgs/navbar-brand.svg" style="width: 55px; height: 55px;" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Hizmetlerimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rezervasyon.php">Rezervasyon</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['kullanici'])){?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="btn-group" style="margin-bottom: 5px;">
                            <button type="button" style="color: #bc8c4c;" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $getUsername;?>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #bc8c4c;">
                                <li><a class="dropdown-item" href="gecmisRezervasyon.php" style="color:#ffffff; background-color: #bc8c4c;">İşlemler</a></li>
                            </ul>
                        </div>
                        <span style="font-size: x-large; margin-left: 5px;">|</span>

                    </li>
                    <li class="nav-item" style="margin-left: 10px;">
                        <a href="cikisYap.php" class="btn btn-primary btn-sm">Çıkış Yap</a>
                    </li>
                </ul>
            <?php }else{?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="girisyap.php" class="btn btn-primary btn-sm">Giriş Yap</a>
                    </li>
                    <li class="nav-item" style="margin-left: 10px;">
                        <a href="kayitol.php" class="btn btn-primary btn-sm">Kayıt Ol</a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<!-- End Of Second Navigation -->
<!-- Page Header -->
<header class="header">
    <div class="overlay">
        <img src="assets/imgs/logo.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">

        <h1 class="title">İşlemler</h1>
        <a class="btn btn-primary mt-3" href="rezervasyon.php">Rezervasyon Yap</a>
    </div>
</header>
<!-- End Of Page Header -->
<!-- About Section -->

<!-- End OF About Section -->

<!-- Service Section -->
<section id="service" class="pattern-style-4 has-overlay">
    <div class="container raise-2">
        <h3 class="section-title text-center" style="text-align: left;">Geçmiş Rezervasyonlar</h3>
        <section id="book-table" class="bg-white">
            <div class="container">


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">İsim</th>
                        <th scope="col">Soyisim</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Rez Yapan</th>
                        <th scope="col">İptal Et</th>
                    </tr>
                    </thead>

                    <?php
                        $rezKontrol = $connect->prepare("SELECT * FROM rezervasyon WHERE rezYapan = ?");
                        $rezKontrol->execute(array($getCurrentID));
                        if ($rezKontrol->rowCount()<1){
                            echo '<div class="alert alert-danger" style="width: 100%;" role="alert">
                                           Herhangi bir geçmiş rezervasyonunuz bulunmamaktadır!
                                        </div>';
                        }else{
                    $rezCek = $connect->prepare("SELECT * FROM rezervasyon WHERE rezYapan = ? ORDER BY rezSaati DESC LIMIT 5 ");
                    $rezCek->execute(array($getCurrentID));
                    $rezKayit = $rezCek->fetchAll(PDO::FETCH_ASSOC);
                    if ($rezCek->rowCount()>0){
                        foreach ($rezKayit as $item) {?>
                            <tbody>
                            <?php
                            if ($item['rezSaati'] < date("Y-m-d H:i:s", time())){?>
                                <tr class="table-danger">
                                    <td><?php echo $item['isim']; ?></td>
                                    <td><?php echo $item['soyad']; ?></td>
                                    <td><?php echo $item['rezSaati']; ?></td>
                                    <td><?php echo $item['rezYapan']; ?></td>
                                    <td></td>
                                </tr>
                                <?php
                            } else{?>
                                <tr class="table-success">
                                    <td><?php echo $item['isim']; ?></td>
                                    <td><?php echo $item['soyad']; ?></td>
                                    <td><?php echo $item['rezSaati']; ?></td>
                                    <td><?php echo $item['rezYapan']; ?></td>
                                    <td><button class="btn-danger btn-sm"><a class="text-light" href="gecmisRezervasyon.php?rezIptalId=<?php echo $item['id']?>">İptal Et</a></button></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                    }
                        }

                            if (!empty($_GET['rezIptalId'])){
                                $getSilrez = $_GET['rezIptalId'];
                                $rezSil = $connect->prepare("DELETE FROM rezervasyon WHERE id = ?");
                                $rezSil->execute(array($getSilrez));
                                if ($rezSil){
                                    echo '<div class="alert alert-success" role="alert">
                                                    Rezervasyonunuz İptal edilmiştir!
                                           </div>';
                                }else{
                                    echo '<div class="alert alert-danger" role="alert">
                                                 Hata! Rezervasyonunuz iptal edilemedi!
                                           </div>';
                                }
                            }
                        }
                    ?>
                </table>
                <hr>
                <div class="row align-items-center">
                        <div class="alert alert-warning m-3" style="width: 100%;" role="alert">
                            Uyarı! Yeşil olan satırlar <u>aktif</u> rezervasyonlarınızı, Kırmızı olan satırlar <u>geçmiş</u> rezervasyonlarınızı gösterir!
                        </div>
                </div>
            </div>
        </section>
        <!-- End OF Book Table Section -->
    </div>
</section>
<!-- End of Featured Food Section -->

<!-- Menu Section -->

<!-- Prefooter Section  -->

<div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">
            <div class="col-md-3 text-md-left mb-3 mb-md-0">
                <a href="index.php"><img src="assets/imgs/navbar-brand.svg" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0"></a>
            </div>
            <div class="col-md-9 text-md-right">
                <a href="index.php" class="px-3"><small class="font-weight-bold">Anasayfa</small></a>
                <a href="#about" class="px-3"><small class="font-weight-bold">Hakkımızda</small></a>
                <a href="#service" class="px-3"><small class="font-weight-bold">Hizmetlerimiz</small></a>

            </div>
        </div>
    </div>
</div>

<!-- End of PreFooter Section -->

<!-- Page Footer -->
<footer class="border border-dark border-left-0 border-right-0 border-bottom-0 p-4 bg-dark">
    <div class="container">
        <span style=" color: #bc8c4c;"><b>İletişim No: </b> (0312) 336 6254</span>
    </div>
</footer>
<!-- End of Page Footer -->

<!-- core  -->

<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Pigga js -->
<script src="assets/js/pigga.js"></script>

</body>
</html>
<?php $connect = null;
ob_end_flush(); ?>
