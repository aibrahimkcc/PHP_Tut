<?php
$x= 3+5*2;
echo $x;

$x=8/2*4;
echo$x;
$y=5;

$x=true;
$y=false;
$z= $x and $y;

var_dump($z);
//"=", "and"  operatörüne göre önceliklikli olduğu için önce = operatörü gerçekleşir.
// değişken $x, değişken $z'ye atanır ve  başka atama işlemi gerçekleşmediği için $z true değerini alır. 
// işlemin tamamını var_dump edersen and operatörünün de çalıştığını görürürüz.
var_dump($z= $x and $y);