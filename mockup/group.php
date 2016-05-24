<?php

session_start();

include("db_connect.php");

$name = $_POST['name'];
$people = $_POST['people'];
$tel = $_POST['tel'];

$email = $_SESSION['email'];

$_SESSION['name'] = $name;
$_SESSION['tel'] = $tel;
$_SESSION['people'] = $people;

$sql = "update user set name='$name', tel='$tel', people='$people' where email = '$email'";

//var_dump($pdo->query($sql));

if($pdo->query($sql)){
  header("location: ../mockup/mypage.php");
}else{
  echo "ng";
}


?>