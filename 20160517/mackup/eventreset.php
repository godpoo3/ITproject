<!doctype html>
<?php session_start(); 
	include("db_connect.php");
	include("eventcount.php");

?>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>...</title>
</head>
<body>

<h1>イベント編集</h1>

<ul>
<?php

for($i=0;$i<$no;$i++){
echo "<li>";
//    <!-- Small modal -->
	echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal" . $i . "\">". $row[$i][2] . "</button>";

	echo "<form action=\"eventdelete.php\" method=\"post\"> <input type=\"hidden\" name=\"eventname\" value=\"". $row[$i][2] ."\"> <input type=\"submit\" class=\"btn btn-default\" value=\"削除する\"> </form><br>";

	echo "<div id=\"myModal" . $i . "\" class=\"modal fade\" role=\"dialog\">";
  	    echo "<div class=\"modal-dialog\">";
    		echo "<div class=\"modal-content\">";
                	echo "<form action=\"eventresetWrite.php\" method=\"post\">";
    				echo "イベント名：". $row[$i][2] . "<br><br>";
				echo "<input type=\"hidden\" name=\"eventname\" value=\"". $row[$i][2] ."\">";
    				echo "時間：<input type=\"text\" name=\"eventtime\"><br><br>";
    				echo "場所：<input type=\"text\" name=\"eventplace\"><br><br>";
				echo "メモ：<input type=\"text\" name=\"eventmemo\"><br><br>";
				echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">閉じる</button>";
				echo "<input type=\"submit\" value=\"変更する\">";
			echo "</form>";
			
		echo "</div>";
	    echo "</div>";
	echo "</div>";
    echo "</li>";
    
}
?>
</ul>
    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='./mypage.php'">Mypage</button>
    
</body>
</html>
