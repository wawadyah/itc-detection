<?php
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION["status"] != "register") {
	header("location:index.php");
}

//Biodata
$id_peserta = $_SESSION["id_peserta"];
$nama = $_SESSION["nama"];
$umur = $_SESSION["umur"];
$tanggal_lahir = $_SESSION["tanggal_lahir"];
$asal_univ = $_SESSION["asal_univ"];
$email = $_SESSION["email"];
$nomor_telepon = $_SESSION["nomor_telepon"];
$browser = $_SESSION["browser"];
$ip = $_SESSION["ip"];

$lat1_1 = $_SESSION["lat1_1"];
$tes1_1 = $_SESSION["tes1_1"];
$tes1_2 = $_SESSION["tes1_2"];
$tes1_3 = $_SESSION["tes1_3"];
$tes1_4 = $_SESSION["tes1_4"];
$tes1_5 = $_SESSION["tes1_5"];
$tes1_6 = $_SESSION["tes1_6"];
$tes1_7 = $_SESSION["tes1_7"];
$tes1_8 = $_SESSION["tes1_8"];
$tes1_9 = $_SESSION["tes1_9"];
$tes1_10 = $_SESSION["tes1_10"];
$tes1_11 = $_SESSION["tes1_11"];
$tes1_12 = $_SESSION["tes1_12"];
$tes1_13 = $_SESSION["tes1_13"];
$tes1_14 = $_SESSION["tes1_14"];
$tes1_15 = $_SESSION["tes1_15"];
$tes1_16 = $_SESSION["tes1_16"];
$tes1_17 = $_SESSION["tes1_17"];
$tes1_18 = $_SESSION["tes1_18"];
$tes1_19 = $_SESSION["tes1_19"];
$tes1_20 = $_SESSION["tes1_20"];

$lat2_1 = $_SESSION["lat2_1"];
$tes2_1 = $_SESSION["tes2_1"];
$tes2_2 = $_SESSION["tes2_2"];
$tes2_3 = $_SESSION["tes2_3"];
$tes2_4 = $_SESSION["tes2_4"];
$tes2_5 = $_SESSION["tes2_5"];
$tes2_6 = $_SESSION["tes2_6"];
$tes2_7 = $_SESSION["tes2_7"];
$tes2_8 = $_SESSION["tes2_8"];
$tes2_9 = $_SESSION["tes2_9"];
$tes2_10 = $_SESSION["tes2_10"];
$tes2_11 = $_SESSION["tes2_11"];
$tes2_12 = $_SESSION["tes2_12"];
$tes2_13 = $_SESSION["tes2_13"];
$tes2_14 = $_SESSION["tes2_14"];
$tes2_15 = $_SESSION["tes2_15"];
$tes2_16 = $_SESSION["tes2_16"];
$tes2_17 = $_SESSION["tes2_17"];
$tes2_18 = $_SESSION["tes2_18"];
$tes2_19 = $_SESSION["tes2_19"];
$tes2_20 = $_SESSION["tes2_20"];

$lat3_1 = $_SESSION["lat3_1"];
$tes3_1 = $_SESSION["tes3_1"];
$tes3_2 = $_SESSION["tes3_2"];
$tes3_3 = $_SESSION["tes3_3"];
$tes3_4 = $_SESSION["tes3_4"];
$tes3_5 = $_SESSION["tes3_5"];
$tes3_6 = $_SESSION["tes3_6"];
$tes3_7 = $_SESSION["tes3_7"];
$tes3_8 = $_SESSION["tes3_8"];
$tes3_9 = $_SESSION["tes3_9"];
$tes3_10 = $_SESSION["tes3_10"];
$tes3_11 = $_SESSION["tes3_11"];
$tes3_12 = $_SESSION["tes3_12"];
$tes3_13 = $_SESSION["tes3_13"];
$tes3_14 = $_SESSION["tes3_14"];
$tes3_15 = $_SESSION["tes3_15"];
$tes3_16 = $_SESSION["tes3_16"];
$tes3_17 = $_SESSION["tes3_17"];
$tes3_18 = $_SESSION["tes3_18"];
$tes3_19 = $_SESSION["tes3_19"];
$tes3_20 = $_SESSION["tes3_20"];

$lat4_1 = $_SESSION["lat4_1"];
$tes4_1 = $_SESSION["tes4_1"];
$tes4_2 = $_SESSION["tes4_2"];
$tes4_3 = $_SESSION["tes4_3"];
$tes4_4 = $_SESSION["tes4_4"];
$tes4_5 = $_SESSION["tes4_5"];
$tes4_6 = $_SESSION["tes4_6"];
$tes4_7 = $_SESSION["tes4_7"];
$tes4_8 = $_SESSION["tes4_8"];
$tes4_9 = $_SESSION["tes4_9"];
$tes4_10 = $_SESSION["tes4_10"];
$tes4_11 = $_SESSION["tes4_11"];
$tes4_12 = $_SESSION["tes4_12"];
$tes4_13 = $_SESSION["tes4_13"];
$tes4_14 = $_SESSION["tes4_14"];
$tes4_15 = $_SESSION["tes4_15"];
$tes4_16 = $_SESSION["tes4_16"];

