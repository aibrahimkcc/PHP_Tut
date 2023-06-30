<?php
//hatırlarsak string'in içindeki bir karakteri çağırmak istediğimizde şöyle bir şey yapıyorduk.7
$name = 'kemal';
echo $name[0]; // bu bize stringdeki 1. karakteri veriyordu.
echo $name[-1]; // ise bize stringdeki sonuncu karakteri veriyordu.

//arrayde -1'li bir index olmadığı için sondan bu şekilde eleman çağıramayız.
echo '<br/>';


$programinglanguage=['PHP','Java','Python']; // bu aynı zamanda şu ifadededir $programinglanguage= array('PHP','Java','Python');
//index 0 dan başlar
echo $programinglanguage[0];


//"echo $programinglanguage[-1];" diye bir array yazdırdığımızda arrayde böyle bir **key** tanımlanmamıştır diye hata alırız.
// array'de tanımlanmamış bir şey aslında null'dur.
$x = $programinglanguage[3];
var_dump($x);

echo '<br/>';

// ## Bir index'in arrayde tanımlı olup olmadığına bakmak
// varsa true yoksa false

$programinglanguage=['PHP','Java','Python'];
var_dump(isset(($programinglanguage[3]))); 
// 3 numaralı bir index olmadığı için false döner.

echo '<br/>';


// ## Array içindeki bir item'i değiştirmek
// print_r ile array daha güzel bir şekilde yazdırılabilr.
$programinglanguage=['PHP','Java','Python'];

$programinglanguage[1] ='C++';

var_dump($programinglanguage);
echo '<br/>';
print_r($programinglanguage);
echo '<br/>';

//daha da hoş olsun dersen

echo '<pre>';
print_r ($programinglanguage);
echo '<pre/>';


# array deki eleman sayısını bulma lenght

$programinglanguage=['PHP','Java','Python'];
echo count($programinglanguage);

#array'e eleman eklemek

$programinglanguage=['PHP','Java','Python'];

$programinglanguage[]='C++';
echo '<pre>';
print_r ($programinglanguage);
echo '<pre/>';

#array'e birden fazla elema eklemek
$programinglanguage=['PHP','Java','Python'];

array_push($programinglanguage,'c++','c','c#');
echo '<pre>';
print_r ($programinglanguage);
echo '<pre/>';

#array'de key'i özel olarak belirlemek

$programs= [
    'php' => '8.0',
    'python' => '3.9'
];
echo $programs['python'];

#array'e özel key'li eleman eklemek

$programs= [
    'php' => '8.0',
    'python' => '3.9'
];
$programs ['go'] = '1.5';
echo '<pre>';
print_r ($programs);
echo '<pre/>';

//Bir başka yolu
$programs= [
    'php' => '8.0',
    'python' => '3.9'
];
$newlanguage='go';
$programs[$newlanguage] = '1.15';
echo '<pre>';
print_r ($programs);
echo '<pre/>';
#array içine birden farklı data tiplerini içerebilir.

$program =[
    'php'=>[
        'creator'=> 'rasmus',
        'website'=> 'www.php.net',
        'isOpenSource' => true,
        'versions'=>[
            ['version' => 8 , 'relase date' => 'Nov 26, 2020'],
            ['version' => 7.4 ,'relase date' =>'Nov 28,2019'],
        ],
    ],

    'python'=>[
        'creator'=> 'Rossum',
        'versions'=>[
            ['version' => 3.9, 'relase date'=>'oct 5,2020'],
            ['version'=> 3.8, 'relase date' =>'oct 14,2019']
        ],
    ]

];

echo '<pre>';
print_r($program);
echo '</pre>';
//arraydeki eleman çağırmak

echo $program['php']['website'];
echo $program['python']['versions'][0]['version'];

#arraydeki key'in tekrar kullanılması

$array = [true => 'a', 1 =>'b', '1'=>'c', 1.8=>'d', null=>'e'];
print_r($array);
echo $array[''];
//true 1' dönüştü, int bir string 1 dönüştü, string zaten 1, 1.8 float da 1 dönüştü
//keyler aynı olunca son sırada yazılanın değeri okunur.

#array'e bir sayı olarak key atamak
//en büyük index sayısından devam eder 51 52.
$array =['a','b','50'=>'c','d','e'];
print_r($array);

#arrayden bir elemanı silmek
$array =['a','b','50'=>'c','deli'=>'d','e'];
// son elemanı siler
array_pop($array);
print_r($array);

//ilk elemeanı siler ve indexleri 0 dan başlatır ama key numara değilse sabit kalır.
array_shift($array);
print_r($array);

//unset ile array'den eleman silmek indexleri değiştirmez.
$array =['1','2','50'=>'3','4'];
unset($array['50']);
print_r($array);

#casting to array
$x= 5;
var_dump((array)$x);//[0]=>int(5)
$x='string';
var_dump((array)$x);//[0]=>string(6) "string"

## array o indexe sahip eleman var mı yok mu?

$array=['a'=>1 ,'b'=>null];
var_dump(array_key_exists('b', $array)); // böyle bir key varmı ?
var_dump(isset($array['b']));// bu key'e bir değer atanmış mı ?