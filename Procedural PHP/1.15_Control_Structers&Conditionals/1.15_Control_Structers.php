<?php

## Control structers(**Kontrol Yapıları)
/*
kontrol yapıları, ifadelerin bir programda 
yürütülme sırasını belirleyen programlama yapılarıdır.
*/
####if
//"if"den sonra gelen ifade doğru ise çindeki koşulu yazdırır.
$score=95;
if($score >=90){
    echo 'A';
}

####else
//if'den sonra gelen ifade true değilse
//else denilen bir koşul ekleyerek bu kodun çalıştırılmasını sağlarız.
$score=95;
if($score >=90){
    echo 'A';
} else{ 
    echo 'F';
}

####elseif
$skor=90;
if($skor >=90){
    echo 'A';
} elseif($skor >=80){
    echo 'B';
} elseif($skor>=70){
    echo 'C';
} elseif($skor>=60){
    echo 'D';
}
else{ 
    echo 'F';
}

#### koşul içinde koşul
/*Aşağıda cold repitation yaptık. yani aynı şeyi sürekli tekrar ettik ki bu kod yazarken istenilen birşey değildir. bunun nasıl önüne geçeceğimizi ilerleyen derslerde göreceğiz*/

$skor=65;
if($skor >=90){
    echo 'A';

    if($skor>=95){
        echo'+';
    }
} elseif($skor >=80){
    echo 'B';

     if($skor>=85){
        echo'+';
    }
} elseif($skor>=70){
    echo 'C';

     if($skor>=75){
        echo'+';
    }
} elseif($skor>=60){
    echo 'D';

     if($skor>=65){
        echo'+';
    }
}
else{ 
    echo 'F';
}
####Alternatif bir syntax
