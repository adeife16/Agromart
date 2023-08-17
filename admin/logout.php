<?php
require_once 'config/config.php';
session_start();
session_destroy();

header('Location: '. $web_link. "index");

// echo "<script> sessionStorage.clear(); window.location.replace('".$web_link."index') </script>";