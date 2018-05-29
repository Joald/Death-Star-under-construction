<?php
setcookie("CookieForGondor","lol", time()+1);
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Death Star under construction</title>
<link rel="stylesheet" type="text/css" href="../skrypty/theme.css"/>


<script>
var f = new Array();
var joined = new Array();
function Stronaglowna(){
 window.location.href = "..";
}
var undos= new Array();
var trundos= new Array();
var pics = new Array();
var moved=false;
function load(){
	// 0 - 1; 1 - 2; 2 - 4; 3 - 8; 4 - 16; etc.5-32 6-64 7-128 8-256 9-1024 10-2048
	for (var i=0;i<4;i++) {
		f[i]=new Array();
		for (var j=0;j<4;j++) {
			f[i][j]=0;
		}
	}
	for (var i=0;i<4;i++) {
		undos[i]=new Array();
		for (var j=0;j<4;j++) {
			undos[i][j]=0;
		}
	}
	for (var i=0;i<4;i++) {
		trundos[i]=new Array();
		for (var j=0;j<4;j++) {
			trundos[i][j]=0;
		}
	}
	for (var i=0;i<4;i++) {
		joined[i]=new Array();
		for (var j=0;j<4;j++) {
			joined[i][j]=false;
		}
	}
	for(var i=0;i<12;i++)
	{
		pics[i]= new Image();
	}
	pics[0].src='empty.png';
	pics[1].src='2.jpg';
	pics[2].src='4.jpg';
	pics[3].src='8.jpg';
	pics[4].src='16.jpg';
	pics[5].src='32.jpg';
	pics[6].src='64.jpg';
	pics[7].src='128.jpg';
	pics[8].src='256.jpg';
	pics[9].src='512.jpg';
	pics[10].src='1024.jpg';
	pics[11].src='2048.jpg';
}
var score=0;
var lastscore=0; 
var ifended=false;
var if2ended=false;
var undocount=3;
</script>


</head>


<body onLoad="load()">

<h1  id="title">Rebel Army</h1>
<h2 class="tekstduzy" id="score"></h2><br>
<h2 class="tekstduzy" id="score2"></h2>





<button class="buthany" id="stro2" type="button" onclick="Stronaglowna()">Powrót do strony głównej</button>
<button class="buthany" id="change" type="button" onclick="demo()">Start</button>
<button class="buthany" type="button" onclick="uk()"> ^ </button>
<button class="buthany" type="button" onclick="dk()"> v </button>
<button class="buthany" type="button" onclick="lk()"> &#60; </button>
<button class="buthany" type="button" onclick="rk()"> &#62; </button>
<button class="buthany" type="button" onclick="undo()"> Undo </button>
<br>
<canvas width="420" height="420" style="background-color:white;" id="theCanvas"></canvas>
<br>


<?php

$p=fopen("../skrypty/highscore.txt","r");
$a=fread($p,100);
fclose($p);
$p=fopen("../skrypty/highplaya.txt","r");
$b=fread($p,100);
fclose($p);


?>



