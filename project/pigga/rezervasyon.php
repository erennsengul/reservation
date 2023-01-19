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
        <h1 class="title">Rezervasyon</h1>
        <a class="btn btn-primary mt-3" href="#book-table">Rezervasyon Yap</a>
    </div>
</header>
<!-- End Of Page Header -->
<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h6 class="section-subtitle">Açılış Saatleri</h6>
                <h3 class="section-title">Çalışma Saatleri</h3>
                <p class="mb-1 font-weight-bold">Pazartesi - Perşembe : <span class="font-weight-normal pl-2 text-muted">9:00  - 22:00 </span></p>
                <p class="mb-1 font-weight-bold">Cuma - Cumartesi : <span class="font-weight-normal pl-2 text-muted">9:00  - 22.00</span></p>
                <p class="mb-1 font-weight-bold">Cumartesi - Pazar : <span class="font-weight-normal pl-2 text-muted">9:00 - 22:00</span></p>
                <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Rezervasyon Yap</a>
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
        </div>
    </div>
</section>
<!-- End OF About Section -->

<!-- Service Section -->
<section id="service" class="pattern-style-4 has-overlay">
    <div class="container raise-2">
        <h3 class="section-title text-center">Rezervasyon</h3>
        <section id="book-table" class="bg-white">

            <div class="container">
                <div class="alert alert-danger" role="alert" id="rezUyari" style="display: none;">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> Lütfen bir masa seçiniz!
                </div>
                <div class="alert alert-danger" role="alert" id="workHour" style="display: none;">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> Lütfen çalışma saatleri arasında bir rezervasyon seçiniz (09:00 - 22:00)!
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-block" style="margin-bottom: 100px;">

                        <?php
                            if (!isset($_SESSION['kullanici'])){?>

                                         <div class="alert alert-danger" role="alert" style="width: 930px;  margin-left:20px; ;  align-content: center">
                                            Üyeliğiniz olmadan sitemizden rezervasyon yapamazsınız. Eğer üye olmadan rezervasyon yapmak istiyorsanız; Telefon numaramızdan yapabilirsiniz!
                                        </div>
                            <div class="alert alert-warning" role="alert" style="width: 930px;  margin-left:20px; ;  align-content: center">
                                İletişim No: (0312) 336 6254
                            </div>

                     <?php
                            }else{
                        $sayac= 1;
                        for ($satir=0;$satir<4;$satir++){?>
                        <table border="0" width="440">
                            <div>
                                <tr style="width: 10px; height: 60px; text-align: center;">
                                    <?php for ($sutun=1; $sutun<4;$sutun++){
                                        $getRezervations = $connect->prepare("SELECT * FROM rezervasyon WHERE masa = ?");
                                        $getRezervations->execute(array(
                                            $sayac,
                                        ));
                                        ?>
                                            <td style="padding: 5px; cursor:pointer;" id="masa<?php echo($sayac); ?>" onclick="clickFunc(this.id)"><i class="fas fa-utensils"></i> Masa - <?php echo $sayac; ?></td>
                                        <?php $sayac++;
                                    }
                                    }
                                ?>
                            </tr>
                            </div>
                      </table>


                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                        <symbol id="info-fill" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </symbol>
                        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <div class="col-md-6">
                        <form method="post" id="rezervasyonForm" style="margin-bottom: 50px;">
                            <div class="form-group">
                                <input style=" width: 49%;
                            height: calc(2.05rem + 2px);
    padding: 25px 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
" type="text" name="ad"  placeholder="Adınız" required>
                                <input style=" width: 50%;
                            height: calc(2.05rem + 2px);
    padding: 25px 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; type=" type="text" name="soyad"  placeholder="Soyadınız" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="telefon" placeholder="Telefon" required>
                            </div>
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" id="tarih" name="tarih" required>
                            </div>
                            <input type="hidden" class="form-control" id="masaInput" name="masa" placeholder="Masa" required><br>
                            <button type="submit" class="btn btn-primary btn-block">Rezervasyon Yap</button>
                        </form>
                        <?php
                        } //else kapanis


                        if (!empty($_POST["tarih"]) and !empty($_POST["masa"])){
                                if($_POST["tarih"] < date("Y-m-d H.i.s", time())){
                                    echo '<div class="alert alert-danger" style="width: 100%;" role="alert">
                                            Hata! Seçtiğiniz Tarih geçmiş bir tarih olamaz!
                                        </div>';
                                }else{
                                    $tarihMasaSorgu = $connect->prepare("SELECT * FROM rezervasyon WHERE rezSaati = ? and masa= ?");
                                    $tarihMasaSorgu->execute(array($_POST["tarih"], ($_POST["masa"])));
                                    if ($tarihMasaSorgu->rowCount()>0){
                                        echo '<div class="alert alert-danger" style="width: 100%;" role="alert">
                                            Hata! Seçtiğiniz Masa başkası tarafından <u>Rezerve</u> edilmiştir. Lütfen Başka bir masa seçiniz!
                                        </div>';
                                    }else{
                                        $getDate = filter($_POST["tarih"]);
                                        $startHour = "09:00";
                                        $endHour = "22:00";
                                        if ($getDate > $endHour or $getDate < $startHour){
                                            echo '<div class="alert alert-warning" style="width: 100%;" role="alert">
                                            Lütfen çalışma saatleri arasında bir rezervasyon seçiniz (09:00 - 22:00)!
                                        </div>';
                                        }else{
                                            $getMasa = filter($_POST['masa']);

                                            if ((!empty($_POST["ad"])) and (!empty($_POST["telefon"])) and (!empty($_POST["soyad"]))){
                                                $getAd = filter($_POST['ad']);
                                                $getSoyad = filter($_POST['soyad']);
                                                $getTelefon = filter($_POST['telefon']);

                                                $ekle =  $connect->prepare("INSERT INTO rezervasyon (isim,soyad,telefon,rezSaati,masa, rezYapan) VALUES (?,?,?,?,?,?)");
                                                $ekle->execute([$getAd,$getSoyad,$getTelefon,$getDate,$getMasa, $getCurrentID]);
                                                $Kayit = $ekle->fetch(PDO::FETCH_ASSOC);
                                                if(!$ekle->rowCount()>0) {
                                                    echo '<br><b>' . " Hata oluştu, Lütfen tekrar deneyiniz!" . '</b>';
                                                }
                                                header("Location: index.php?rezOk=tamam");
                                                die();
                                            }
                                        }
                                    }
                                }


                        }

                        ?>

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
<script>
    function clickFunc(id){
        document.getElementById(id).style.opacity = "0.5";
        document.getElementById("masaInput").value = id.split("masa")[1];
    }
    document.getElementById("rezervasyonForm").addEventListener("submit", function(e){
        if(document.getElementById("masaInput").value == ""){
            e.preventDefault();
            document.getElementById("rezUyari").style.display = "block";
        }

        let getDate = document.getElementById("tarih").value.split("T")[1];
        let startHour = "09:00";
        let endHour = "22:00";
        if(getDate > endHour || getDate < startHour){
            e.preventDefault();
            document.getElementById("workHour").style.display = "block";
        }
    });

    document.getElementById("tarih").addEventListener("change", function(e){
        let req = $.ajax({
            type: "GET",
            url: "api/checkRezervation.php",
            data: {
                "apiKey": "gAfsqPXUxo65Q3M7kWdRZFeinIvzyNlVJT",
                "date": this.value
            },
        });
        req.done(function(response, textStatus, jqXHR){
            let formattedRes = JSON.parse(JSON.stringify(response));
            formattedRes = JSON.parse(formattedRes);
            if(formattedRes.error == 0){
                let desks = [];
                if(formattedRes.desks != 0){
                    formattedRes.desks.forEach((el) => {
                       document.getElementById("masa" + el.masa).style.opacity = "0.5";
                       document.getElementById("masa" + el.masa).style.cursor = "none";
                       desks.push("masa" + el.masa);
                    });
                }
                if(desks.length < 1){
                    for(i = 1; i <= 12; i++){
                        document.getElementById("masa" + i).style.opacity = "1";
                        document.getElementById("masa" + i).style.cursor = "pointer";
                    }
                }else{
                    for(i = 1; i <= 12; i++){
                        if(desks.includes("masa" + i)) continue;
                        document.getElementById("masa" + i).style.opacity = "1";
                        document.getElementById("masa" + i).style.cursor = "pointer";
                    }
                }
            }
        });
        req.fail(function(jqXHR, textStatus, errorThrown){});
    });
</script>
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
