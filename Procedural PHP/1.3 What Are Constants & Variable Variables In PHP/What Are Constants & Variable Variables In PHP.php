<?php 
/* Değişken kullanımı
$isim = 'kemal';
$isim = 'ali';
echo $isim; //çıktı: ali
*/

/*Bir kere define edilen sabiti bir daha define ederek değiştiremezsin.
define('NAME', 'ali');
echo NAME;
*/
/* Const control ifadelerinin içinde çalışmaz

const STATUS_PAID = 'PAID';
echo STATUS_PAID;

if(true){
    //const DOESNT_WORK = 'Syntax eror';
    define('THIS','works');
    echo THIS;

};
*/
/* Dinamik sabit oluşturmak
$paid ='PAID';
define('STATUS_'.$paid, $paid);
echo STATUS_PAID;
*/
echo PHP_VERSION;
echo __LINE__;
$foo='bar';
$$foo='baz';    // $foo değişken "bar" ifadesine atanmıştır. $$foo demek $bar demektir.
                //Artık $bar adında yeni bir değişkenimiz vardır.
echo $bar.${$foo}.'ikiside baz yazdırır.';
echo "$bar , ${$foo}, {$$foo}";