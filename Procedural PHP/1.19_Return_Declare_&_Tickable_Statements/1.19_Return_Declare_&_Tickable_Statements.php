<?php
##Return
//Bir işlevin içinde "return" ifadesi kullanıldığında, bu işlevin yürütmesini durduracak ve verilen argümanı döndürecektir.

function topla(int$x, int$y){
    $z = $x+$y;
    return $z;
}

$sonuc= topla(2,4);
echo $sonuc;

echo '<br/>';
echo 'Hello, World';

//return ifadesini global ortamda kullanırsanız scripti' durdurur.

function toplam(int$x, int$y){
    $z = $x+$y;
    return $z;
}

$sonuc= toplam(2,4);
echo $sonuc;

//return ifadesini global ortamda kullanırsanız scripti' durdurur.
//ve return'ün altına kalan kod çalıştırılmaz.
//return'e bir değer atamak opsiyoneldir. atamazsanız null döndürür.
//return;
echo '<br/>';
echo 'Hello, World';

## Declare-Ticks
//Tick aslında kod okunurken ki izlenen adımlardır.
//her ifadenin bir tick'i yoktur.

//bu tickleri görmek için bir fonksiyon yazalım.
// ve bu fonksiyonu "register_tick_function()" fonksiyonuna bağlayalım. 

function her_tickte_tick_yaz(){
    echo 'Tick<br/>';
}
register_tick_function('her_tickte_tick_yaz');
declare(ticks=3);   //declare(tick=x) ifadesi ile kaç tickte bir tickleme işleminin yapılcağı gösterilir.
                    //her 3 statement'den sonra tick yazdır
$i=0;
$lengt=10;

while ($i<$lengt){
    echo $i++.'<br/>';
}
