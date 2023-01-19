<?php  include "../backup.php";


if (!isset($_SESSION['admin'])){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pigga Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- FONTAWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pigga</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            İşlemler
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>CRUD</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">İşlemler:</h6>
                    <a class="collapse-item" href="kayitlar.php">Kayıtlar</a>
                    <a class="collapse-item" href="ekle.php">Kayıt Ekle</a>
                    <a class="collapse-item" href="ekleAlt.php">Alt Kayıt Ekle</a>
                    <a class="collapse-item" href="altIslemler.php">Alt Kayıt İşlemleri</a>
                    <a class="collapse-item" href="sil.php">Kayıt Sil</a>
                    <a class="collapse-item" href="guncelle.php">Kayıt Güncelle</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="rezervasyon.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Rezervasyonlar</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="uyeler.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Üyeler</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->

        <div class="content my-5 p-lg-5">
            <label for="exampleInputEmail1"><h4>Yemek Sil</h4></label><hr>
            <form method="post" action="sil.php">
            <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Yemek Adı</th>
                        <th scope="col">Yemek Açıklaması</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    try {
                        $connect = new PDO("mysql:host=localhost;dbname=pigga;charset=UTF8", "root", "");

                    }catch (PDOException $error){
                        echo "Bağlantı Hatası! " . $error->getMessage();
                        die();
                    }

                    $sorgu = $connect->prepare("SELECT * FROM yemekler");
                    $sorgu->execute();
                    $Kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
                        if ($sorgu->rowCount()>0){
                                foreach ($Kayitlar as $item){ ?>
                                    <tr>
                                        <th style="vertical-align: middle"><input type="hidden" name="id" value="<?php echo $item['id']?>"><?php echo $item['id']?></th>
                                        <td style="vertical-align: middle"><?php echo $item['yemekAdi'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $item['yemekAciklama'] ?></td>
                                        <td><img src="resim/<?php echo($item['yemekFoto']); ?>" width="150px" height="100px"></td>
                                        <td style="vertical-align: middle"><?php echo $item['yemekFiyat'] ?></td>
                                        <td style="vertical-align: middle"><button type="submit" class="btn btn-danger"><a href="sil.php?id=<?php echo $item['id']; ?>" class="text-light">Sil</a></button></td>
                                    </tr>

                                <?php
                                }
                        }
?>
                    </tbody>
            </table>
            </form>
            <?php

                        if (!empty($_GET['silOk'])){
                            echo '<div class="alert alert-success" role="alert">
                                            Başarıyla Silindi!
                                         </div>';
                        }

                        if (!empty($_GET["id"])){
                            $getId = $_GET["id"];
                            $sil = $connect->prepare("DELETE FROM yemekler WHERE id=?");
                            $sil->execute(array($getId));
                                if ($sil){
                                    header("location: sil.php?silOk=tamam");
                                    die();
                                }else{
                                    echo '<div class="alert alert-success" role="alert">
                                                 Hata! Silme işlemi başarısız!
                                           </div>';
                                }
                        }

                    ?>


        </div>
    </div>



</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
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

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>