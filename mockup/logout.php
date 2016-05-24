<?php

session_start();

include("db_connect.php");

unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['people']);
unset($_SESSION['tel']);

header("location: ../mockup/homepage.php");
?>