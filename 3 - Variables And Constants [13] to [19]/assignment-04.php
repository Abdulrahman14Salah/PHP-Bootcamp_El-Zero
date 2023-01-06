<?php
echo "<pre>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "######################################################";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "######################################################";
echo "<br>";
echo dirname(__FILE__);
echo "<br>";
echo "######################################################";
echo "<br>";
echo openssl_get_cert_locations()["default_cert_file"];
echo "<br>";
echo "######################################################";
echo "</pre>";
