<?php
//strict type etkinleştirilince type conversion'u engelliyordu.
//$x'e girdiyi string verince eror verdi.
//strict type sadece bu dosya için geçerli olur.
//bu fonksiyonu başka bir dosyadan çağıralım ve orada string verelim.
//eror vermediğini göreceksiniz.
declare(strict_types=1);

function sum(int $x, int $y){
return $x+$y;
}
//echo sum('1',2);