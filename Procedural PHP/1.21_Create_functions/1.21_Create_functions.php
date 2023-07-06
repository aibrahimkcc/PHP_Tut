<?php
//Bir işlev oluşturduktan sonra onu çağırmalıyız. yoksa kendiliğinden çalışmaz.
function helloyaz(){
    echo 'hello world';
}


helloyaz();

//----------------------------------
function hellodcevir(){
    return 'hello döndürür.';
}

$x = hellodcevir();
echo $x;

//işlevin içi boş ise null değerini return eder.

function bos(){
    
}
var_dump(bos());

## önce işlevi tanımlayıp sonra çağırmak zorunda değilsin

before();

function before(){
    echo 'sonradan işlevi tanımladım <br/>';
}

## koşulun içinde function tanımlarsan yalnız tanımdan sonra o ifadeyi çağırabilirsin.
//aşağıda undefined function hatası alırsın.
// error almamak için foo fonksiyonunu aşağı almalısın

#var_dump(foo());
if(true){
    function foo()
    {
        return 'Hello';
    }
}
var_dump(foo());

## işlev içinde işlev tanımlarsan önce ilk işlevi sonra ikinci işlevi çağırmalısın.
//
// Aşağıda ilk() ile ikinci() işlevin yerini değiştirirsen hata alırsın.


ilk();
ikinci();

function ilk(){
    echo 'ilk';
    function ikinci(){
        echo 'ikinci <br/>';
    }
}

## return işlevler ve data tipleri.
// dinamik olarak php 1'in integer olduğuna karar verdi

function type(){
    return 1;
}
var_dump(type());

//işlevlerde type hinting.
//"()"den sonra ":" işareti konulur ve çevrilmesi istenen tip yazılır.
// | işareti ile birden fazla data tipi beklenebilir
function hinttype():int /*|string|array|void|float|mixed*/ {
    return '1'/* ["array, integere çevrilemez"]*/  ;
}
var_dump(hinttype());
// array integere çevrilemediğinden eğer array return edilirse error verecektir.
// integer değer istediğimiz halde girdi integer değil ama error vermiyor. çünkü declare(strict_type=1) etkinleştirilmemiştir.

##ETC
// ? işareti ifadesi ile beklenen değerin integer veya null olabileceği gösteriliyor.

function bar(): ?int{
    return null;
}
var_dump(bar());