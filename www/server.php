<?php
$key = '/var/www/certs/key.pem';
$req = $_GET['request'];
$privateKey = openssl_get_privatekey(file_get_contents($key), 'your-passphrase');
$signature = NULL;
openssl_sign($req, $signature, $privateKey, OPENSSL_ALGO_SHA512);

if($signature) {
  header("Content-Type: text/plain");
  echo base64_encode($signature);
  exit(0);
}

echo "<h1>Error signing message</h1>";
exit(1);