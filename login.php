<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="skrypty/theme.css"/>
<title>Strona Logowania</title>
<script>
function back(){
 window.history.back();
}

document.addEventListener('keydown', function(event) {
    if(event.keyCode == 13) {
        back();
    }
    
});
</script>
</head>
<body>
<h2 class="tekstduzy">
<?php
$login=$_POST['login'];
if($_POST['login']=='Joald')
{
	echo "Witaj, $login . Zalogowanie nic Ci nie daje.<br>";
}
else if($_POST['login']=='Gondor'||$_POST['login']=='gondor')
{
	header( 'Location: gondor/2048.php' ) ;
}
echo"Witaj, $login . Logowanie jeszcze nie dziala.<br>";


?>
</h2>
<span id="back"><button type="button" style="vertical-align: middle" onclick="back()">powrót</button></span>
<p class="ostronie">
<a href="http://www.staszic.waw.pl">Strona sponsorska. XIV LO im. Stanisława Staszica w Warszawie.</a><br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else, shall ever take no monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>
</body>
</html>
