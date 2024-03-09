<?php
//Mengambil file
include 'admin/koneksi.php';
include 'plugin/browser.php';
include 'plugin/ip.php';
include 'session_kode_akses.php';


//Fungsi setelah proses submit form html
if (isset($_POST['submit'])) {
    $nama = addslashes($_POST['nama']);
    $umur = $_POST["umur"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $asal_univ = $_POST["asal_univ"];
    $email = $_POST["email"];
    $nomor_telepon = $_POST["nomor_telepon"];
    $foto_registrasi_peserta = $_POST["foto_registrasi_peserta"];
    $browser = $_POST["browser"];
    $ip = $_POST["ip"];

    //cek sudah ambil gambar atau belum
    if (empty($foto_registrasi_peserta)) {
        echo '<script language="javascript">';
        echo 'alert("Silahkan ambil foto terlebih dahulu.!");';
        echo 'window.location = "registrasi.php"';
        echo '</script>';
        return;
    }


    //Cek user terdaftar atau belum
    $sql_cek = mysqli_query($koneksi, "SELECT * FROM peserta WHERE email='" . $email . "'");
    $r_cek = mysqli_num_rows($sql_cek);
    $sql_cek2 = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nomor_telepon='" . $nomor_telepon . "'");
    $r_cek2 = mysqli_num_rows($sql_cek2);
    if ($r_cek > 0) {
        echo '<script language="javascript">';
        echo 'alert("Email anda sudah terdaftar, silahkan gunakan email lain!");';
        echo 'window.location = "registrasi.php"';
        echo '</script>';
    }
    if ($r_cek2 > 0) {
        echo '<script language="javascript">';
        echo 'alert("Nomor Telepon anda sudah terdaftar, silahkan gunakan Nomor Telepon lain!");';
        echo 'window.location = "registrasi.php"';
        echo '</script>';
    } else {
        //Jika belum terdaftar maka user ditambahkan dan auto login
        $sql = "INSERT INTO peserta ( nama, umur, tanggal_lahir, asal_univ, email, nomor_telepon, foto_registrasi_peserta, browser, ip)
              VALUES ('$nama','$umur','$tanggal_lahir','$asal_univ','$email','$nomor_telepon','$foto_registrasi_peserta', '$browser', '$ip')";

        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
        if ($query) {
            $email = $_POST["email"];
            $nomor_telepon = $_POST["nomor_telepon"];

            $sql = "select * from peserta where email='" . $email . "' and nomor_telepon='" . $nomor_telepon . "' limit 1";
            $hasil = mysqli_query($koneksi, $sql);
            $jumlah = mysqli_num_rows($hasil);


            if ($jumlah > 0) {
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["status"] = "register";
                $_SESSION["id_peserta"] = $row["id_peserta"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["umur"] = $row["umur"];
                $_SESSION["tanggal_lahir"] = $row["tanggal_lahir"];
                $_SESSION["asal_univ"] = $row["asal_univ"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["nomor_telepon"] = $row["nomor_telepon"];
                $_SESSION["browser"] = $row["browser"];
                $_SESSION["ip"] = $row["ip"];

                $_SESSION["lat1_1"] = $row["lat1_1"];
                $_SESSION["tes1_1"] = $row["tes1_1"];
                $_SESSION["tes1_2"] = $row["tes1_2"];
                $_SESSION["tes1_3"] = $row["tes1_3"];
                $_SESSION["tes1_4"] = $row["tes1_4"];
                $_SESSION["tes1_5"] = $row["tes1_5"];
                $_SESSION["tes1_6"] = $row["tes1_6"];
                $_SESSION["tes1_7"] = $row["tes1_7"];
                $_SESSION["tes1_8"] = $row["tes1_8"];
                $_SESSION["tes1_9"] = $row["tes1_9"];
                $_SESSION["tes1_10"] = $row["tes1_10"];
                $_SESSION["tes1_11"] = $row["tes1_11"];
                $_SESSION["tes1_12"] = $row["tes1_12"];
                $_SESSION["tes1_13"] = $row["tes1_13"];
                $_SESSION["tes1_14"] = $row["tes1_14"];
                $_SESSION["tes1_15"] = $row["tes1_15"];
                $_SESSION["tes1_16"] = $row["tes1_16"];
                $_SESSION["tes1_17"] = $row["tes1_17"];
                $_SESSION["tes1_18"] = $row["tes1_18"];
                $_SESSION["tes1_19"] = $row["tes1_19"];
                $_SESSION["tes1_20"] = $row["tes1_20"];

                $_SESSION["lat2_1"] = $row["lat2_1"];
                $_SESSION["tes2_1"] = $row["tes2_1"];
                $_SESSION["tes2_2"] = $row["tes2_2"];
                $_SESSION["tes2_3"] = $row["tes2_3"];
                $_SESSION["tes2_4"] = $row["tes2_4"];
                $_SESSION["tes2_5"] = $row["tes2_5"];
                $_SESSION["tes2_6"] = $row["tes2_6"];
                $_SESSION["tes2_7"] = $row["tes2_7"];
                $_SESSION["tes2_8"] = $row["tes2_8"];
                $_SESSION["tes2_9"] = $row["tes2_9"];
                $_SESSION["tes2_10"] = $row["tes2_10"];
                $_SESSION["tes2_11"] = $row["tes2_11"];
                $_SESSION["tes2_12"] = $row["tes2_12"];
                $_SESSION["tes2_13"] = $row["tes2_13"];
                $_SESSION["tes2_14"] = $row["tes2_14"];
                $_SESSION["tes2_15"] = $row["tes2_15"];
                $_SESSION["tes2_16"] = $row["tes2_16"];
                $_SESSION["tes2_17"] = $row["tes2_17"];
                $_SESSION["tes2_18"] = $row["tes2_18"];
                $_SESSION["tes2_19"] = $row["tes2_19"];
                $_SESSION["tes2_20"] = $row["tes2_20"];

                $_SESSION["lat3_1"] = $row["lat3_1"];
                $_SESSION["tes3_1"] = $row["tes3_1"];
                $_SESSION["tes3_2"] = $row["tes3_2"];
                $_SESSION["tes3_3"] = $row["tes3_3"];
                $_SESSION["tes3_4"] = $row["tes3_4"];
                $_SESSION["tes3_5"] = $row["tes3_5"];
                $_SESSION["tes3_6"] = $row["tes3_6"];
                $_SESSION["tes3_7"] = $row["tes3_7"];
                $_SESSION["tes3_8"] = $row["tes3_8"];
                $_SESSION["tes3_9"] = $row["tes3_9"];
                $_SESSION["tes3_10"] = $row["tes3_10"];
                $_SESSION["tes3_11"] = $row["tes3_11"];
                $_SESSION["tes3_12"] = $row["tes3_12"];
                $_SESSION["tes3_13"] = $row["tes3_13"];
                $_SESSION["tes3_14"] = $row["tes3_14"];
                $_SESSION["tes3_15"] = $row["tes3_15"];
                $_SESSION["tes3_16"] = $row["tes3_16"];
                $_SESSION["tes3_17"] = $row["tes3_17"];
                $_SESSION["tes3_18"] = $row["tes3_18"];
                $_SESSION["tes3_19"] = $row["tes3_19"];
                $_SESSION["tes3_20"] = $row["tes3_20"];

                $_SESSION["lat4_1"] = $row["lat4_1"];
                $_SESSION["tes4_1"] = $row["tes4_1"];
                $_SESSION["tes4_2"] = $row["tes4_2"];
                $_SESSION["tes4_3"] = $row["tes4_3"];
                $_SESSION["tes4_4"] = $row["tes4_4"];
                $_SESSION["tes4_5"] = $row["tes4_5"];
                $_SESSION["tes4_6"] = $row["tes4_6"];
                $_SESSION["tes4_7"] = $row["tes4_7"];
                $_SESSION["tes4_8"] = $row["tes4_8"];
                $_SESSION["tes4_9"] = $row["tes4_9"];
                $_SESSION["tes4_10"] = $row["tes4_10"];
                $_SESSION["tes4_11"] = $row["tes4_11"];
                $_SESSION["tes4_12"] = $row["tes4_12"];
                $_SESSION["tes4_13"] = $row["tes4_13"];
                $_SESSION["tes4_14"] = $row["tes4_14"];
                $_SESSION["tes4_15"] = $row["tes4_15"];
                $_SESSION["tes4_16"] = $row["tes4_16"];

                $_SESSION["lat5_1"] = $row["lat5_1"];
                $_SESSION["tes5_1"] = $row["tes5_1"];
                $_SESSION["tes5_2"] = $row["tes5_2"];
                $_SESSION["tes5_3"] = $row["tes5_3"];
                $_SESSION["tes5_4"] = $row["tes5_4"];
                $_SESSION["tes5_5"] = $row["tes5_5"];
                $_SESSION["tes5_6"] = $row["tes5_6"];
                $_SESSION["tes5_7"] = $row["tes5_7"];
                $_SESSION["tes5_8"] = $row["tes5_8"];
                $_SESSION["tes5_9"] = $row["tes5_9"];
                $_SESSION["tes5_10"] = $row["tes5_10"];
                $_SESSION["tes5_11"] = $row["tes5_11"];
                $_SESSION["tes5_12"] = $row["tes5_12"];
                $_SESSION["tes5_13"] = $row["tes5_13"];
                $_SESSION["tes5_14"] = $row["tes5_14"];
                $_SESSION["tes5_15"] = $row["tes5_15"];
                $_SESSION["tes5_16"] = $row["tes5_16"];
                $_SESSION["tes5_17"] = $row["tes5_17"];
                $_SESSION["tes5_18"] = $row["tes5_18"];
                $_SESSION["tes5_19"] = $row["tes5_19"];
                $_SESSION["tes5_20"] = $row["tes5_20"];

                $_SESSION["lat6_1"] = $row["lat6_1"];
                $_SESSION["tes6_1"] = $row["tes6_1"];
                $_SESSION["tes6_2"] = $row["tes6_2"];
                $_SESSION["tes6_3"] = $row["tes6_3"];
                $_SESSION["tes6_4"] = $row["tes6_4"];
                $_SESSION["tes6_5"] = $row["tes6_5"];
                $_SESSION["tes6_6"] = $row["tes6_6"];
                $_SESSION["tes6_7"] = $row["tes6_7"];
                $_SESSION["tes6_8"] = $row["tes6_8"];
                $_SESSION["tes6_9"] = $row["tes6_9"];
                $_SESSION["tes6_10"] = $row["tes6_10"];
                $_SESSION["tes6_11"] = $row["tes6_11"];
                $_SESSION["tes6_12"] = $row["tes6_12"];
                $_SESSION["tes6_13"] = $row["tes6_13"];
                $_SESSION["tes6_14"] = $row["tes6_14"];
                $_SESSION["tes6_15"] = $row["tes6_15"];
                $_SESSION["tes6_16"] = $row["tes6_16"];
                $_SESSION["tes6_17"] = $row["tes6_17"];
                $_SESSION["tes6_18"] = $row["tes6_18"];
                $_SESSION["tes6_19"] = $row["tes6_19"];
                $_SESSION["tes6_20"] = $row["tes6_20"];

                $_SESSION["lat7_1"] = $row["lat7_1"];
                $_SESSION["lat7_2"] = $row["lat7_2"];
                $_SESSION["lat7_3"] = $row["lat7_3"];
                $_SESSION["tes7_1"] = $row["tes7_1"];
                $_SESSION["tes7_2"] = $row["tes7_2"];
                $_SESSION["tes7_3"] = $row["tes7_3"];
                $_SESSION["tes7_4"] = $row["tes7_4"];
                $_SESSION["tes7_5"] = $row["tes7_5"];
                $_SESSION["tes7_6"] = $row["tes7_6"];
                $_SESSION["tes7_7"] = $row["tes7_7"];
                $_SESSION["tes7_8"] = $row["tes7_8"];
                $_SESSION["tes7_9"] = $row["tes7_9"];
                $_SESSION["tes7_10"] = $row["tes7_10"];
                $_SESSION["tes7_11"] = $row["tes7_11"];
                $_SESSION["tes7_12"] = $row["tes7_12"];
                $_SESSION["tes7_13"] = $row["tes7_13"];
                $_SESSION["tes7_14"] = $row["tes7_14"];
                $_SESSION["tes7_15"] = $row["tes7_15"];
                $_SESSION["tes7_16"] = $row["tes7_16"];
                $_SESSION["tes7_17"] = $row["tes7_17"];
                $_SESSION["tes7_18"] = $row["tes7_18"];
                $_SESSION["tes7_19"] = $row["tes7_19"];
                $_SESSION["tes7_20"] = $row["tes7_20"];

                $_SESSION["lat8_1"] = $row["lat8_1"];
                $_SESSION["lat8_2"] = $row["lat8_2"];
                $_SESSION["lat8_3"] = $row["lat8_3"];
                $_SESSION["lat8_4"] = $row["lat8_4"];
                $_SESSION["tes8_1"] = $row["tes8_1"];
                $_SESSION["tes8_2"] = $row["tes8_2"];
                $_SESSION["tes8_3"] = $row["tes8_3"];
                $_SESSION["tes8_4"] = $row["tes8_4"];
                $_SESSION["tes8_5"] = $row["tes8_5"];
                $_SESSION["tes8_6"] = $row["tes8_6"];
                $_SESSION["tes8_7"] = $row["tes8_7"];
                $_SESSION["tes8_8"] = $row["tes8_8"];
                $_SESSION["tes8_9"] = $row["tes8_9"];
                $_SESSION["tes8_10"] = $row["tes8_10"];
                $_SESSION["tes8_11"] = $row["tes8_11"];
                $_SESSION["tes8_12"] = $row["tes8_12"];

                $_SESSION["lat9_1"] = $row["lat9_1"];
                $_SESSION["tes9_1"] = $row["tes9_1"];
                $_SESSION["tes9_2"] = $row["tes9_2"];
                $_SESSION["tes9_3"] = $row["tes9_3"];
                $_SESSION["tes9_4"] = $row["tes9_4"];
                $_SESSION["tes9_5"] = $row["tes9_5"];
                $_SESSION["tes9_6"] = $row["tes9_6"];
                $_SESSION["tes9_7"] = $row["tes9_7"];
                $_SESSION["tes9_8"] = $row["tes9_8"];
                $_SESSION["tes9_9"] = $row["tes9_9"];
                $_SESSION["tes9_10"] = $row["tes9_10"];
                $_SESSION["tes9_11"] = $row["tes9_11"];
                $_SESSION["tes9_12"] = $row["tes9_12"];
                $_SESSION["tes9_13"] = $row["tes9_13"];
                $_SESSION["tes9_14"] = $row["tes9_14"];
                $_SESSION["tes9_15"] = $row["tes9_15"];
                $_SESSION["tes9_16"] = $row["tes9_16"];
                $_SESSION["tes9_17"] = $row["tes9_17"];
                $_SESSION["tes9_18"] = $row["tes9_18"];
                $_SESSION["tes9_19"] = $row["tes9_19"];
                $_SESSION["tes9_20"] = $row["tes9_20"];

                header("Location:pedoman-umum-tes.php");
            } else {
                echo '<script language="javascript">';
                echo 'alert("Registrasi gagal!");';
                echo 'window.location = "regsitrasi.php"';
                echo '</script>';
            }
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registrasi</title>
    <!-- CSS files -->
    <link href="admin/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <!-- Ajax for webcam -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="logo.png" rel="icon">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        #preview {
            height: 250;
            width: 350;
            border: 0px solid;
            background: #EEEEEF;
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="admin/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <form class="card card-md" action="" method="post" autocomplete="off" id="myform">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <a href="." class="navbar-brand navbar-brand-autodark">
                            <img src="logo.png" width="50" height="auto" alt="Tabler">
                        </a>
                    </div>
                    <h1 class="card-title text-center mb-2">Registrasi</h1>
                    <p class="text-secondary text-center">Silahkan isikan data dirimu untuk mengikuti tes!</p>
                    <div class="mb-3">
                        <label class="form-label required">Nama Lengkap</label>
                        <input type="text" id="myText" name="nama" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Nomor Telepon</label>
                        <input type="number" name="nomor_telepon" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Umur</label>
                        <input type="number" name="umur" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Asal Sekolah/Universitas/Instansi</label>
                        <input type="text" name="asal_univ" class="form-control" placeholder="...." autocomplete="off" required>
                    </div>
                    <div class="form-label-group">
                        <label class="form-label">Silahkan ambil foto terlebih dahulu</label>
                        <p class="text-secondary text-left">Jangan gunakan masker sementara dalam pengambilan gambar.</b> Pastikan wajah anda berada di tengah frame, dan klik Ambil Gambar.</p>
                        <div id="live_camera"></div>
                        <br><a class="btn btn-primary" onClick="capture_web_snapshot()">Ambil Gambar</a>
                        <input type="hidden" id="foto_registrasi_peserta" name="foto_registrasi_peserta" class="image-tag" required>
                        <hr />
                    </div>
                    <div class="form-label-group">
                        <div id="preview">Hasil gambarmu akan tertampil disini</div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" name="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-secondary mt-3">
                Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        Webcam.set({
            width: 350,
            height: 250,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#live_camera');

        function capture_web_snapshot() {
            Webcam.snap(function(site_url) {
                $(".image-tag").val(site_url);
                document.getElementById('preview').innerHTML = '<img src="' + site_url + '"/>';
            });
        }

        function myFunction() {
            var x = document.getElementById("myText").required;
            document.getElementById("demo").innerHTML = x;
        }
    </script>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="admin/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="admin/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>