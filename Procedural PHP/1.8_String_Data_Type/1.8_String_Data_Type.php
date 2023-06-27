<?php
$ad= 'ali';
$soyad = "kemal";
$tam_ad1= '$ad $soyad';
echo $tam_ad1;//çıktı:" $ad $soyad "olacaktır

$tam_ad2=  "$ad $soyad"."${ad}"."{$soyad}";
echo $tam_ad2;
// yukarıdaki ifadelerden her hangi biriyle değişken string içinde gösterilebilir.
// ${değişken} ifadesi kod okunurluğu açısından daha iyidir.

echo '<br/>';

$ad= 'ali';
$soyad = "kemal";

$tam_ad = $ad. ' '. $soyad;
echo $tam_ad. '<br/>';

echo $tam_ad[0]; // 0 anahtar string deki 1. karakteri çağırır ki bu "a"dır. 1. anahtar ise l dir.
//sondan çağırmak için -1, -2 kullanılır.
echo '<br/>';
echo $tam_ad[-3];

$tam_ad[0] = 'A';
$tam_ad[-5] = 'K';
echo '<br/>';
echo $tam_ad;

$ad= 'ali';
$soyad = "kemal";
echo '<br/>'.'------------------------------'.'<br/>';
$tam_ad = $ad. ' '. $soyad;
var_dump($tam_ad);//toplam 10 tane anahtar vardır.
//ilk karakterin index'i 0 ve son karakterin index'i 9 dur. 
echo '<br/>';
// eğer idex üzerinden harf eklersek dikkatli olmalıyız.
$tam_ad[15]= '?';
var_dump($tam_ad);


//heredoc


$ad='ali';
$text = <<<TEXT
1.Sıra " $ad "
2.Sıra ' $ad' değişkenler kullanılabiliyor gördüğün üzere
3.Sıra $ad

TEXT;
//doğrudan echo yaparsan bunu tek sıra halinde yazar
echo $text;
//nl2br fonksiyonu ile bu her satırın sonunda satır başı yapar.
echo nl2br($text);
