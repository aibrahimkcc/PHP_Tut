<?php
$x=1.0;
var_dump($x);
$x=1.5e1;
var_dump($x);
$x=1.5e1;
var_dump($x);// 1,5*10 demektir ve çıktı 15 olur
$y=1.5e-2;  // 1,5*(1/100) ki çıktı 0,015 olur.
var_dump($y);// 1,5*10 demektir ve çıktı 15 olur
$x=1_000.005_1;
echo $x;

$x= ((0.7+0.1)*10);
echo $x;
var_dump($x);

$x=ceil((0.1+0.2)*10);
echo $x;
echo '<br/>'.'---------------------------------------'.'<br/>';

$x= 0.23;
$y= 1-0.77;
echo $x. '<br/>'.$y;
if ($x == $y) {
    echo 'eşittir';
} else {
    echo 'eşit değildir';
}

$x=log(-1);
var_dump($x); //float(NAN)
var_dump(is_nan($x));


$x= PHP_FLOAT_MAX*2;
var_dump($x); // float(INF)
var_dump(is_infinite($x));// bool(true)
var_dump(is_finite($x));// bool(false)

$x=(float) '5.4asd';
echo $x;


$x=(float) false;
var_dump($x);