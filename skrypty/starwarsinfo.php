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
 window.location.href = "..";
}
</script>



<h1 id="title">Death Star under construction</h1>





<button class="buthany" id="pmocy" type="button" onclick="Moc()">Przycisk Mocy</button>
<button class="buthany" id="stro2" type="button" onclick="Stronaglowna()">Powrót do strony głównej</button>
<div class="centeredtext">
<h2 class="tekstduzy">O stronie</h2>
Strona ta powstała w celu wypełnienia projektu zadanego uczniom klasy 1c niżej wymienionego liceum. 
Perfidnie zmuszony do wykonania tej syzyfowej pracy, uznałem, iż najlepszym sposobem na wypełnienie jej bezboleśnie jest zaprojektowanie strony o czymś, na czym się dobrze znam, i mój wybór padł na Gwiezdne Wojny.
Strona ta oferuje system logowania, który jest również tajnym wierszem poleceń; profesjonalną, demokratyczną sondę; fantastyczny Przycisk Mocy, Quiz wiedzy o Star Wars, w którym nie wszystko jest tym, czym być się wydaje; 
gwiezdnowojenną wersję popularnej gry 2048 mojego pomysłu, projektu i wykonania (moja jest ta wersja, nie 2048); 
oraz możliwość narysowania dwóch podstawowych funkcji trygonometrycznych: sinusa i cosinusa (i co z tego, że nie wpasowuje się w klimat).

<h2 class="tekstduzy">O Gwiezdnych Wojnach</h2>
Gwiezdne Wojny to seria filmów, książek, komiksów i gier osadzonych w jednym uniwersum zapoczątkowanych w 1977 r. przez George'a Lucasa.
Dotychczas ukazało się: 6 filmów aktorskich (3 nowe są planowane), 2 seriale animowane (następny jest zapowiedziany), ponad 200 książek i
200 serii komiksowych (ciągle będą nowe wypuszczane). Niestety, w ostatnim miesiącu "władze" uniwersum zadecydowały o odrzuceniu
ponad 30 lat książek, gier i komiksów, oraz pozostawienia jako "nowy kanon" tylko starych filmów i serialu animowanego "The Clone Wars".
<h2 class="tekstduzy">Moje rozważania</h2>
Zdecydowałem, że wykorzystam okazję, jaką daje mi posiadanie własnej strony internetowej na wyrzucenie z siebie długich wywodów
na temat gwiezdnych wojen, co zawsze chciałem zrobić. Zaczynam.<br>
Moje rozważania zacznę od rozprawy o dawnych dziejach uniwersum, i zobaczę, gdzie to mnie zaprowadzi.
</div>

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p class="ostronie">
<a href="http://www.staszic.waw.pl">Strona sponsorska. XIV LO im. Stanisława Staszica w Warszawie.</a><br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else, shall ever take no monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>

</body>



</html>
