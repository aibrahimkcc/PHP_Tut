<?php
##Loop(Döngü)
##while
//parantez içindeki ifade "true" olduğu sürece devamında gelen kodu çalıştırır.
//Parantez içindeki ifade false oluncaya kadar loop çalışmaya devam eder.

$i=0;
while($i<=15){
    echo $i++;
}

echo "</br>";

####infinite loop ve break
//bir şey olana kadar devam etmesini istediğimiz işlemler için kullanılır.
//istediğimiz olduktan sonra "break" komutuyla loop'tan çıkılır.
// loop'dan çıkamazsan RAM'in ağlar.

//while zaten doğru olduğu için loop çalışmaya başlar.
//$i'nin aldığı değer 15 oluncaya kadar "echo $i++" kodu çalışır.
//$i 15 olunca loop'dan çıkılır.
//bu nedenler 15 yazdırılmaz.
$i=0;
while(true){
    if($i>=15){
    break;
    }
    echo $i++;
}

echo "</br>";

#### iç içe geçmiş(nested) 2 looptan çıkmak
// break'in kendi değeri 1'dir. yani içide bulunduğu loop'u kırar.
// break'in değerini 2 yaparsak içinde bulunduğu 2 loop'u kırar.
$i=0;
while(true){
    while ($i>10){
        break 2;
    }
    echo $i++;
}
echo "</br>";

####continue
//continue' ifadesinden sonra gelen kod çalıştırılmaz ve loop baştan başlar.



$i=0;
while($i <=14){ //$i 14'ten küçük olduğu sürece çalıştır. 14 olunca dur.

    //if'in içi false ise yani $i ikiye tam bölünmüyosa if ifadesinden hemen sonra gelen satırdan devam et.
    if($i%2 === 0){//$i ikiye tam bölünüyorsa
        $i++; //1 ekle
        continue;//loop'a baştan başla
    } 

    echo $i++ .",";//ikiye tam bölmüyorsa $i'yi yazdır ve 1 ekle.
}

####Html içinde while kullanmak.
// ":" ve endwhile; kullanmalısın. aynı şekil if kullanırken de ifend kullanmıştık. 
$i=0;
while($i <=14): // while'dan sonra gelen "{" işaterini sil ve ":" kullan  
    
    if($i%2 === 0){
        $i++; 
        continue;
    }

    echo $i++ .",";
 endwhile; //"}" şaretini sil ve endwhile; kullan.

 ##do-while
 //do-while içindeki kodun en azından bir kere çalıştırılması söz konusudur.
 //Aşağıda $i 20 bile olsaydı 1 kere yazılacak ve sonra 1 eklenecekti.
 $i=0;
 do{
    echo $i++;
} while($i<=15);

echo '<br/>';
##for
//";"ler ile ayrılmış 3 ifade alır.
//ilk ifade loop'un en başında yalnız bir değerlendirilir.
//ikinci ifade her tekrarda  tekrardan değerlendirirlir. ikinci ifade false olana kadar loop çalıştırılır.
//üçüncü ifade de her tekrarda  tekrardan değerlendirilir.
for( $i=0 ; $i < 15 ; $i++){
    echo $i;
}

echo '<br/>';
/*
";" arası boş bırakılırsa boşluklara,
while, true değerleri default olarak atanmış olur
for( ;  ; ){
    echo $i;
}


*/

#### for'un içine "," ile birden fazla ifade koymak

for($i=0; $i<15; print $i,$i++){

}

//Html için kullanmak
echo '<br/>';
for($i=0;print $i, $i<15;$i++):

endfor;

//string için for kullanmak
//strlen string içinde kaç tane index olduğunu getirir.
$text ='Hello World';
for($i=0; $i<strlen($text);$i++){
    echo $text[$i].'<br/>';
}

//array için for kullanmak

$array=['a','b','c','d'];
for($i=0;$i<count($array); $i++):
    echo $array[$i].'<br/>';
endfor;

