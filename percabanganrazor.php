<!DOCTYPE html>
<html>
<head>
	<title>Percabangan</title>
</head>
<body>
<?php
echo "Pembayaran ke-1 <br>";
$x = 30;
$b = 150;
$ba = 170;
$c = 210;
$d = 250;

$kalian1 = $x * $d;   	//30 x 250
$kalian2 = $x * $c;	//30 x 210
$kalian3 = $x * $b;	//30 x 150
$kalian4 = $x * $ba; 	//30 x 170

$total = $kalian2 + $kalian3 + $kalian1; 

if ($x <= 30) {
	echo "X x b = ".$kalian3."<br>";
}elseif ($x > 30) {
	echo "X x ba =".$kalian4."<br>";
}
echo "Pembayaran ke-2 <br>";
if ($x <= 30) {
	echo "X x c =".$kalian2."<br>";
}
echo "Pembayaran ke-3 <br>";
if ($x <= 30) {
	echo "X x d =".$kalian1."<br>";
}
echo "Total Pembayaran = " .$kalian3."+".$kalian2."+".$kalian1."=".$total."";

?>
</body>
</html>
