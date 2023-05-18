<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4 HOSTING</title>
    <link href="<?= base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body p-4">
                        <h3>CI4 HOSTING</h3>
                        <hr>
                        <p>Adalah example project buat atur base url agar bisa menjadi modular, tanpa atur base url lagi. </p>
                        <h3>Cukup copy dan atur file ke folder project kalian </h3>
                        <hr>
                        <ul>
                            <li><b>.htaccess</b> ke root project</li>
                            <li><b>index.php</b> ke root project</li>
                            <li><b>spark</b> ke root project</li>
                            <li><b>\App\Config\Constants.php</b> replace</li>
                            <li><b>\App\Config\App.php</b> ubah pada baris <b>public string $baseURL = 'http://localhost:8080/';</b> jadi <b>public string $baseURL = BASE;</b></li>
                            <li>Untuk file assets bisa di simpen di dalam folder <b>public</b></li>
                        </ul>
                        <h3>Dan ketika pemakaian base_url()</h3>
                        <hr>
                        <ul>
                            <li>base_url ketika buat assets</li>
                            <ol>
                                <li>&lt;link href=&quot;&lt;?= base_url(); ?&gt;public/assets/bootstrap/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt; </li>
                                <li>&lt;script src=&quot;&lt;?= base_url(&#39;public/assets/bootstrap/js/bootstrap.bundle.min.js&#39;); ?&gt;&quot;&gt;&lt;/script&gt;</li>
                                <li>&lt;script src=&quot;&lt;?= base_url(&#39;public&#39;); ?&gt;/assets/bootstrap/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;</li>
                            </ol>
                            <li>base_url ketika buat redirect a href dan form</li>
                            <ol>
                                <li>&lt;a href=&quot;&lt;?= base_url(&#39;hello&#39;); ?&gt;&quot; target=&quot;_blank&quot;&gt;Page Hello&lt;/a&gt;</li>
                                <li>&lt;a href=&quot;&lt;?= base_url(); ?&gt;hello/zail&quot; target=&quot;_blank&quot;&gt;Page Hello Zail&lt;/a&gt;</li>
                                <li>&lt;form action=&quot;&lt;?= base_url(&#39;auth) ?&gt;&quot; method=&quot;post&quot;&gt;&lt;/form&gt;</li>
                            </ol>
                        </ul>
                        <h3>Website bisa di akses dengan url </h3>
                        <hr>

                        <ul>
                            <li>http://localhost/ci4_hosting</li>
                            <li>http://localhost/ci4_hosting/public</li>
                            <li>http://localhost:8080/ dengan <b>php spark serve --port 8080</b></li>
                            <li>https://domain.com/ dengan production web hosting</li>
                            <li>https://random.ngrok.com/ dengan share ngrok panel</li>
                        </ul>
                        <h3>Example Link</h3>
                        <hr>
                        <ul>
                            <li><?= base_url('hello'); ?> - <a href="<?= base_url('hello'); ?>" target="_blank">Page Hello</a></li>
                            <li><?= base_url(); ?>hello/zail - <a href="<?= base_url(); ?>hello/zail" target="_blank">Page Hello Zail</a></li>
                            <li><?= base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css - <a href="<?= base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" target="_blank">Bootstrap CSS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('public'); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>