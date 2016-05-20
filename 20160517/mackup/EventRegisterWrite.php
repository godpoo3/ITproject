<?php

session_start();

try {
$pdo = new PDO('mysql:dbname=it;host=127.0.0.1','root','');

} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

$name = $_SESSION['name'];

$eventname = $_POST['eventname'];
$eventtime = $_POST['eventtime'];
$eventplace = $_POST['eventplace'];
$eventmemo = $_POST['eventmemo'];


$_SESSION['eventname'] = $eventname;
$_SESSION['eventtime'] = $eventtime;
$_SESSION['eventplace'] = $eventplace;
$_SESSION['eventmemo'] = $eventmemo;

if($eventname != NULL && $eventtime != NULL && eventplace != NULL){
  //if($eventmemo != NULL){ $eventmemo = ""; }
  $sql = "insert into event (name,eventname,eventtime,eventplace,eventmemo) values ('$name','$eventname','$eventtime','$eventplace','$eventmemo')";
  if($pdo->query($sql)){
    header("Location: ../mackup/mypage.php");
  }else{
    echo 'ng';
  }
}else{
  echo 'xxxx';
}

?>