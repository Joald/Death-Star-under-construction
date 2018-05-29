<?php
$text = $_POST['login'];
$wynik = $_POST['score'];
$current_folder = "/home/students/inf/j/jo385896/public_html/skrypty/"

$p = fopen("highscore.txt", "r");
/*$x = fread($p, 100);
echo($x);
fclose($p);
if($wynik > $x) {
    $p = fopen("highscore.txt", "w");
    fwrite($p,$wynik);
    fclose($p);
    $p = fopen("highplaya.txt", "w");
    fwrite($p,$text);
    fclose($p);
}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="theme.css"/>
		<title>send</title>
		<script>
		function to2048(){
		    window.location.href = "2048.php";
		}
		</script>
	</head>
    <body> onLoad="to2048()"   "<?php echo getcwd()?>"
		
	</body>
</html>
