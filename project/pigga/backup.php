<?php
session_start(); ob_start();

try {
    $connect = new PDO("mysql:host=localhost;dbname=pigga;charset=UTF8", "root", "");
}catch (PDOException $Hata){
    echo "Bağlantı Hatası! " . $Hata->getMessage();
    die();
}

if(!empty($_SESSION["kullanici"])){
    $explodeSession = explode("&", $_SESSION["kullanici"]);
    $getUser = $connect->prepare("SELECT * FROM uyeler WHERE email = ? AND sifre = ?");
    $getUser->execute(array(
        $explodeSession[0],
        $explodeSession[1]
    ));
    if($getUser->rowCount() < 1){
        unset($_SESSION["kullanici"]);
        header("girisyap.php");
        die();
    }
    $getUser = $getUser->fetch(PDO::FETCH_ASSOC);
    $getUsername = $getUser["isim"] . " " . $getUser["soyisim"];
    $getEmail = $getUser["email"];
    $getCurrentID = $getUser["id"];
}

function filter($deger){
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki, ENT_QUOTES);
    return $uc;
}
function randomName(){
    return md5(uniqid(mt_rand())); //benzersiz isim olusturmak için
}
date_default_timezone_set("Europe/Istanbul");
$checkRezervation = $connect->prepare("SELECT * FROM rezervasyon WHERE rezSaati < ?");
$checkRezervation->execute(array(
   date("Y-m-d H-i-s", time())
));