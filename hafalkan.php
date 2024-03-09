<?php
include 'admin/koneksi.php';
include 'session.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hafalkan</title>
    <!-- CSS files -->
    <link href="admin/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="admin/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <link href="logo.png" rel="icon">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="admin/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md sticky-top d-print-none">
            <div class="container-xxl">
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="#">
                        <!--<img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">--> DTC TES
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <?php
                                include 'admin/koneksi.php';
                                $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta = '$id_peserta' ORDER BY id_peserta DESC");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <div>Hai, <?php echo $nama; ?></div>
                                <?php } ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'previewcam.php'; ?>
        </header>


        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="col-md-12">
                        <form class="card">
                            <div class="card-body">
                                <div class="col-12 markdown">
                                    <div class="mb-3">
                                        <div class="col-md-6 markdown">
                                            <h2>Hafalkan Kata Berikut Ini!</h2>
                                            <div class="text-secondary mb-3">Sisa waktu menghafalkan : <span id="time"></span></div>
                                        </div><br>
                                        <?php
                                        // tampil data soal 
                                        $data = mysqli_query($koneksi, "select * from soal_ist_me");
                                        $no = 0;
                                        while ($d = mysqli_fetch_array($data)) {
                                            $idsoal = $d['id_soal'];
                                        ?>
                                            <div class="form-label"><?php echo $d['soal']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="#" target="_blank" class="link-secondary" rel="noopener">v2.0.0-beta23</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2023
                                    <a href="." class="link-secondary">Detection</a>.
                                    All rights reserved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <!-- <script type="text/javascript">
        // Total seconds to wait
        var seconds = 3 * 60;

        function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "petunjuk-tes9.php";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
        }

        // Run countdown function
        countdown();
    </script> -->
    <script language="javascript">
        var time = 1 * 60;
        setInterval(function() {
            var seconds = time % 60;
            var minutes = (time - seconds) / 60;
            if (seconds.toString().length == 1) {
                seconds = "0" + seconds;
            }

            if (minutes.toString().length == 1) {
                minutes = "0" + minutes;
            }

            document.getElementById("time").innerHTML = minutes + ":" + seconds;
            time--;

            if (time < 0) {
                window.location = "petunjuk-tes9.php";
            }
        }, 1000);
    </script>
    <script src="admin/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="admin/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>