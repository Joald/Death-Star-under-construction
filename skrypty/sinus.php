<?php
setcookie("CookieForGondor","lol", time()+1);
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Death Star under construction</title>
<link rel="stylesheet" type="text/css" href="theme.css"/>



<script>

        
        
        
        function demo(){
			var i=0;
			
            var c = document.getElementById("theCanvas");
			var ctx = c.getContext("2d");
			var y=0;
			ctx.clearRect ( 0 , 0 , 400 , 400 );
			
			
			ctx.beginPath(); 
			ctx.lineWidth="1";
			if(document.getElementById("bla").checked)
				ctx.strokeStyle="black"; 
			else if(document.getElementById("red").checked)
				ctx.strokeStyle="red"; 
			else if(document.getElementById("blu").checked)
				ctx.strokeStyle="blue"; 
			if(document.getElementById("sin").checked)
				ctx.moveTo(0,200);
			else if(document.getElementById("cos").checked)
				ctx.moveTo(0,200-Math.cos(0)*20*document.getElementById("amp").value)
			while(i<401){
			if(document.getElementById("sin").checked)
				y=Math.sin(50*(i+1)/document.getElementById("freq").value/10);
			else if(document.getElementById("cos").checked)
				y=Math.cos(50*(i+1)/document.getElementById("freq").value/10);
			ctx.lineTo(i+1,200-y*20*document.getElementById("amp").value);i++;
			}
			ctx.stroke();
        }
        document.addEventListener('keydown', function(event) {
    if(event.keyCode == 13) {
        demo();
    }
    
});

function Stronaglowna(){
 window.location.href = "http://joald.w.staszic.waw.pl";
}
</script>

</head>


<body onLoad="demo()">

<h1  id="title">Death Star under construction</h1>





<button class="buthany" id="stro2" type="button" onclick="Stronaglowna()">Powrót do strony głównej</button>

<br>

<canvas width="400" height="400" style="background-color:white;float:" id="theCanvas" onclick="demo()"></canvas>
<br>
<p>
<input type="text" value=1 id="amp">
<input type="text" value=100 id="freq">
<div class="lol">
<p class="czypodoba">Wybierz kolor</p>

<input type="radio" value=1 id="bla" name="color" checked>czarny<br>
<input type="radio" value=2 id="red" name="color">czerwony<br>
<input type="radio" value=3 id="blu" name="color">niebieski<br>


</div>

<div class="login">
<p class="logow">Wybierz funkcję</p>
<input type="radio" value=1 id="sin" name="func" checked>sinus<br>
<input type="radio" value=2 id="cos" name="func">cosinus<br>

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


</body>



</html>