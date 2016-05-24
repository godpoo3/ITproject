<?php

session_start();

include("db_connect.php");


$email = $_POST["email"];
$pw = $_POST["pw"];
$pw2 = $_POST["pw2"];

$_SESSION['email'] = $email;

$sql = "select email from user where email='$email';";

$result = $pdo->query($sql);

$row = $pdo->query($sql)->fetch(PDO::FETCH_BOTH);

//var_dump($row[0]);


if($row[0] == NULL){
  if($email != NULL && $pw != NULL && $pw2 != NULL && $pw == $pw2){
    $sql = "insert into user (email,password) values ('$email','$pw')";
    if($pdo->query($sql)){
      header("Location: ../mockup/infoEdit.php");
    }else{
      echo 'ng';
    }
  }else{
    echo '入力間違いました、もう一度入力してください。';
  }
}else{
  echo 'このメールは存在しています。';
}

?>