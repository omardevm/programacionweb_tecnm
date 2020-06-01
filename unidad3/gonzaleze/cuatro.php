<?php
  $direccion = "http://clases.itesco.edu.mx/";
  echo parse_url($direccion, PHP_URL_SCHEME);
  echo parse_url($direccion, PHP_URL_HOST);
  echo parse_url($direccion, PHP_URL_PATH);
?>