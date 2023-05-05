<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4 HOSTING</title>
    <link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
                <hr>
                <h2>CI4 HOSTING</h2>
                <p>Adalah example project buat atur base url agar bisa menjadi modular, tanpa atur base url lagi. </p>
                <hr>
                <p>Cukup copy dan atur file ke folder project kalian </p>
                <ul>
                    <li>.htaccess ke root project</li>
                    <li>\App\Config\Constants.php</li>
                    <li>\App\Config\App.php ubah pada baris <b>public string $baseURL = 'http://localhost:8080/';</b> jadi <b>public string $baseURL = BASE;</b></li>
                    <li>Untuk file assets bisa di simpen di dalam folder <b>public</b> dan pemanggilan bisa dengan cara <b> &lt;?= base_url('assets/bootstrap/bootstrap.min.css'); ?&gt; </b></li>
                </ul>
                <hr>
                <p>Website bisa di akses dengan url </p>

                <ul>
                    <li>http://localhost/ci4_hosting</li>
                    <li>http://localhost/ci4_hosting/public</li>
                    <li>http://localhost:8080/ dengan <b>php spark serve --port 8080</b></li>
                    <li>https://domain.com/ dengan production web hosting</li>
                    <li>https://random.ngrok.com/ dengan share ngrok panel</li>
                </ul>
                <hr>
                <p>Keunggulan antara lain :</p>
                <hr>
                <hr>
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>