
<html>

<body>
<h1>Stronę odwiedziło </h1>
<?php

$p=fopen("licznik.txt","r");
$ile=fread($p,100);
fclose($p);

if(!$_COOKIE["CookieForGondor"]==true){
$ile++;

$p=fopen("licznik.txt","w");
fwrite($p,$ile);
fclose($p);
echo $ile;
}
if($_COOKIE["CookieForGondor"]==true){echo $ile;}
?>
<h2>UWAGA KUKISY!!! JAK ICH NIE CHCESZ TO WYJTŹ!!!</h2>
<s>We are Anonymous.<br>
We hack ALL THE WEBSITES<br>
Even yours.<br></s>
doge disapproves<br>
much ban<br><br><br><br>
such input<br><br>

</body>
</html>