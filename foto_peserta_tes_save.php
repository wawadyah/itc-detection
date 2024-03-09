<?php
//Mengambil file koneksi
$id_peserta = $_POST['id_peserta'];
$foto = $_POST['foto'];
include 'admin/koneksi.php';
$sql = "insert peserta_foto_tes (id_peserta, foto_peserta) VALUES ('$id_peserta','$foto')";
$save = mysqli_query($koneksi, $sql);
echo json_encode($save);
?>
