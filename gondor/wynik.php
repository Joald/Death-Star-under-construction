<?php
$text=$_POST['login'];
$wynik = $_POST['score'];
$p=fopen("/home/k13_c/joald/.homepage/skrypty/highscore.txt","r");
$x=fread($p,100);
fclose($p);
if($wynik>$x){
$p=fopen("/home/k13_c/joald/.homepage/skrypty/highscore.txt","w");
fwrite($p,$wynik);
fclose($p);
$p=fopen("/home/k13_c/joald/.homepage/skrypty/highplaya.txt","w");
fwrite($p,$text);
fclose($p);
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="http://joald.w.staszic.waw.pl/skrypty/theme.css"/>
		<title>send</title>
		<script>
		function to2048(){
		 window.location.href = "2048.php";
		}
		</script>
	</head>
	<body onLoad="to2048()">
		
	</body>
</html>