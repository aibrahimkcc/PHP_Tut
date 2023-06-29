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
