<?php
/*Data types*/

#scalar types 
    #bool  = true-false(sadece iki değerden birini alabilir)
    $tamalandi = true;

    #int   = 1,0,-2(tam sayılardır)
    $skor = 75;

    #float = 1.5, 0.005, -12,05 (tam olmayan sayılardır)
    $fiyat = 0.75;

    #string= düz yazı, text
    $hello = 'hello, mom';

echo $tamalandi.'<br/>';// çıktı: 1
echo $skor.'<br/>';     // çıktı: 75
echo $fiyat.'<br/>';    // çıktı: 0.75
echo $hello.'<br/>';    // çıktı: hello mom


echo gettype($tamalandi).'<br/>';
echo gettype($skor).'<br/>';
echo gettype($fiyat).'<br/>';
echo gettype($hello).'<br/>';

var_dump($fiyat);
var_dump($hello);
#compound types
    #arrays
    $grup = [0, 1 , 1.5, true, 'birinci grup'];
    print_r($grup);
    #object
    #callable
    #iterable


    /*declare(strict_types=1); //strict_types bildirimi, komut dosyasındaki ilk ifade olmalıdır.
    function sum(int $x, int $y){
        var_dump($x,$y);
        echo '<br/>';
        return $x + $y;
        
    }
    $sum = sum(2,3); //declare(strict_types=1) yüzünden eğer x ve y integerden başka bir değer alırsa erorla karşılaşırız.
    echo $sum;
    echo '<br/>';
    var_dump($sum);
    */