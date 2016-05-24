<?php

session_start();

include("db_connect.php");

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
    header("Location: ../mockup/mypage.php");
  }else{
    echo 'ng';
  }
}else{
  echo 'xxxx';
}

?>