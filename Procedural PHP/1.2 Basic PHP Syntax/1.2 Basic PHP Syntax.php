<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<p>
<?php
//echo 'hello world';

//echo print 'hello world';

//echo 'Hello','?','mom';

//echo 'ali\'nin derdi';

//echo "ali'nin derdi";

//$_1Ad='Ali';
//echo $_1Ad;

/*value assing
$a = 10;
$b = $a; // $b, $a'nın değerini alır (bir kopyası)
$a = 20; // $a'yı değiştirmek, $b'yi etkilemez
echo $b; // Çıktı: 10 */

/*referans atama
$a = 1;
$b = &$a; // "&$"ifadesiyle referans atama gerçekleşir
$a = 10; // $a'yı değiştirmek, $b'yi etkiler
echo $b; // Çıktı: 10
*/

$name = 'kemal';
echo 'meraba $name';//çıktı:meraba $name
echo "merhaba $name";//çıktı:merhaba kemal
echo "merhaba {$name}";//bu da doğru ve daha okunaklı
//gördüğünüz gibi çift tırnak içinde değişken kullanılabiliyor.
echo 'merhaba'. $name;
?>

</p>
    
</body>
</html>






