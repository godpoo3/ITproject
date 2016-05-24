<?php

session_start();

include("db_connect.php");


$email = $_POST["email"];
$pw = $_POST["pw"];

$_SESSION['email'] = $email;

$sql = "select * from user where email='$email'";

$result = $pdo->query($sql);

$row = $pdo->query($sql)->fetch(PDO::FETCH_BOTH);

$_SESSION['name'] = $row[1];
$_SESSION['tel'] = $row[4];
$_SESSION['people'] = $row[5];

if($email == $row[2] && $pw == $row[3]){
	header("Location: ../mockup/mypage.php");
}else{
	echo "“ü—ÍŠÔˆá‚¢‚Ü‚µ‚½A‚à‚¤ˆê“x“ü—Í‚µ‚Ä‚­‚¾‚³‚¢B";
}

