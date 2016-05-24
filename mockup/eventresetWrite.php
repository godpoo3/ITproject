<?php

session_start();

include("db_connect.php");

$name = $_SESSION['name'];

$eventname = $_POST['eventname'];
$eventtime = $_POST['eventtime'];
$eventplace = $_POST['eventplace'];
$eventmemo = $_POST['eventmemo'];

$_SESSION['eventtime'] = $eventtime;
$_SESSION['eventplace'] = $eventplace;
$_SESSION['eventmemo'] = $eventmemo;



if($eventname != NULL && $eventtime != NULL && eventplace != NULL){
  if($eventmemo == NULL){ $eventmemo = ""; }
  $sql = "update event set eventtime = '$eventtime', eventplace = '$eventplace', eventmemo = '$eventmemo' where eventname = '$eventname';";
  if($pdo->query($sql)){
    header("Location: ../mockup/mypage.php");
  }else{
    echo 'ng';
  }
}else{
  echo 'xxxx';
}

?>