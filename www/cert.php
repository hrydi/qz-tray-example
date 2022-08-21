<?php
require_once './lib.php';
cors();
header('Content-Type: plain/text');
echo file_get_contents('/var/www/certs/cert.pem');
exit(0);