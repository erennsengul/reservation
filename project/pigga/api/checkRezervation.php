<?php
$apiKey = "gAfsqPXUxo65Q3M7kWdRZFeinIvzyNlVJT";
if(empty($_GET["apiKey"])){
    header("Location: ../index.php");
    die();
}elseif($apiKey != $_GET["apiKey"]){
    header("Location: ../index.php");
    die();
}elseif(empty($_GET["date"])){
    header("Content-type: json");
    echo(json_encode(array("error" => 1, "msg" => "Lütfen bir tarih seçiniz.")));
    die();
}

require("../backup.php");
$checkDesk = $connect->prepare("SELECT * FROM rezervasyon WHERE rezSaati = ?");
$checkDesk->execute(array($_GET["date"]));
$getVal = $checkDesk->fetchAll(PDO::FETCH_ASSOC);
if($checkDesk->rowCount() > 0){
    echo json_encode(array("error" => 0, "desks" => $getVal));
}else{
    echo json_encode(array("error" => 0, "desks" => 0));
}
$connect = null;
?>