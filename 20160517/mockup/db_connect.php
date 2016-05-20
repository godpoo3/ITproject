<?php

try {
$pdo = new PDO('mysql:dbname=it;host=127.0.0.1','root','');

} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

?>