# CI4 HOSTING

Adalah example project buat atur base url agar bisa menjadi modular, tanpa atur base url lagi.
<br>

## Cukup copy dan atur file ke folder project kalian

- **.htaccess** ke root project
- **index.php** ke root project
- **spark** ke root project
- **\App\Config\Constants.php** replace file
- **\App\Config\App.php** ubah pada baris public string $baseURL = 'http://localhost:8080/'; jadi public string $baseURL = BASE;
- Untuk file assets bisa di simpen di dalam folder public

## Dan ketika pemakaian **base_url()**

- base_url ketika buat assets

1. &lt;link href=&quot;&lt;?= base_url(); ?&gt;public/assets/bootstrap/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
2. &lt;script src=&quot;&lt;?= base_url(&#39;public/assets/bootstrap/js/bootstrap.bundle.min.js&#39;); ?&gt;&quot;&gt;&lt;/script&gt;
3. &lt;script src=&quot;&lt;?= base_url(&#39;public&#39;); ?&gt;/assets/bootstrap/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;

- base_url ketika buat redirect a href dan form

1. &lt;a href=&quot;&lt;?= base_url(&#39;hello&#39;); ?&gt;&quot; target=&quot;\_blank&quot;&gt;Page Hello&lt;/a&gt;
2. &lt;a href=&quot;&lt;?= base_url(); ?&gt;hello/zail&quot; target=&quot;\_blank&quot;&gt;Page Hello Zail&lt;/a&gt;
3. &lt;form action=&quot;&lt;?= base_url(&#39;auth) ?&gt;&quot; method=&quot;post&quot;&gt;&lt;/form&gt;

## Website bisa di akses dengan url

- http://localhost/ci4_hosting
- http://localhost/ci4_hosting/public
- http://localhost:8080/ dengan **php spark serve --port 8080**
- https://domain.com/ dengan production web hosting
- https://random.ngrok.com/ dengan share ngrok panel

## Example Link

- http://localhost/ci4_hosting/hello - &lt;a href=&quot;&lt;?= base_url(&#39;hello&#39;); ?&gt;&quot; target=&quot;\_blank&quot;&gt;Page Hello&lt;/a&gt;
- http://localhost/ci4_hosting/hello/zail - &lt;a href=&quot;&lt;?= base_url(); ?&gt;hello/zail&quot; target=&quot;\_blank&quot;&gt;Page Hello Zail&lt;/a&gt;
- http://localhost/ci4_hosting/public/assets/bootstrap/css/bootstrap.min.css - &lt;a href=&quot;&lt;?= base_url(); ?&gt;public/assets/bootstrap/css/bootstrap.min.css&quot; target=&quot;\_blank&quot;&gt;Bootstrap CSS&lt;/a&gt;
