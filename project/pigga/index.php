<?php require("backup.php"); ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
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
            <a href="index.php">
            <img src="assets/imgs/navbar-brand.svg" style="width: 55px; height: 55px;" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
            </a>
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
            <h1 class="subtitle">Restoranımıza Hoşgeldiniz</h1>
            <h1 class="title">Taze &amp; Lezzetli</h1>
            <a class="btn btn-primary mt-3" href="rezervasyon.php">Rezervasyon Yap</a>
        </div>      
    </header>
    <!-- End Of Page Header --> 
    <!-- About Section -->
    <section id="about">
        <div class="container">

            <?php
                    if(isset($_GET['rezOk'])){
                        $rezOkMu = $_GET['rezOk'];
                        if (!empty($rezOkMu)){
                            echo '<div class="alert alert-success" style="text-align: center;" role="alert">
                                            Sayın '. $getUsername . ', Rezervasyonunuz alındı!
                                        </div>';
                        }
                    }
            ?>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">Açılış Saatleri</h6>
                    <h3 class="section-title">Çalışma Saatleri</h3>
                    <p class="mb-1 font-weight-bold">Pazartesi - Perşembe : <span class="font-weight-normal pl-2 text-muted">9:00  - 22:00 </span></p>
                    <p class="mb-1 font-weight-bold">Cuma - Cumartesi : <span class="font-weight-normal pl-2 text-muted">9:00  - 22.00</span></p>
                    <p class="mb-1 font-weight-bold">Cumartesi - Pazar : <span class="font-weight-normal pl-2 text-muted">9:00 - 22:00</span></p>

                    <a href="rezervasyon.php" class="btn btn-primary btn-sm w-md mt-4">Rezervasyon Yap</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-1.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-2.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">“Kültürümüz Yaşadığı Sürece Yaşarız”</h6>
                    <h3 class="section-title">Mutfak Yolculuğumuz</h3>
                    <p>Bizim bu restoranı oluşturmaktaki temel amacımız, bölümümüzün kuruluş felsefesi doğrultusunda Türk mutfak kültürünü korumak, kayıt altına almak, tanıtmak ve dokusunu bozmadan yenilikçi bir bakış açısıyla misafirlerimize taşımak yolunda bir adım daha atmaktı. Bu amaç doğrultusunda kadromuz ile birlikte yola çıktık ve kültürümüzü yansıtan yemeklerimizle geri döndük.</p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-3.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-4.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h6 class="section-subtitle text-center">Öne Çıkan Yemekler</h6>
            <h3 class="section-title mb-6 pb-3 text-center">Özel Yemekler</h3>
            <div class="row">
                <?php

                $yemekler = $connect->prepare("SELECT * FROM yemekler");
                $yemekler->execute();
                $kayit = $yemekler->fetchAll(PDO::FETCH_ASSOC);
                if ($yemekler->rowCount()>0){
                    foreach ($kayit as $item) {?>
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="admin/resim/<?php echo $item['yemekFoto']; ?>" alt="<?php echo $item['yemekAdi']; ?>">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left"><?php echo $item['yemekAdi']; ?></h5>
                                <p class="float-right text-primary"><?php echo $item['yemekFiyat']; ?>₺</p>
                            </div>
                            <div class="body">
                                <p><?php echo $item['yemekAciklama']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                        <?php
                    }
                        }
                        ?>
            </div>
        </div>
    </section>
    <!-- End of Featured Food Section -->

    <!-- Menu Section -->
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center">Yemekler</h6>
            <h3 class="section-title mb-6 text-center">Menü</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">
                    <div class="row text-left">
                        <?php

                            $altYemek = $connect->prepare("SELECT * FROM alt_yemekler");
                            $altYemek->execute();
                            $altKayit = $altYemek->fetchAll(PDO::FETCH_ASSOC);
                                if ($altYemek->rowCount()>0){
                                    foreach ($altKayit as $item) {?>
                                        <div class="col-md-6 my-4">
                                            <a  class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <?php echo $item['yemekAdi']; ?>
                                                        <!--<p class="mt-1 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                                    </div>
                                                    <h6 class="float-right text-primary"> <?php echo $item['yemekFiyat']; ?>₺</h6>
                                                </div>
                                            </a>
                                        </div>
                                            <?php
                                    }
                                }
                        ?>
                    </div>
                    <a href="rezervasyon.php" class="btn btn-primary mt-4">Rezervasyon Yap</a>
                </div>
            </div>                  
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
                    <a href="index.php"><img src="assets/imgs/navbar-brand.svg" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0"></a>
                </div>
                <div class="col-md-9 text-md-right">
                    <a href="index.php" style="text-decoration: none;" class="px-3"><small class="font-weight-bold">Anasayfa</small></a>
                    <a href="#about" style="text-decoration: none;" class="px-3"><small class="font-weight-bold">Hakkımızda</small></a>
                    <a href="#service" style="text-decoration: none;" class="px-3"><small class="font-weight-bold">Hizmetlerimiz</small></a>

                </div>
            </div>
        </div>
    </div>
    <!-- End of PreFooter Section -->

    <!-- Page Footer -->
    <footer class="border border-dark border-left-0 border-right-0 border-bottom-0 p-4 bg-dark">

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
<?php $connect = null; ?>