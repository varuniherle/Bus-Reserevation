<?php
include_once 'connection.php';
session_start();

unset($_SESSION["username"]);
unset($_SESSION["password"]);

session_destroy();
echo "<script>window.open('home.php','_self');</script>";

?>