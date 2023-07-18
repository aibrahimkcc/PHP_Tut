<?php
require 'prettyPrintArray.php';
//Dizileri daha güzel yazmak için bir fonksiyon oluşturduk git incele.

#Array_chunk

//array chunk 2 tane zorunlu 1 tane opsiyonel değer alır.
//ilk değer array olmak zorundadır,
//ikinci değer integerdir.
//diziyi integer değeri kadar parçalar.
//3.sü default olarak false'dur ve elemanların indexlerini korumaz.
//3.sünü true yaparsan örneğin 1'in index'i 'a' olmaya devam eder.

$items =['a'=>1,'b'=>2,'c'=>3,'d'=>4, 'e'=>5];


PrettyPrintArray(array_chunk($items,2,true));

PrettyPrintArray($items);

#array_combine(array $keys, array $values):array
// ilk parametresindeki dizinin elemanlarını ikinci parametresindeki elemanların index'i haline getirir.
//eğer eleman sayıları aynı değil ise eror veriyor.
$array1= ['a','b','c'];
$array2= [5,10,15];

PrettyPrintArray(array_combine($array1,$array2));

#array_filter(array $array, callable|null callback=null, int $mode=0):array

//aşağıdaki kümeden tek elemanları silelim
$array=[1,2,3,4,5,6,7,8,9,10];

//index'leri korumaya devam eder.
//key argümanı kullanılırsa indexler ilk atanan değişkene atanmış olur.
//both kullanılırsa 2 farklı argüman sunulabilir. 1.si elemanlar için 2.si indexler için.
//callable yazmak ihtiyaridir. kullanılmaz ise array içindeki false değerli siler.

$even= array_filter($array, fn($x)=>$x%2===0);
PrettyPrintArray($even);

$even1= array_filter($array, fn($x)=>$x%2===0, ARRAY_FILTER_USE_KEY);
PrettyPrintArray($even1);

$even2= array_filter($array, fn($x,$key)=>$x%2===0, ARRAY_FILTER_USE_BOTH);
PrettyPrintArray($even2);


//indexleri korumak için
//array_values indexleri array sırasına göre 0'dan geri verir.

$even = array_values($even);

PrettyPrintArray($even);

#array_keys
//arrayin indexleri için yeni bir array oluşturur.


$a=['a'=>1,'b'=>2,'c'=>3,'d'=>4, 'e'=>5, 'f'=>2];
$keys=array_keys($a);
PrettyPrintArray($keys);

//özel bir elemanın key'ini istiyorsak ikinci olarak o değer girilir. strict comparison istiyorsak 3.paratmetrete true argümanı verilmeli
//'2 değeri'de boş bırakırsak bütün arrayin keylerini alırsın.

$a=['a'=>1,'b'=>2,'c'=>3,'d'=>4, 'e'=>5, 'f'=>'2'];
$keys=array_keys($a,2,true);
PrettyPrintArray($keys);

//array_map
//arrayin içindeki değerlerin hepsine bir işlem yapmak için kullanılır.
//ve indexleri korur

$b=[1,2,3,4,5,'a'=>6];
PrettyPrintArray(array_map(fn($numbers)=>$numbers*3,$b));

//birden fazla array kullanmak için.
//birden fazla array kullanıldığında arrayleri 0'lar
//eleman sayısı uyuşmaz ise eror vermez yeni eleman oluştur ver değeri 0'dır.
$c=['a'=>1,'b'=>2,];
$d=['d'=>4, 'e'=>5, 'f'=>2];
PrettyPrintArray(array_map(fn($numbers1,$numbers2)=>$numbers1+$numbers2,$c,$d));

//bu null işini anlamadım.
PrettyPrintArray(array_map(null,$c,$d));


##array_merge
//aynı elemanlar bile olsa overwrite etmez,
//inexleri 0'dan tekrar oluşturur.
//ancak indexler integer değilse değerlerini korur. ve bir daha aynı index kullanılırsa overwrite yapar.
$array1=[1,'a'=>2,'5'=>3];
$array2=[4,5,6];
$array3=[9,8,7,'a'=>10];