<script>
var highscore=<?php echo $a;?>;
var highplaya="<?php echo $b;?>";
var c = document.getElementById("theCanvas");
var ctx = c.getContext("2d");
var tlo=new Image();
tlo.src='tlo.png';
function randspawn(){
	var i=0;
	var j=0;
	var movedatall=false;
	while (true)
	{
		i=Math.floor((Math.random()*4));
		j=Math.floor((Math.random()*4));
		if(f[i][j]==0)
		{
			break;
		}
	}
	
	if(Math.floor((Math.random()*4))==0)
	{
		f[i][j]=2;
	}
	else
	{
		f[i][j]=1;
	}
}
function end(){
	if(score>highscore)
	{
		document.getElementById("title").innerHTML="Gratulacje! Masz najlepszy wynik dotychczas! Twój wynik to: ";
		document.getElementById("score2").innerHTML='<form action="wynik.php" method="post">Wpisz swoje imię: <input type="text" name="login"><input id="scored" name="score" value='+score+'  visibility="hidden" readonly><input type="submit" value="Submit">';
		ifended=true;
	}
	else
	{
		document.getElementById("title").innerHTML="Przegrałeś! Spróbuj jeszcze raz!";
		if2ended=true;
	}
}
function updatescr(){
	var able=false;
	undocount++;
	var fillcount=0;
	for(var i=0;i<4;i++)
	{
		for(var j=0;j<4;j++)
		{
			if(f[i][j]>0)
				fillcount++;
		}
	}
	if(fillcount==16)
	{
		for(var i=0;i<4;i++)
		{
			for(var j=0;j<4;j++)
			{
				if((i>0 && f[i-1][j] == f[i][j]) || (j>0 && f[i][j-1]) == f[i][j] || (f[i][j+1] == f[i][j] && j<3) || (i<3 && f[i+1][j] == f[i][j]))
				{
					able=true;
				}
			}
		}
		if(!able)
		{
			end();
		}
	}
	ctx.drawImage(tlo,0,0);
	for(var i=0;i<4;i++)
	{
		for(var j=0;j<4;j++)
		{
			ctx.drawImage(pics[f[i][j]],i*100+(i+1)*4,j*100+(1+j)*4);
		}
	}
	var s="Twój wynik to: "+score+", a najlepszy, uzyskany przez "+highplaya+" to: "+highscore+".";
	document.getElementById("score").innerHTML=s;
	
}
function undo()
{
	document.getElementById("title").innerHTML="Rebel Army";
	score-=lastscore;
	for (var i=0;i<4;i++)
	{
		for (var j=0;j<4;j++)
		{
			f[i][j]=undos[i][j];
		}
	}
	updatescr();
}
function demo(){
	if(!ifended)
	{
		if(if2ended)
			score=0;
		document.getElementById("title").innerHTML="Rebel Army";
	document.getElementById("change").innerHTML="Restart";
		load();
		randspawn();
		randspawn();
		
		undocount=3;
	}
	updatescr();
}
function move(dir, x, y)
{
	var retval=0;
	if(dir=="left")
	{
		if((f[x][y]==f[x-1][y] && f[x][y]>0)&&joined[x][y]==false&&joined[x-1][y]==false)
		{
			f[x-1][y]=f[x][y]+1;
			joined[x-1][y]=true;
			retval+=Math.pow(2,f[x-1][y]);
			score+=retval;
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		if(f[x-1][y]==0 && f[x][y]>0)
		{
			f[x-1][y]=f[x][y];
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		return retval;
	}
	if(dir=="right")
	{
		if((f[x][y]==f[x+1][y] && f[x][y]>0)&&joined[x][y]==false&&joined[x+1][y]==false)
		{
			f[x+1][y]=f[x][y]+1;
			joined[x+1][y]=true;
			retval+=Math.pow(2,f[x+1][y]);
			score+=retval;
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		if(f[x+1][y]==0 && f[x][y]>0)
		{
			f[x+1][y]=f[x][y];
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		return retval;
	}
	if(dir=="up")
	{
		if((f[x][y]==f[x][y-1] && f[x][y]>0)&&joined[x][y]==false&&joined[x][y-1]==false)
		{
			f[x][y-1]=f[x][y]+1;
			joined[x][y-1]=true;
			retval+=Math.pow(2,f[x][y-1]);
			score+=retval;
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		if(f[x][y-1]==0 && f[x][y]>0)
		{
			f[x][y-1]=f[x][y];
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		return retval;
	}
	if(dir=="down")
	{
		if((f[x][y]==f[x][y+1] && f[x][y]>0)&&joined[x][y]==false&&joined[x][y+1]==false)
		{
			f[x][y+1]=f[x][y]+1;
			joined[x][y+1]=true;
			retval+=Math.pow(2,f[x][y+1]);
			score+=retval;
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		if(f[x][y+1]==0 && f[x][y]>0)
		{
			f[x][y+1]=f[x][y];
			f[x][y]=0;
			movedatall=true;moved=true;return retval;
		}
		return retval;
	}
}
function left(){
	movedatall=false;
	lastscore=0;
	do
	{
		moved=false;
		for(var i=1;i<4;i++)
		{
			lastscore+=move("left",i,0);
		}
		for(var i=1;i<4;i++)
		{
			lastscore+=move("left",i,1);
		}
		for(var i=1;i<4;i++)
		{
			lastscore+=move("left",i,2);               // 0 0; 1 0; 2 0; 3 0;
		}									// 0 1; 1 1; 2 1; 3 1;
		for(var i=1;i<4;i++)				// 0 2; 1 2; 2 2; 3 2;
		{									// 0 3; 1 3; 2 3; 3 3;
			lastscore+=move("left",i,3);
		}
	}
	while(moved);
	if(movedatall){
		randspawn();
		for (var i=0;i<4;i++)
		{
			for (var j=0;j<4;j++)
			{
				undos[i][j]=trundos[i][j];
			}
		}
	}
	updatescr();
}
function right(){
	movedatall=false;
	lastscore=0;
	do
	{
		moved=false;
		for(var j=0;j<4;j++)
		{
			lastscore+=move("right",2,j);
		}
		for(var j=0;j<4;j++)
		{
			lastscore+=move("right",1,j);
		}
		for(var j=0;j<4;j++)
		{
			lastscore+=move("right",0,j);
		}
	}
	while(moved);
	if(movedatall){
		randspawn();
		for (var i=0;i<4;i++)
		{
			for (var j=0;j<4;j++)
			{
				undos[i][j]=trundos[i][j];
			}
		}
	}
	updatescr();
}
function up(){
	movedatall=false;
	lastscore=0;
	do
	{
		moved=false;		
		for(var i=0;i<4;i++)
		{
			for(var j=1;j<4;j++)
			{
				lastscore+=move("up",i,j);
			}
		}
	}
	
	while(moved);
	if(movedatall){
		randspawn();
		for (var i=0;i<4;i++)
		{
			for (var j=0;j<4;j++)
			{
				undos[i][j]=trundos[i][j];
			}
		}
	}
	updatescr();
}
function down(){
	movedatall=false;
	lastscore=0;
	do
	{
		moved=false;
		for(var i=0;i<4;i++)
		{
			lastscore+=move("down",i,2);
		}
	
	
		for(var i=0;i<4;i++)
		{
			lastscore+=move("down",i,1);
		}
	
		for(var i=0;i<4;i++)
		{
			lastscore+=move("down",i,0);
		}
	}
	while(moved);
	if(movedatall){
		randspawn();
		for (var i=0;i<4;i++)
		{
			for (var j=0;j<4;j++)
			{
				undos[i][j]=trundos[i][j];
			}
		}
	}
	updatescr();
}

function lk()
{
	for (var i=0;i<4;i++) 
	{
		for (var j=0;j<4;j++) 
		{
			joined[i][j]=false;
		}
	}
	for (var i=0;i<4;i++)
	{
		for (var j=0;j<4;j++)
		{
			trundos[i][j]=f[i][j];
		}
	}
	left();
}	
function rk()
{
	for (var i=0;i<4;i++) 
	{
		for (var j=0;j<4;j++) 
		{
			joined[i][j]=false;
		}
	}
	for (var i=0;i<4;i++)
	{
		for (var j=0;j<4;j++)
		{
			trundos[i][j]=f[i][j];
		}
	}
	right();
}
function dk()
{
	for (var i=0;i<4;i++) 
	{
		for (var j=0;j<4;j++) 
		{
			joined[i][j]=false;
		}
	}
	for (var i=0;i<4;i++)
	{
		for (var j=0;j<4;j++)
		{
			trundos[i][j]=f[i][j];
		}
	}
	down();
}
function uk()
{
	for (var i=0;i<4;i++) 
	{
		for (var j=0;j<4;j++) 
		{
			joined[i][j]=false;
		}
	}
	for (var i=0;i<4;i++)
	{
		for (var j=0;j<4;j++)
		{
			trundos[i][j]=f[i][j];
		}
	}
	up();
}
document.addEventListener('keydown', function(event) 
{
	if(!ifended){
	if(event.keyCode == 37 || event.keyCode == 65) //  A
	{
		lk();
	}
	if(event.keyCode == 38 || event.keyCode == 87) //  W
	{
		uk();
	}
	if(event.keyCode == 39 || event.keyCode == 68) //  D
	{
		rk();
	}
	if(event.keyCode == 8  || event.keyCode == 27) //  UNDO
	{
		undo();
	}
	if(event.keyCode == 40 || event.keyCode == 83) //  S
	{
		dk();
	}
	if(event.keyCode == 13  || event.keyCode == 32) //  START
	{
		demo();
	}
	}
});


</script>
 
</body>



</html>
