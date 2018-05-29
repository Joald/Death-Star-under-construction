<?php
setcookie("CookieForGondor","lol");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wyniki</title>
<link rel="stylesheet" type="text/css" href="theme.css"/>
<script>
function back(){
 window.close();
}
document.addEventListener('keydown', function(event) {
    if(event.keyCode == 13) {
        back();
    }
    
});
</script>
</head>
<body>
<h1>Wyniki</h1>
<?php
if($_POST['like']==1&&!$_COOKIE["CookieForGondor"]==true)
{
	
	$p=fopen('tak.txt','r');
	$ilet=fread($p,100);
	$ilet++;
	
	fclose($p);
	$p=fopen('tak.txt','w');
	fwrite($p,$ilet);
	fclose($p);
}


if($_POST['like']==3&&!$_COOKIE["CookieForGondor"]==true)
{
	$p=fopen('brak.txt','r');
	$ileb=fread($p,100);
	$ileb++;
	
	fclose($p);
	$p=fopen(    'brak.txt','w');
	fwrite($p,$ileb);
	fclose($p);
}


if($_POST['like']==2&&!$_COOKIE["CookieForGondor"]==true)
{
	$p=fopen('nie.txt','r');
	$ile=fread($p,100);
	$ile++;
	
	fclose($p);
	$p=fopen('nie.txt','w');
	fwrite($p,$ile);
	fclose($p);
}


$p=fopen('tak.txt','r');
$ilet=fread($p,100);
fclose($p);



$p=fopen('nie.txt','r');
$ilen=fread($p,100);
fclose($p);


$p=fopen('brak.txt','r');
$ileb=fread($p,100);
fclose($p);

$suma=$ilet+$ilen+$ileb;

echo "<div class='pasek'><span class='pasek-zielony' style='width: ".floor(($ilet)/($suma)*100)."%;'></span> tak - ".$ilet."</div>";
echo"<br>";
echo "<div class='pasek'><span class='pasek-zielony' style='width: ".floor(($ilen)/($suma)*100)."%;'></span> nie zaprzeczam - ".$ilen."</div>";
echo"<br>";
echo "<div class='pasek'><span class='pasek-zielony' style='width: ".floor(($ileb)/($suma)*100)."%;'></span> raczej na pewno - ".$ileb."</div>";


?>

<span id="back"><button class="buthany" type="button"  onclick="back()">zamknij</button></span>
<p class="ostronie">
<a href="http://www.staszic.waw.pl">Strona sponsorska. XIV LO im. Stanisława Staszica w Warszawie.</a><br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else shall ever take no monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>
</body>
</html>