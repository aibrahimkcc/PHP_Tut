<?php

$iscopmlete = true;

// integers 0, -0 = false
// floats 0.0 , -0.0 = false
//  '' = false
//  '0'= false
//  []= false
//  null = false
//  'false' = true 

echo $iscopmlete;

echo '<br/>';




if ($iscopmlete){
    //doğruysa bunu yap
    echo 'başarılı';

}else {
    //yanlışsa bunu yap
    echo 'başarısız';
}
echo '<br/>';

$x = false;
$a = (string) false;
$y = true;
$b  = (string) true;
var_dump($x);
echo '<br/>';
var_dump($y);
echo '<br/>';
var_dump($a);
echo '<br/>';
var_dump($b);

$z = '5';
var_dump($x);
var_dump(is_bool($x));
    