<?php
//echo 'hello world';

//echo print 'hello world';

//echo 'Hello','?','mom';

//echo 'ali\'nin derdi';

//echo "ali'nin derdi";

//$_1Ad='Ali';
//echo $_1Ad;

/*
$a = 10;
$b = $a; // $b, $a'nın değerini alır (bir kopyası)
$a = 20; // $a'yı değiştirmek, $b'yi etkilemez
echo $b; // Çıktı: 10 */

$a = 1;
$b = &$a; // "&$"ifadesiyle referans atama gerçekleşir
$a = 10; // $a'yı değiştirmek, $b'yi etkiler
echo $b; // Çıktı: 10
