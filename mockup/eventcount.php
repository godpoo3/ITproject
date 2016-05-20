<?php

	$name = $_SESSION['name'];
	$sql = "select * from event where name='$name';";
	$row = $pdo->query($sql)->fetchAll(PDO::FETCH_BOTH);

	$count = $pdo->prepare($sql);   
	$count->execute();   
	$no=$count->rowCount(); 

?>