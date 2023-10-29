## Konfigurasi qz-tray self signed certificates (Linux)

1. Generate SSL
```bash
$ openssl req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem -sha512 -days 3650
```
2. Simpan SSL yang sudah ter-generate ke folder (pastikan tidak bisa diakses via web)
3. Buat script untuk load cert (public), sample file: cert.php
4. Buat script untuk validasi cert (public) dengan private key nya, sample file: server.php
5. Copy-kan cert (public) pada semua client yang menggunakan qz-tray, simpan dalam file override.crt
Or add an entry to qz-tray.properties (since 2.0.2)
```bash
authcert.override=/path/to/override.crt
```
(optional) Jalankan qz-tray dengan me-load file override.crt tadi
```bash
$ java -Xms512M -DtrustedRootCert=<path override.crt> -jar <path qz-tray.jar> 
```
6. Atau edit launcher agar menjalankan command no.5 diatas

Referensi: https://qz.io/docs/signing


