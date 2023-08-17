<?php
require_once 'config/config.php';
session_start();
session_destroy();

echo "<script> sessionStorage.clear(); window.location.replace('".$web_link."index') </script>";