<?php
session_start();
include'session.php';
$_SESSION['name'] = "vasya";
echo $_SESSION['name'];
?>