<?php

session_start();

try {
$pdo = new PDO('mysql:dbname=it;host=127.0.0.1','root','');

} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

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
  header("location: ../mackup/mypage.php");
}else{
  echo "ng";
}


?>