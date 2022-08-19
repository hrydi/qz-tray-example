<?php
header('Content-Type: plain/text');
echo file_get_contents('/var/www/certs/cert.pem');
exit(0);