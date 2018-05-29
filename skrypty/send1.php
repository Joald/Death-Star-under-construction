<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kartkę wysłano</title>
<link rel="stylesheet" type="text/css" href="http://joald.w.staszic.waw.pl/skrypty/theme.css"/>
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
<?php
$text=$_POST['text'];
$to = $_POST['email'];
$moze="background-image:url('http://joald.w.staszic.waw.pl/skrypty/Vader.png');";
$subject = 'Życzenia gwiezdnowojenne';
$mail_body = '
<html style="width:100%">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="width:100%">
<div style="height:572px; width:762px ;'.$moze.'">';
$mail_body .='<p style="color: white; padding:10px;
text-shadow:
    -2px -2px 0 #000,
    2px -2px 0 #000,
    -2px 2px 0 #000,
    2px 2px 0 #000;
font-family:impact;
text-align:center;	
font-size: -webkit-xxx-large;
"> ' . $text . '</p></div></body></html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $subject, $mail_body, $headers);
echo"<div class='ctext'>Kartka wysłana</div>";

?>

<span id="back"><button type="button" class="buthany" onclick="back()">powrót</button></span>
<p class="ostronie">
<a href="http://www.staszic.waw.pl">Strona sponsorska. XIV LO im. Stanisława Staszica w Warszawie.</a><br>
This is a Star Wars fan website.<br>
Copyright disclaimer: No images on this site belong to me unless stated otherwise. They belong to The Walt Disney Company.<br>
I hereby declare that I, or anyone else, shall ever take no monetary profit whatsoever from the websites in this domain that use copyrighted images.
</p>
</body>
</html>