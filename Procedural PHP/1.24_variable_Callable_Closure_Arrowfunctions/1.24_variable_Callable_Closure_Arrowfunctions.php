<?php

#variable functions
//variable functions'da fonksiyonun içindeki değişkene doğrudan value'göndermek için aşağıdaki yöntem izlenir.
//variable functions language construct(isset,empty,onset,print, echo,include require) ile çalışmaz.
//çalışması için çevresinde wrapper functions kullanmak gerek 
function topla(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

echo topla(1,2,3,4);


$x='topla';

echo $x(4,4);

var_dump(is_callable($x));//is_callable fonsiyonu ile $x değişkeninin bir fonksiyon döndürüp döndüremeyeceğine bakılır.

#anonymos functions(lambda functions)
//ismi olmayan değişkenlerdir.
//sonlarına ";" koymak zorunludur.


$sum =function (int|float ...$numbers): int|float{
    return array_sum($numbers);
};

echo $sum(1,2,3,4);

//hatırlarsak global scopes variables leri localde çağırınca hata alıyorduk
$y=2;
$top =function (int|float ...$numbers): int|float{
    #echo $y;
    return array_sum($numbers);
};
echo $top(1,2,3,4);

//anonymous functionlarda şu şekilde global değişkenleri içeri aktarabiliyoruz.
// use ile çağırdığım değişkeni fonksiyon içinde kullanabilirim
//localde $y'ye yeni değer versemde globaldeki değeri değişmez çünkü bunun nedeni atamanın değer göre yapılmasıdır.
//use(&$y) şeklinde kullanırsam globalde de değeri değişir çünkü atamayı referansa göre yapmış olurum.
$y=2;
$toplam =function (int|float ...$numbers) use ($y): int|float{
    echo $y.'<br/>';
    
    return array_sum($numbers);
};
echo $toplam(1,2,3,4);

#callback function
//ne zaman bir fonksiyon, bir başka fonksiyonda argüman olarak atanır ve o fonksiyonda çağrılırsa ona callback fonksiyon denir.
//bir fonksiyonu başka bir fonksiyonun içinde argüman olarak kullanabilmenin birden çok yolu vardır.

//!1 php'nin kendi fonksiyonları içinde anonymous fonksiyon:
/*
$array1=[1,2,3,4];

$array2= array_map(function($element){
    return $element*2;
}, $array1);
echo '<pre>';
print_r($array2);
echo '</pre>';

*/

//2.yol
/*
$array1=[1,2,3,4];
$z=function($element){
    return $element*2;
};

$array2= array_map($z, $array1);
echo '<pre>';
print_r($array2);
echo '</pre>';
*/

//3.yol
//string içinde fonksiyon adını yazmak
$array1=[1,2,3,4];
function foo($element){
    return $element*2;
};

$array2= array_map('foo', $array1);
echo '<pre>';
print_r($array2);
echo '</pre>';

/*
//??????????
function toplam(callable $callme, int|float ...$numbers): int|float{
    return $callme(array_sum($numbers));
}
function bar($element){
    return $element*2;
};
echo toplam('bar',1,2,3,4);
*/

/*
function toplam(callable $callme, int|float ...$numbers): int|float{
    return $callme(array_sum($numbers));
}

echo toplam(function($element){
    return $element*2;
}
,1,2,3,4);
*/

#Arrow functions

$arrayz=[1,2,3,4];

$array2=array_map(function($number){
    return $number*$number;
},$arrayz);

print_r($array2);

//cleaner version
//global değişkenleri **use** keywordünü kullanmadan çağırabiliyoruz
//$y değişkeni fonksiyon içinde değişsede globalde 5 değerini korumaya devam eder. 
//arrow fonksiyonu sadece bir tane expressiona sahip olabilir
$arrayarrow =[1,2,3,4];
$y=5;

$arrayarrow2 = array_map(fn($numberz)=>$numberz*$numberz*++$y, $arrayarrow);

print_r($arrayarrow2);
echo $y;

