# CI4 HOSTING

Adalah example project buat atur base url agar bisa menjadi modular, tanpa atur base url lagi.
<br>

## Cukup copy dan atur file ke folder project kalian

- .htaccess ke root project
- \App\Config\Constants.php
- \App\Config\App.php ubah pada baris public string $baseURL = 'http://localhost:8080/'; jadi public string $baseURL = BASE;
- Untuk file assets bisa di simpen di dalam folder public dan pemanggilan bisa dengan cara <?= base_url('assets/bootstrap/bootstrap.min.css'); ?>
<hr>

## #Website bisa di akses dengan url

- http://localhost/ci4_hosting
- http://localhost/ci4_hosting/public
- http://localhost:8080/ dengan php spark serve --port 8080
- https://domain.com/ dengan production web hosting
- https://random.ngrok.com/ dengan share ngrok panel