//yukarda arrayde bir performans problemi vardır.
//her seferinde count fonksiyonla eleman saysına ulaşmak israftır ve programı yavaşlatır.
//bunun yerine count fonksiyonunu 1 kere çalıştırıp elde eden veriyi saklamak doğru yaklaşım olacaktır.
// küçük verilerde pek farkı olmasa da performanse önemlidir.
//1.yol
$array=['a','b','c','d'];
for($i=0,$x=count($array); $i<$x;$i++){
    echo $array[$i].'<br/>';
}

//2.yol
$array=['a','b','c','d'];
$x=count($array);
for($i=0; $i<$x;$i++){
    echo $array[$i].'<br/>';
}

//çıkarılacak ders: gereksiz yere fonsiyon kullanma.
//bu problem diğer looplarda da söz konusudur.

####foreach

// foreach yalnızca arrayler ve object'ler üzerinde çalışır.

// 1. array içindeki ilk elemnti alır ve $diller değişkenine atar.
// 2. sonra aşağısındaki kodu çalıştırır.
// 3. loop başa döner ve ikinci elementi $diller değişkenine atar.
// 4. döngü son element ile birlikte biter.


$programdilleri=['php','java','c++','go','rust'];

foreach($programdilleri as $diller ){
    echo $diller . '<br/>';
}

echo '<br/>';

// "$a =>" ifadesiyle arraydeki keyleri $a değişkenine atamış oluyoruz.
// unutulmamalıdır ki array içindeki her eleman $diller değişkenine atanıyor.
// son atanan 'rust' elemanı olduğu için $diller değişkeni rust elemanına atanmış olacaktır. 
$programdilleri=['php','java','c++','go','rust'];
foreach($programdilleri as $a => $diller){
    echo $a.': '.$diller . '<br/>';
}
echo $diller;


echo '<br/>';


//referance ne demekti bir hatırlayalım.
/*
$a = 1;
$b = &$a; // "&$"ifadesiyle referans atama gerçekleşir
$a = 5; // $a'yı değiştirmek, $b'yi etkiler
echo $b; // Çıktı: 5
*/


// foreach, (&) referance ve override
//programla dilleri elemanlarının hepsi 'php'ye dönüştü. neden ?
//1. $programdilleri[0]= &$diller;
//2. $diller='php'
//3. $programdilleri[1]= &$diller;
//4. $diller='php'
//5. diye devam eder böylelikle & işareti yüzünden bütün elemanlar php olur.
//6. referans işaretini silerseniz böyle bir durum olmaz.
$programdilleri=['php','java','c++','go','rust'];
foreach($programdilleri as $a => &$diller){
    $diller='php';
}
print_r($programdilleri);

//Önemli bir bilgi
//burada $diller ve $a değişkenleri işlem bittikten sonra yok olmaz. son elemenanın değerini ve key'ini alırlar.
// bunnu önüne geçmek için unset kullan
$programdilleri=['php','java','c++','go','rust'];
foreach($programdilleri as $a => $diller){
    echo $a.': '.$diller . '<br/>';
}

echo $a.$diller;
unset($a);
unset($diller);

//ilişkili değerleri array'de tekrar etmek
// bu halde hata verdi. çünkü bir array'i(skills) echo ile yazdırırsanız eror alırsınız
/*
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP']
];

foreach($user as $key=>$value){
    echo $key.':'.$value.'<br/>';
}
*/
// array yazdırmak için ya böyle 
// json.encode'a bir internetten bakı ver.
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP']
];

foreach($user as $key=>$value){
    echo $key.':'. json_encode($value).'<br/>';
}

// array yazdırmak için ya da böyle 
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP']
];

foreach($user as $key=>$value){
    if(is_array($value)){
       $value= implode(', ',$value); //implode ile array parçalanır "," öncesi her eleman dan sonra ne geleceğini belirtmek için kullanılır.
    }
    echo $key.': '. $value.'<br/>';
}

//bir başka şekilde yazımı
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP']
];

foreach($user as $key=>$value):
    if(is_array($value)){
        foreach ($value as $skill)
        echo $skill.' - ';

    } else{
    echo $value.'<br/>';}
endforeach;


