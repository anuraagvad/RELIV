<?php
include('config.php');
session_destroy();
header("Location: http://localhost/iwp/");
exit;
?>