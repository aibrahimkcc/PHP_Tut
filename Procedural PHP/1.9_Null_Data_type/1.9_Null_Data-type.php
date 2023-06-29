<?php
//x'i önceden tanımlı null constantı ile tanımlarsak x null olur.

$x =null;
var_dump($x);
var_dump((is_null($x)));

// daha önce tanımlamadağıımız bir değişken null dur.
// Aynı zamanda bir eror mesajıyla da karşılaşırız.
var_dump($y);
var_dump((is_null($y)));

//önce tanımlayıp sonra unset ile tanımsız hala getirirsek "null" değerini alırız.

$z = 123;
var_dump($z);

unset($z);

var_dump($z);
echo '<br/>'.'----------------------------'.'<br/>';

//NULL tipi başka bir data tipine çevirmek.
//Null'un diğer data tiplerine çevrilmesi;
// string(0) ""
//int(0)
//bool(false)
//array(0) { }

$a = null;
var_dump($a);
echo '<br/>';
var_dump((string)($a));
echo '<br/>';
var_dump((int)($a));
echo '<br/>';
var_dump((bool)($a));
echo '<br/>';
var_dump((array)($a));
echo '<br/>';






