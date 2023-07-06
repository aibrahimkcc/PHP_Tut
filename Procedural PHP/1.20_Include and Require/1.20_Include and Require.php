<?php
/* require /require onece / include / include_once */

//include'da dosya bulunamaz ise uyarı verir.
//require dosyayı bulamaz ise eror verir ve scripti durdurur.

/*sadece uyarı verir ve kodu execute etmeye devam eder.
include 'dosya.php';
echo 'Hello World';
*/

/*Fatal error verir.

require 'dosya.php';
echo 'hello world';

*/

// default olarak hangi klasörde dosyaların arandığı bilgisi php.ini dosyasında "include_path" bölümünde yazar.
// eğer bir değer atanmamış ise mevcut dosyanın olduğu klasörde arar.

require 'file.php';
$x++;
echo $x.'<br/>';
require 'file.php';
$x++;
echo $x.'<br/>';

##include_once ve require_once
// dosya daha önce çağırılmış ise bir daha çağırdığında gelmez.
// eğer require ile yapmış olsaydık $x=5 olduğundan ikinci sefer çağırdırığımızda 6'nın üstüne yazacaktı ve 5 çağıracaktı.
require_once 'file.php';
$x++;
echo $x.'<br/>';

require_once 'file.php';
echo $x;
##---------
$nav= include 'test/nav.php';
var_dump($nav); // int(1)

## how to get content of file and change it to string
ob_start();
include 'test/nav.php';
$nav = ob_get_clean();
var_dump($nav);

$nav= str_replace("Contact","Contact with me",$nav);

echo $nav;
