<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

$pisanie=1;/*0000001*/
$czytanie=2;/*0000010*/
$usuwanie_postow=4;/*0000100*/
$usuwanie_uzytkownikow=8;/*0001000*/
//&-koniunkcja, |-alternatywa
//$uprawnienia=$pisanie | $czytanie | $usuwanie_postow | $usuwanie_uzytkownikow;
$Agnieszka=$pisanie | $czytanie;
$Kamil=$usuwanie_postow;
$Karol=$usuwanie_postow | $usuwanie_uzytkownikow;
if($Agnieszka & $pisanie)
	echo 'Agnieszka posiada uprawnienie. <br/>';
if($Kamil & $czytanie)
	echo 'Kamil posiada uprawnienie. <br/>';
if($Karol & $usuwanie_uzytkownikow)
	echo 'Karol posiada uprawnienie. <br/>';
?>
</html>
