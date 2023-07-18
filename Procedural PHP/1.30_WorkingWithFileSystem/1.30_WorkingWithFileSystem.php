<?php
//for more info
//https://www.php.net/manual/en/function.clearstatcache.php
//https://www.php.net/manual/en/function.fopen.php
//https://www.php.net/manual/en/ref.filesystem.php

$dir=scandir(__DIR__);
//bu şekilde dosyanın bulunduğu klasördeki dosyaları ve klasörleri görüyoruz.

//mkdir('foo',);// foo adında dosyanın bulunduğu yere bir klasör acar.
//rmdir('foo'); //foo adındaki dosyayı siler.
//mkdir('foo/bar/', recursive:true);
//rmdir('foo/bar');
var_dump(is_file($dir[2]));
var_dump(is_dir($dir[0]));
var_dump($dir);

if(file_exists('secondfile.php')){
    echo filesize('secondfile.php');
    file_put_contents('secondfile.php', 'hello world');
    clearstatcache();
    echo filesize('secondfile.php');
//secondfile.php boşken ikitane 0 yazdırdı ama 2.echo işlenirken aslında seconfile içinde veri vardı ama bunun farkına varmadı. çünkü bazı fonksiyonları php bir kez işler ve catche denilen yerde saklar.
//cache'i temizlemek için 'clearstatcache();' kulanmalısın

} else {
    echo 'file not found';
}
echo '<br/>';

#başka bir dosyayı açmak ve satır satır okutmak

$file=fopen('foo.txt','r');
var_dump($file);
echo '<br/>';
while(($line = fgets($file))!==false){
    echo $line. '<br/>';
}

fclose($file);
//fgetcsv'de bir bak


$content= file_get_contents('foo.txt', offset:3,length:7); //[3,7] arası indexi yazdırdı.

echo $content;

//file put contents ile dosya yarat. dosya varsa üstüne yaz.
//file_put_contents('bar.txt','world ', FILE_APPEND);

//bir dosyayı silmek için
//unlink('bar.txt');

//bir dosyayı kopyalamak için
//foo.txt'yi bar olarak kopyaladı 
//eğer hali hazırda bir bar.txt varsa onun üstüne yazar.

copy('foo.txt','bar.txt');

//dosya adı değiştirmek klasör adı ddeğiştirilebilir.
//rename('bar.txt','asd.txt');

$a = scandir('../',);

print_r($a);

