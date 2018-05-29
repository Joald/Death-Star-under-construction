<?php
setcookie("CookieForGondor","lol",time()+24*60*60);
?>
<!DOCTYPE html>
<html>


<head>
<link rel="shortcut icon" href="favicon.ico" />
<meta charset="utf-8">
<title>Death Star under construction</title>
<link rel="stylesheet" type="text/css" href="skrypty/theme.css"/>
<script>
function Moc(){
document.title="Death Star under construction - Feel the power of the Force!";
document.getElementById("title").innerHTML="Death Star under construction - Feel the power of the Force!";
}
function S2(){
 window.location.href = "skrypty/strona2.html";
}
function kartki(){
 window.location.href = "skrypty/kartki.php";
}
function info(){
 window.location.href = "skrypty/starwarsinfo.php";
}
function to2048(){
 window.location.href = "skrypty/2048.php";
}
function to3048(){
 window.location.href = "rebel/2048.php";
}
function sins(){
 window.location.href = "skrypty/sinus.php";
}
function OpenInNewTab(url )
{
  var win=window.open(url, '_blank');
  win.focus();
}

</script>



</head>


<body>
<h1 id="title">Death Star under construction</h1>

<button class="buthany" id="pmocy" type="button" onclick="Moc()">Przycisk Mocy</button>
<button class="buthany" id="stro2" type="button" onclick="S2()">Strona #2 - QUIZ WIEDZY O STAR WARS</button>
<button class="buthany" id="info" type="button" onclick="info()">Strona #3 - Informacje</button>
<button class="buthany" id="kartk" type="button" onclick="kartki()">Strona #4 - Serwis kartkowy</button>
<button class="buthany" id="2048" type="button" onclick="to2048()">Strona #5 - Gra Imperial Army</button> 
<button class="buthany" id="3048" type="button" onclick="to3048()">Strona #6 - Gra Rebel Army</button> 

<br>

<div class="lol">
    <p class="czypodoba">Czy strona Ci się podoba?</p>
    <form action="skrypty/form.php" method="POST" target="_blank">
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

$p=fopen("skrypty/licznik.txt","r");
$ile=fread($p,100);
fclose($p);

if(!$_COOKIE["CookieForGondor"]==true){
$ile++;

$p=fopen("skrypty/licznik.txt","w");
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
Jacek Olczyk 1C<br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else, shall ever take no monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>

</body>



</html>
