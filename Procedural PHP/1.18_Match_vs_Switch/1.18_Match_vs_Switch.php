<?php

//switch loose comparison yaparken; match strict comparison yapar.
//Status '1' şeklinde string olarak tanımlarsak switch string'i integer'e çevirip karşılaştrıma yapar.
//match ise data'nın türünü değiştirmeden karşılaştırma yapar. bu nedenle eror verir.
$Status=2;

switch($Status){
    case 0 :
        echo 'paid';
        break;
    
    case 1 :
        echo 'declined';
        break;

}
echo '<br/>';
//match bir expression'dur yani bir değişkene atanabilir
//match içinde break kullanmaya gerek yoktur.
//match (exhaustive) yani aranılan değer match'de bulunmaz ise eror verir.
//bu nedenle default tanımlamak önemlidir.


$x = match($Status){
    0 => 'paid',
    1 , 2 => 'declined',
    default =>  'Unknown Status',

};

echo $x;