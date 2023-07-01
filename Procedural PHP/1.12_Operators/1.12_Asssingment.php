<?php
$x=5;
// "=" sağdaki değeri soldaki değişkene atar.

$x = $y = 10;
var_dump($x,$y);

//"$x *= 3" bu ifadenin başka gösterimi "$x = $x*3"
//"$x+=3" bu ifadenin başka gösterimi "$x = $x+3"
//"$x-=3" bu ifadenin başka gösterimi "$x = $x-3"
//"$x/=3" bu ifadenin başka gösterimi "$x = $x/3"
//"$x%=3" bu ifadenin başka gösterimi "$x = $x%3"
//"$x**=3" bu ifadenin başka gösterimi "$x = $**3"
$x = 5;
$x *= 3; 
var_dump($x);

####string operatorü ".="
$x='Hello'. ' My';
$x.=' World';
echo $x;

## Comparison Operatörleri
//İki değeri birbiriyle karşılaştırmaya yararlar.
//"=="(loose comparison) ile "==="(strict comparison)arasındaki fark
//"=="  iki taraftaki değerin denk olup olmadığına bakar. denk ise true değerini döndürür. type conversion'u kendisi yapar.
//"===" iki taraftaki değerin hem denkliğine hem de data tipine bakar. ikisi de aynı ise true döndürür.

$x=5;
$y='5';
var_dump($x==$y);
var_dump($x===$y);

//"!=", "<>" iki taraftaki değerin denk olup olmadığına bakar. denk değil ise true değerini döndürür. type conversion'u kendisi yapar.
//"!==" iki taraftaki değerin hem denkliğine hem de data tipine bakar. bir bile aynı değil ise true döndürür.
$x=5;
$y='5';
var_dump($x<>$y);// denk olduğu için false
var_dump($x!=$y);// denk olduğu için false
var_dump($x!==$y);// denk ama data tipi aynı olmaığı için true

#### "<" küçüktür, ">" büyüktür, "<=" küçük eşit, ">=" büyük eşit
$x=10;
$y=2;

var_dump($x < $y); //false
var_dump($x <= $y); // false
var_dump($x > $y); //true
var_dump($x >= $y); //true

#### <=> 'space ship comparison
//soldaki değer sağdakinden büyükse 1
//soldaki değer sağdakinde küçükse -1
//soldaki değer sağdakine eşitse 0 döner./
//int döndüğü unutulmamalı
$x=10;
$y=10;
var_dump($x<=>$y);

#### Önemli bir bilgi
//"PHP 8"den önce bir int ile stringi karşılaştırdığınızda stringi integera çeviriyordu.
var_dump(0 =='hello'); //PHP 8 öncesi modelde bu true dönerdi çünkü string, integere çevriliyordu
//artık int'i stringe çevirip öyle bir karşılaştırma yapıyor.
var_dump(0 =='hello');//false döndü

####strict comparison neden önemli
//Aşağıdaki kodda strpos fonksiyonu, H'nin index numarasını döndürür ki bu int(0) a denk gelir. "0" bool'a convert edilir ki bu da "false" olur. false, false'a denk olduğu için true değeri gelir ve H bulunumadı print edilir. 
$x = 'Hello World';
$y = strpos($x,'H');//stringin içinde H harfini arar ve konumunu döndürür.

if($y == false){
    echo 'H harfi bulunamadı';
} else { 
    echo"H harfinin index'i ";
}

// Bir de bunu strict comparison ile deniyelim
$x = 'Hello World';
$y = strpos($x,'H');
if($y === false){// int(0)' convert edilmez. int(0), false'a eşit olmadığı için else'in içindeki kod çalışır.
    echo 'H harfi bulunamadı';
} else { 
    echo"H harfinin index'i ". $y;
}

#### Conditional(koşullu) Operatorler
//"?:" trinary operatörü 
// ilk ifade true dönerse "?" işaretinden sonrası çalışır.
//ilk ifade false dönerse ":" işaretinden sonrası çalışır.
$x = 'Hello World';
$y = strpos($x,'H');
$result = $y===false ? 'H harfi bulunamadı': 'H index\'i ' .$y;
echo $result;

//"??" null coalescing operatörü
//"??" ifadesinden önceki değer null ise ?? operatöründen sonra geleni yazdırır.
//"??" ifadesinden önceki değer null değil ise ?? operatçründen önce gelen ifade döndürülür.
$x = null;
$y = $x ?? 'Merhaba';
echo $y;
//peki tanımlanmamış bir değer ?
//tanımlanmamış bir değer null olduğu için ?? operatöründen sonra gelen ifadeyi yazdırdı.

$y = $a ?? 'Merhaba';
echo $y;

// null olmazsa ise 
$x = 456;
$y = $x ?? 'Merhaba';
echo $y;