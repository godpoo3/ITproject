<?php

session_start();

try {
$pdo = new PDO('mysql:dbname=it;host=127.0.0.1','root','');

} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}


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
	header("Location: ../mackup/mypage.php");
}else{
	echo "入力間違いました、もう一度入力してください。";
}

