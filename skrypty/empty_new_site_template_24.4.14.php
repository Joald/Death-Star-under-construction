<?php
setcookie("CookieForGondor","lol", time()+1);
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Death Star under construction</title>
<link rel="stylesheet" type="text/css" href="theme.css"/>
</head>


<body>



<script>
function Moc(){
document.title="Death Star under construction - Feel the power of the Force!";
document.getElementById("title").innerHTML="Death Star under construction - Feel the power of the Force!";
}
function Stronaglowna(){
 window.location.href = "http://joald.w.staszic.waw.pl";
}
</script>



<h1 id="title">Death Star under construction</h1>
<a href="http://wowimg.zamimg.com/hearthhead/sounds/VO_EX1_095_Attack_02.mp3" class="tekstduzy">asdfasdf</a>




<button class="buthany" id="pmocy" type="button" onclick="Moc()">Przycisk Mocy</button>
<button class="buthany" id="stro2" type="button" onclick="Stronaglowna()">Powrót do strony głównej</button>





<div class="lol">
<p class="czypodoba">Czy strona Ci się podoba?</p>
<form action="form.php" method="POST" target="_blank">
<input type="radio" value=1 name="like" checked>tak<br>
<input type="radio" value=2 name="like">nie zaprzeczam<br>
<input type="radio" value=3 name="like">raczej na pewno<br>
<input type="submit" value="send">
</form>
</div>

<div class="login">
<p class="logow">Logowanie:</p>
<form action="login.php" method="post">
Login: <input type="text" name="login">
Hasło: <input type="password" name="password">
<input type="submit" value="Submit">

</form>
</div>
<div class="licznik">
<?php

$p=fopen("licznik.txt","r");
$ile=fread($p,100);
fclose($p);

if(!$_COOKIE["CookieForGondor"]==true){
$ile++;

$p=fopen("licznik.txt","w");
fwrite($p,$ile);
fclose($p);
}

if($ile%10==2||$ile%10==3||$ile%10==4||($ile>1&&$ile<5))
{
	echo "Stronę odwiedziły $ile osoby.";
}
else
{
	echo "Stronę odwiedziło $ile osób.";
}

?>

</div>
<br>
<br>
<br>
<br>
<br>
<p class="ostronie">
<a href="http://www.staszic.waw.pl">Strona sponsorska. XIV LO im. Stanisława Staszica w Warszawie.</a><br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else, shall never take any monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>

</body>



</html>