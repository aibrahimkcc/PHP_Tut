<?php
$x =10;
$y=2;
var_dump($x+$y); //x+y=12
var_dump($x-$y); //x-y=8
var_dump($x*$y); //x*y=20
var_dump($x/$y); //x/y=5
var_dump($x%$y); //x in y'den bölümünden kalan = Mod = 0
var_dump($x**$y); // x'in y üssü = 10*10=100
echo '<br/>';
//bir değişkene veya değere - yada + operatörleri ile kullanırsanız string kullanım olsanız bile bunları integere ya da float'a dönüştürmüş olursunuz.
// değer tam bölünmüyorsa değer float'a çevrilir.
$x= '10';
$y= '3';
var_dump($x);
var_dump(+$x);
var_dump($x/$y);

//değerlerden bir tanesi bile float ise sonuç float olur.
$x= '1.0';
$y= 1;
var_dump($x+$y);

//bir sayıyı 0 a bölerseniz infinity olarak eror alırsınız.
//eror almamak ve INF(infinity) almak için fdiv fonksiyonu kullan.
// bölü işareti yerine , attık
$x= '1.0';
$y= 0;
var_dump(fdiv($x,$y));

// Modla işlem yaparken float'olarak kullandığın değerler integer değerine cast edilir.

$x= 10.5;
$y= 3.9;
var_dump($x%$y);

//float değerler ile mod işlemi yapmak için fmod fonksiyonu kullanılır.
$x= 10.5;
$y= 3.9;
var_dump(fmod($x,$y));

//mod için ilk yazılan değer pozitif ise sonuç pozitif negatif ise sonuç negatif olur.
$x= 10;
$z= -10;
$y= -3;
var_dump($x%$y);
var_dump($z%$y);
