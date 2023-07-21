<?php
#Unix timestamps(unixde zaman)
//php time() fonksiyonu ile çalıştığı serverdeki zamanı unix timestamp standardında integer olarak gösterir.

echo time() .'<br/>';

//zamana saniye olarak ekleme yapabiliriz hadi gelin 5 gün ekleyelim
//60*60*24*5=60x60 1 saattir 24 le çarpıp günü. 5 le çarpıp 5 günü buluruz.

$currenttime= time();
echo $currenttime + 5*24*60*60 .'<br/>';
echo $currenttime - 5*24*60*60 .'<br/>';

//bu integer zaman verilerini nasıl okunulabilir formatta yazıcaz.
//https://www.php.net/manual/en/datetime.format.php
//date fonksiyonu kullanıcaz, 2 tane argüman kabul eder. 1.si hangi formatta yazacağımızdır. 2.si ise hangi timestamp istediğimizdir. ikincisini boş bırakırsak default olarak şimdiki zaman verisini kullanır.
 
echo date('H:i d/n/Y ').'<br/>';

echo date('H:i d/n/Y ', $currenttime + 5*24*60*60).'<br/>';
//default olarak hangi zaman dilimini kullanıdığımızı görmek için.
echo date_default_timezone_get().'<br/>';

//php default olarak serverin zamanını kullanır bunu değiştirmek için;
//https://www.php.net/manual/en/timezones.php time zone list
date_default_timezone_set('Europe/Istanbul');
echo date_default_timezone_get().'<br/>';
echo date('H:i d/n/Y ').'<br/>';

//"UTC kullanmak herzaman faydalıdır bkz(greenwich universal time )"

//istenilen bir tarihin yazmasını istersek

$x= mktime(9,15,0,11,10,1938);
echo date('H:i d/n/Y',$x).'<br/>';

//başka bir şekilde iste
//https://www.php.net/manual/en/datetime.formats.relative.php
    echo date('H:i d/n/Y', strtotime('2023-01-18 00:52:00')).'<br/>';
echo date('H:i d/n/Y', strtotime('last day of february 2020')).'<br/>';


//date_parse
$b=date('H:i d/n/Y', strtotime('2023-01-18 00:52:00'));
$a=date('H:i d/n/Y', strtotime('last day of february 2024'));

echo '<pre>';
//$b değişkeni verildiğinde data_pare-from-format doğru çalışyor çünkü istenilen şekil''H:i d/n/Y' ile timestamp olarak girilen argüman aynı sıralamaya sahip
print_r(date_parse_from_format('H:i d/n/Y',$b));
echo '</pre>';

