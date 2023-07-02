<?php
// "@" Eror Control Operatörü
// kullanılması önerilmez.
// aşağıdai ifade eror verecek iken @ ile vermesi engellenir.
$x= @file('foo.txt');
###Increment/Decrement operators

//// Post (gelecek)Increment/Decrement
//önce değişken çağrılır ve değişkene 1 eklenir veya çıkartılır.
$x = 5;
echo $x++;//çıktı 5 olacaktır. $x değişkeni önce print edilmiştir.
echo $x; // çıktı 6 olacaktır çünkü $x'e yukarıda 1 eklenmiştir.

$x = 5;
echo $x--;
echo $x;

////Pre(ön) Increment/Decrement
//1'e veya -1'e değişken eklenir. değişkenin değeri değişmez.

$x = 5;
echo ++$x;//çıktı 6 olacaktır çünkü 1'e $x değişkeni eklenmiştir.

$x=5;
echo --$x;//çıktı 4 olacaktır çünkü 1'den $x değişkeni çıkartılmıştır.

// Increment(++)/Decrement(--) operatörleri sadece sayıları ve stringleri etkiler.

$x=true;
echo ++$x;//çıktı : 1 

$x=null;
echo ++$x;//çıktı: 1

//stringlerde
$x='abc';
echo ++$x; //stringin son harfini alfabetik sıraya göre bir sonrakine yükseltti.
//Decrement operatörü string üzerinde bir etki yaratmaz.

##Logical(Mantıksal) Operatörler.
// (&&,||, !,and , or , xor)
//mantıksal operatörler ile birden fazla koşulu bir araya getirebiliriz.

#### (&&) Ve, Operatörü
//iki koşulda doğruysa, geçerli olarak değerlendirilir.
$x=true;
$y=false;

var_dump($x && $y);

//PHP type conversion'u kendisi yaptığı için ille bool türünde değer girmeye gerek yoktur.
$x=1;
$y=1;

var_dump($x && $y);

#### (||) veya, operatörü
// koşullardan bir tanesinin bile true olması yeterlidir.
$x=1;
$y=0;
var_dump($x||$y);//true

#### (!) negotiation(anlaşma) operatörü
//binary bir operatör olan (!) değeri zıttına çeviri.

$x=1;
$y=0;

var_dump(!$x||$y);//false çıkar çünkü ! operatörü $x'i zıttına çevirir.

#### &&, ||, and , or
//her ne kadar && ile and aynı gibi dursa da aralarında öncelik(precedence) farkı vardır.
//her ne kadar "||" ile "or" aynı gibi dursa da aralarında öncelik(precedence) farkı vardır.
$x=true;
$y=false;
$z= $x && $y;// false çıkması beklenir ve çıkar.
var_dump($z);

//and" ile deneyince true çıkar
$x=true;
$y=false;
$z= $x and $y; // "=" operatörünün önceliği vardır. $z değişkeni $x değişkenine atanmış olur bu işlemden sonra atama işlemi gerçekleşmediği için $z true kalmaya devem eder. 
var_dump($z);

#### Short Circuting(Kısa devre)
//mantıksal operatör bir kısım değerlendirme yaptıktak sonra başka bir değerlendirmeye gerek kalmadığı için geri kalanları değerlendirmeyi bırakmasıdır.
// burada $y operatörü değerlendirilmez çünkü || operatörü için 1 tane true değerinin olması yeterlidir.
$x=true;
$y=false;
$z= $x || $y; 
//örnekler bakalım

$x=true;
$y=false;
function hello(){
    echo 'hello';
    return false;
}
var_dump($x || hello()); // $x true olduğı için "hello()" fonksiyonu değerlendirilmedi
//şimdi hello fonksiyonunu öne koyalım bakalım
var_dump( hello() ||$x); // hello fonksiyonu değerlendirildi. ve hello'da print edildi.


##bitwise Operatörleri(&, |, ^, ~, <<, >>)
//binary işlem yapmaya yarar. sanki ışıkları açıp kapatıyor gibi düşünelim.
// bitwise işlemlerle kriptolama işlemleri, bilgi saklama işlemleri yapılabilir. bu konulara ilerleyen derslerde girilecektir.

#### (&) = && işleminin aynısıdır sadece rakamları önce binary formata dönüştürür ve işlem yapar.
$x= 6;  //binary hali :110
        //            :&
$y= 3;  //binary hali :011
        //            :-----
        //1 ve 0 =     0
        //1 ve 1 =      1
        //0 ve 1 =       0
        //Sonuç  =    :010 bu binary'i decimal'e çevirisek sonuç 2 olur
var_dump($x & $y);

#### (|) = || işleminin aynısıdır sadece rakamları önce binary formata dönüştürür ve işlem yapar.

$x=6;
$y=3;
// 110
// |
// 011
// -----
// 111 =7
var_dump($x |$y);

#### (^)= xor (xor dediğimizde iki değerden sadece 1 tanesi doğruysa doğru yazdırmasıdır.)
$x=6;
$y=3;
// 110
// ^
// 011
// -----
// 101 =5
var_dump($x^$y);

####(~) = !
$x=6;
$y=3;
// 110
// ~ operatörü 1 leri 0, 0'ları 1 yapar.
// 001
// &
// 011
// -----
// 001 =1
var_dump(~$x&$y);
#### (<<<) bitleri sola kayıdır. bitleri sola kaydırmak sayıyı iki ile çarpma sonucunu doğurur.
#### (>>>) bitleri sağa kayıdır. bitleri sola kaydırmak sayıyı iki ile bölme sonucunu doğurur.
$x=6;
$y=3;
// 110
// <<("y" üç olduğu için 3 tane 0 ekledik)
// 110000=48
var_dump($x<<$y);//$x deki bitleri $y değeri kadar sola kaydırır.

echo '<br/>';
## Array operatörleri(+, == , ===, !=,<>, !==)
#### (+) array operatörü
// eğer önce gelen array içindeki indexlerde 
//tanımlı değer yoksa arrayleri üstüne yazmadan birleştirir
$x=['a','b','c'];
$y=['d','e','f','g'];
$z = $x + $y;
print_r($z);// bir tek "g" eklendi çünkü diğerlerinin indexleri aynı idi.

#### (==) loose comparison array operatörü
// iki array'de de  indexler aynı değerler aynı ise true olarak değer döndürür.
// değerlerin aynı tip olmasına veya sıralamaların aynı olmasına gerek yoktur.

$x=['a' => 1,'b' =>'2','c' =>'3'];
$y=['a' => '1','c' =>'3','b' =>'2'];

 var_dump($x==$y);

 #### (===) strict comparison array operatörü
// iki array'de de  indexler aynı değerler aynı ise ve
// değerlerin aynı tip  ve sıralamaların da aynı olması halinde true döndürür. yoktur.

$x=['a' => '1','b' =>'2','c' =>'3'];
$y=['a' => '1','b' =>'2','c' =>'3'];

 var_dump($x===$y);
 #### != , !== aynı şekilde 

##Execution operatörleri(``): bunu kullanacak yer pek de  yokmuş
## Type Operatörleri: sonra görücez
##Nullsade Operatörleri: sonra görücez