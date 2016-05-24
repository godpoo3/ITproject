<?php session_start(); ?>
<?php 
	include("db_connect.php");
	include("eventcount.php");

	if($_SESSION['email'] == NULL){
		header("location: ../mockup/homepage.php");
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Mypage</title>
</head>
<body>
	<h1>マイページ</h1>
	<div>
    	<p>会社名：<?php echo $_SESSION['name']; ?></p>
        <p>人数：<?php echo $_SESSION['people']; ?></p>
        <p>TEL：<?php echo $_SESSION['tel']; ?></p>        
        <ul><h2>イベントリスト</h2>
<?php

for($i=0;$i<$no;$i++){
echo "<li>";
//    <!-- Small modal -->
	echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal" . $i . "\">". $row[$i][2] . "</button>";

	echo "<div id=\"myModal" . $i . "\" class=\"modal fade\" role=\"dialog\">";
  	    echo "<div class=\"modal-dialog\">";
    		echo "<div class=\"modal-content\">";
                	echo "<form action=\"eventresetWrite.php\" method=\"post\">";
    				echo "イベント名：". $row[$i][2] . "<br><br>";
    				echo "時間：" . $row[$i][3] . "<br><br>";
    				echo "場所：". $row[$i][4] ."<br><br>";
				echo "メモ：" . $row[$i][5] . "<br><br>";
				echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">閉じる</button>";
			echo "</form>";
		echo "</div>";
	    echo "</div>";
	echo "</div>";
    echo "</li>";
    
}
?>
        </ul>
        <button type="botton" onClick="location.href='./Eventreset.php'">イベント編集</button>
        <button type="botton" onClick="location.href='./EventRegistration.php'">イベント登録</button><br>
        <button type="botton" onClick="location.href='./infoEdit.php'">会社情報編集</button>
        <button type="botton" onClick="location.href='./eventCheckOnly.php'">出欠表チェック</button>
        
    </div>
    <br>
    <?php
    
        if($_SESSION['name'] != NULL){
			echo "<button type=\"botton\" onClick=\"location.href='./logout.php'\">ログアウト</button>";
		}else{
			echo "<button  type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\"><a>ログイン</a></button>";
			echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">";
				echo "<div class=\"modal-dialog\">";
    				echo "<div class=\"modal-content\">";
      					echo "<form action=\"login.php\" method=\"post\">";
	               			echo "メールアドレス:<input type=\"text\" name=\"email\"><br>";
        	        		echo "パスワード:<input type=\"password\" name=\"pw\"><br>";
			   		   		echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">閉じる</button>";
				 			echo "<input type=\"submit\" name=\"button\" value=\"ログイン\" />";
		           	    echo "</form>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}
    ?>
</body>
</html>
