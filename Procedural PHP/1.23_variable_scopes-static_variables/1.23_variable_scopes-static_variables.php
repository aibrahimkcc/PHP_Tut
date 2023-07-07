<?php
// variable scopes//
// i

$x=5;
//fonksiyonun içindeki her değişken local scope'a sahiptir. her ne kadar globalde $x tanımli ise de şuan $x tanımsızdır.
/*
function foo(){
    echo $x;
}
foo();
*/
//Sorunun çözümü için ya fonksiyonun içinde $x'i tanımlamalı ya da $x'i parametre olarak fonksiyona eklemeliyiz.
/*
$x=5;
function foo($x){
    #$x=5;
    echo $x;
}
foo($x);
*/
// Bir başka yol ise fonksiyon içine **global** $x ile değişkeni içeri çekmektir. bu şekilde fonksiyonun içine çektiğin değişken asıl değişkene referansla atanmış olur. yani değişken içinde $x'e değer atarsan global de de $x değişmiş olur.
/*
$x=5;
function foo(){
    global $x;
    //$x=10;
     echo $x;
}
foo();
//echo $x;
*/

//$GLOBALS bütün global değişkenlerle ilişkili olan bir değişkendir. $x global bir değişken olduğu için $GLOBALS['x'] ifadesi $x demekle aynı şeydir ancak $GLOBALS['x'] ifadesi ile global değişken local alanlara çekilebilir.
/*
$x=5;
function foo(){
    echo $GLOBALS['x'];
    $GLOBALS['x']=10;
    //$x=10;
     
}
foo();
echo $x;
*/

## Static Variables
//normal değişkenler kapsam sınırının dışında yok edilirken statik değişken yok olmaz ve değerini korur.
//2'şer saniyeden toplan 6 saniye bekledik. ama aynı değeri çevirmiştik.
/*
function getValue(){
    $value= SomeVeryExpensiveFunction();

    return $value;
}

function SomeVeryExpensiveFunction(){
    sleep(2);
    return 10;    
}

echo getValue().'<br/>';
echo getValue().'<br/>';
echo getValue().'<br/>';
    */

//static key word. ile birlikte sadece 2 sn bekleriz. çünkü static kullanıldığı fonksiyonu ilkez okurken bütün adımları okur ancak bir daha çağrıldığında sadece son return edileni yazdırır.
function getValue(){
    static $value= null;

    if($value===null){
        $value= SomeVeryExpensiveFunction();
    }

    return $value;
}

function SomeVeryExpensiveFunction(){
    sleep(2);
    echo 'işlemde';
    return 10;    
}

echo getValue().'<br/>';
echo getValue().'<br/>';
echo getValue().'<br/>';