PrettyPrintArray(array_merge($array1,$array2,$array3 ));

##Array_reduce
//array içindeki tek bir verinin çekilmesi ve onla işlem yapılması sağlanır.

$invoiceitems=[
    ['price'=>10.00, 'qty'=>3, 'desc'=>'Item1'],
    ['price'=>2.00, 'qty'=>1, 'desc'=>'Item2'],
    ['price'=>1.20, 'qty'=>4, 'desc'=>'Item3'],
];

$total=array_reduce($invoiceitems,fn($sum,$item)=>$sum + $item['qty']*$item['price']);

echo $total;

function kemal($toplam,$items){
    return $toplam+$items['price']*$items['qty'];
    
}
var_dump(is_callable('kemal'));
$totals=array_reduce($invoiceitems,'kemal',10);
echo $totals;

#array_search(aranacka değer, aranacak $array)
//büyük küçük harf önemlidir.
//Comparison yaparken strict kullan yoksa index'i 0 olan bir eleman yüzünden false' değerini tetikleyebilirsin.


$array=['a','b','c','D','E','ab','bc','cd','b','d'];
$key=(array_search('a',$array));


if($key===false){
    echo 'Letter not found';
} else{
    echo 'letter found at '.$key;
}

var_dump($key);

if(in_array('a',$array)){
    echo 'Letter  found';
}

#array_diff() 
//ilk verilen arrayde bulunan ve diğer arraylerde bulunmayan elmanları yazdırır.
//array diff sadece değerlerin aynı olmasına bakar keylere bakmaz.
$array1= ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$array2= ['f'=>4, 'g'=>5, 'i'=>6, 'j'=>7, 'k'=>8];
$array3= ['l'=>3, 'm'=>9, 'n'=>10];

PrettyPrintArray(array_diff($array1,$array2,$array3));

#array_diff_assoc()
//ilk arreyde key olarak bulunan ve diğer arraylerde key olarak bulunmayanları yazdırır.
//key ve karşısındaki değer aynı olmalı
$array1= ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$array2= ['d'=>4, 'g'=>5, 'i'=>6, 'j'=>7, 'k'=>8];
$array3= ['l'=>3, 'm'=>9, 'n'=>10];

PrettyPrintArray(array_diff_assoc($array1,$array2,$array3));

#array_diff_key()
//ilk arrayin sadece keylerine bakar. diğer arraylerde de aynı key varsa o değeri yazmaz.

#asort()
//array içini  değerlerine göre sıralar ve indexleri muhafaza eder.

$array1= ['b'=>2,'a'=>1 , 'd'=>4,'c'=>3, 'e'=>5];

PrettyPrintArray($array1);
asort($array1);
PrettyPrintArray($array1);

#ksort()
//key değerlerine göre sılaralr
$array1= ['b'=>2,'a'=>1 , 'd'=>4,'c'=>3, 'e'=>5];
asort($array1);
PrettyPrintArray($array1);

#usort()
//callback fonksiyona göre sıralamanın yapılmasını sağlar.
//indexleri muhafaza etmez.
$array1= ['b'=>2,'a'=>1 , 'd'=>4,'c'=>3, 'e'=>5];
usort($array1,fn($a,$b)=>$a<=>$b);
PrettyPrintArray($array1);

function asd($a,$b){
    return $b<=>$a;
    
}
usort($array1,'asd');
PrettyPrintArray($array1);

#array_destructing

$array=[1,2,3,4];
list($a, $b,$c,$d)=$array;
echo $a,$b,$c,$d;

echo '<br/>';

$array=[1,2,3,4];
list($a, ,$c,$d)=$array;
echo $a,$d,$c;

echo '<br/>';

$array=[1,2,[3,4]];
[$a, $b, [$c, $d]]=$array;
echo $b, $a, $c, $d;
echo '<br/>';

$array=[1,2,3];
[2=>$a, 0=>$b,1=>$c]=$array;
echo $a,$b,$c;