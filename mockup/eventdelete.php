<?php

session_start();

include("db_connect.php");

$eventname = $_POST['eventname'];

$sql = "delete from event where eventname='$eventname'";

//var_dump($eventname);

  if($pdo->query($sql)){
    header("Location: ../mockup/mypage.php");
  }else{
    echo 'ng';
  }

?>