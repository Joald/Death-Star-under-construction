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
function kartki1(){
window.location.href = "kartki.php";
}
function kartki2(){
window.location.href = "kartki2.php";
}
function kartki3(){
window.location.href = "kartki3.php";
}
</script>



<h1 id="title">Death Star under construction</h1>





<button class="buthany" id="pmocy" type="button" onclick="Moc()">Przycisk Mocy</button>
<button class="buthany" id="stro2" type="button" onclick="Stronaglowna()">Powrót do strony głównej</button>
<button class="buthany" id="next" type="button" onclick="kartki2()">Następna kartka</button>
<button class="buthany" id="previous" type="button" onclick="kartki3()">Poprzednia kartka</button>
<br>

<div class="user">
<form action="send1.php" method="post">
Proszę wpisać tekst życzeń:<br>
<textarea rows="4" cols="50" name="text"></textarea><br>
Proszę wpisać email, na który ma zostać wysłana kartka:<br>
<input type="text" name="email"><br>
<input type="submit" value="Submit">
</form>
</div>
<div class="cardf">
<p class="ctext">DARTH VADER PRZESYŁA <br>PRZYKŁADOWY TEKST ŻYCZEŃ</p>
</div>
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
I hereby declare that I, or anyone else, shall never take any monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>

</body>



</html>