$lat5_1 = $_SESSION["lat5_1"];
$tes5_1 = $_SESSION["tes5_1"];
$tes5_2 = $_SESSION["tes5_2"];
$tes5_3 = $_SESSION["tes5_3"];
$tes5_4 = $_SESSION["tes5_4"];
$tes5_5 = $_SESSION["tes5_5"];
$tes5_6 = $_SESSION["tes5_6"];
$tes5_7 = $_SESSION["tes5_7"];
$tes5_8 = $_SESSION["tes5_8"];
$tes5_9 = $_SESSION["tes5_9"];
$tes5_10 = $_SESSION["tes5_10"];
$tes5_11 = $_SESSION["tes5_11"];
$tes5_12 = $_SESSION["tes5_12"];
$tes5_13 = $_SESSION["tes5_13"];
$tes5_14 = $_SESSION["tes5_14"];
$tes5_15 = $_SESSION["tes5_15"];
$tes5_16 = $_SESSION["tes5_16"];
$tes5_17 = $_SESSION["tes5_17"];
$tes5_18 = $_SESSION["tes5_18"];
$tes5_19 = $_SESSION["tes5_19"];
$tes5_20 = $_SESSION["tes5_20"];

$lat6_1 = $_SESSION["lat6_1"];
$tes6_1 = $_SESSION["tes6_1"];
$tes6_2 = $_SESSION["tes6_2"];
$tes6_3 = $_SESSION["tes6_3"];
$tes6_4 = $_SESSION["tes6_4"];
$tes6_5 = $_SESSION["tes6_5"];
$tes6_6 = $_SESSION["tes6_6"];
$tes6_7 = $_SESSION["tes6_7"];
$tes6_8 = $_SESSION["tes6_8"];
$tes6_9 = $_SESSION["tes6_9"];
$tes6_10 = $_SESSION["tes6_10"];
$tes6_11 = $_SESSION["tes6_11"];
$tes6_12 = $_SESSION["tes6_12"];
$tes6_13 = $_SESSION["tes6_13"];
$tes6_14 = $_SESSION["tes6_14"];
$tes6_15 = $_SESSION["tes6_15"];
$tes6_16 = $_SESSION["tes6_16"];
$tes6_17 = $_SESSION["tes6_17"];
$tes6_18 = $_SESSION["tes6_18"];
$tes6_19 = $_SESSION["tes6_19"];
$tes6_20 = $_SESSION["tes6_20"];

$lat7_1 = $_SESSION["lat7_1"];
$lat7_2 = $_SESSION["lat7_2"];
$lat7_3 = $_SESSION["lat7_3"];
$tes7_1 = $_SESSION["tes7_1"];
$tes7_2 = $_SESSION["tes7_2"];
$tes7_3 = $_SESSION["tes7_3"];
$tes7_4 = $_SESSION["tes7_4"];
$tes7_5 = $_SESSION["tes7_5"];
$tes7_6 = $_SESSION["tes7_6"];
$tes7_7 = $_SESSION["tes7_7"];
$tes7_8 = $_SESSION["tes7_8"];
$tes7_9 = $_SESSION["tes7_9"];
$tes7_10 = $_SESSION["tes7_10"];
$tes7_11 = $_SESSION["tes7_11"];
$tes7_12 = $_SESSION["tes7_12"];
$tes7_13 = $_SESSION["tes7_13"];
$tes7_14 = $_SESSION["tes7_14"];
$tes7_15 = $_SESSION["tes7_15"];
$tes7_16 = $_SESSION["tes7_16"];
$tes7_17 = $_SESSION["tes7_17"];
$tes7_18 = $_SESSION["tes7_18"];
$tes7_19 = $_SESSION["tes7_19"];
$tes7_20 = $_SESSION["tes7_20"];

$lat8_1 = $_SESSION["lat8_1"];
$lat8_2 = $_SESSION["lat8_2"];
$lat8_3 = $_SESSION["lat8_3"];
$lat8_4 = $_SESSION["lat8_4"];
$tes8_1 = $_SESSION["tes8_1"];
$tes8_2 = $_SESSION["tes8_2"];
$tes8_3 = $_SESSION["tes8_3"];
$tes8_4 = $_SESSION["tes8_4"];
$tes8_5 = $_SESSION["tes8_5"];
$tes8_6 = $_SESSION["tes8_6"];
$tes8_7 = $_SESSION["tes8_7"];
$tes8_8 = $_SESSION["tes8_8"];
$tes8_9 = $_SESSION["tes8_9"];
$tes8_10 = $_SESSION["tes8_10"];
$tes8_11 = $_SESSION["tes8_11"];
$tes8_12 = $_SESSION["tes8_12"];

$lat9_1 = $_SESSION["lat9_1"];
$tes9_1 = $_SESSION["tes9_1"];
$tes9_2 = $_SESSION["tes9_2"];
$tes9_3 = $_SESSION["tes9_3"];
$tes9_4 = $_SESSION["tes9_4"];
$tes9_5 = $_SESSION["tes9_5"];
$tes9_6 = $_SESSION["tes9_6"];
$tes9_7 = $_SESSION["tes9_7"];
$tes9_8 = $_SESSION["tes9_8"];
$tes9_9 = $_SESSION["tes9_9"];
$tes9_10 = $_SESSION["tes9_10"];
$tes9_11 = $_SESSION["tes9_11"];
$tes9_12 = $_SESSION["tes9_12"];
$tes9_13 = $_SESSION["tes9_13"];
$tes9_14 = $_SESSION["tes9_14"];
$tes9_15 = $_SESSION["tes9_15"];
$tes9_16 = $_SESSION["tes9_16"];
$tes9_17 = $_SESSION["tes9_17"];
$tes9_18 = $_SESSION["tes9_18"];
$tes9_19 = $_SESSION["tes9_19"];
$tes9_20 = $_SESSION["tes9_20"];
