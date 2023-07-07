<?php
declare(strict_types=1);
//strict type kullan hocam gereksiz bugların önüne geç
//"()"parantez içine "," ile ayrırarak istenildiği kadar parametre eklenebilir.
//$x ve $y parametrelerdir.
//4 ve 6 değerleri ise argümanlardır.
function sum($x,$y){
    return $x+$y;
}

echo sum(4.05,'6');

//parametrelere de type hinting yapılabilir.
//hint yapıldıktan sonra bu değerlere hint edilen türden başka data veremezsiniz.
//"|" işareti ile birden fazla tip hint edilebilir.
// aşağıdaki fonksiyonda argüman olarak float verirseniz error yersiniz.
function topla(int|string $x,int|string $y){
    return $x+$y;
}

echo topla("4",6);

##default değer atamak
//argümanlardan sonra "=" işareti konulur ve istenilen yazılır.
//önce zorunlu parametreleri topluca sonra defaultu olan parametreleri YAZ yoksa ERROR...
function toplam(int|string $x,int|string $y=31){
    return $x+$y;
}
//x veye y parametresine argüman gönderilmediğinde "=" işaretinden sonra verilen değerler yazılır.

echo toplam(69,);

//argümanlar default olarak değere göre atanır.
//argümanları Referansa göre atamak için:
//$a=&$x oldu
//bu durumda $x sonradan 3'e değerini aldığından $a da 3 değerini alacaktı
//& ifadesini kaldırırsanız $a 6 olmaya devam edecktir.
#declare(strict_types=1);

function ref(int|float &$x, int|float $y=10): int|float{
    if($x% 2===0) {
        $x/=2;
    }
    return $x*$y;
}

$a=6.0;
$b=7;
echo ref($a,$b).'<br/>';

var_dump($a,$b);

##Variadic Function ve Splat operatörü(...).
//... ile fonksiyonun içine array olan bir parametre ekleyebiliriz.
function total(...$numbers):int|float{
   $t=0;
    foreach($numbers as $number){
        $t+=$number;

   }
    return $t;
}
$a=6.0;
$b=7;
echo total($a,$b,50,45,88);

echo '<br/>';

#zaten php'nin array toplama formülü var onu kullanabilirsin.
//array_sum() formulü ile array içini toplat.
//neden splat(...) operatörü kullanıyoruz._?
//splat opreatörü arrayleri unpack yapıyor da ondan  

function tot(int|float $x,int|float $y,int|float|string ...$numaralar):int|float{
    return $x +$y+array_sum($numaralar);
}
$a=6.0;
$b=7;
$splatnedeni=[10,11,55,"22"];
echo tot($a,$b,54,"47","23",...$splatnedeni);

echo '<br/>';

## İsimlendirilmiş argümanlar.

function ad(int $x,int $ya):int {
    if($x%2 ===0)
    {return $x/$ya;}
    return $x;
}
$x=6;
$y=3;

//y parametresine $y'yi 
//x parametresine $x' argümanını sokar.
//adlandırmayı yapmazsan sırasıyla parametrelere argümanları yazar.
echo ad(ya: $y, x: $x);

$array=[10,'ya' =>2 ]; //key varsa argüman adı olarak kullanır. yoksa sırayla parametreler yazar.

echo ad(...$array);


