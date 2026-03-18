<?php
session_start();
var_dump($_SESSION);
header("Location: frontend/login.php");
exit();
?>