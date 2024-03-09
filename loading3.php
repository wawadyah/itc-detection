<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Loading</title>
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

<body class=" d-flex flex-column">
    <script src="admin/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-slim py-6">
            <div class="text-center">
                <h3>Persiapkan dirimu, tes akan dimulai dalam <span id="countdown"></span> detik lagi</h3>
                <div class="text mb-3"></div>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-indeterminate"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Total seconds to wait
        var seconds = 6;

        function countdown() {
            seconds = seconds - 1;
            if (seconds < 0) {
                // Chnage your redirection link here
                window.location = "tes3.php";
            } else {
                // Update remaining seconds
                document.getElementById("countdown").innerHTML = seconds;
                // Count down using javascript
                window.setTimeout("countdown()", 1000);
            }
        }

        // Run countdown function
        countdown();
    </script>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="admin/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="admin/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>