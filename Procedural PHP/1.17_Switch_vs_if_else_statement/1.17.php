<?php

//switch'in içindeki değeri case'ler içinde arar.
//bulunca bu noktadan sonraki kodu execute eder.
//break ile karşılaştığında sadece switchden çıkar.
//break ile karşılaşmaz ise satır sırsasınca kodu çalıştırmaya devam eder.
//switch'in içindeki değeri case'ler içinde bulamaz ise default kodu çalıştırır.
//default zorunlu değildir.

$paidStatus='paid';
switch($paidStatus){
    
    case'paid':
        echo 'paid';
        //break;

    case 'rejected':  // iki durum da da 'payment decline yazdıracaktır.'
    case 'declined':  //
        echo 'Payment Declined';
        break;

    case 'pending':
        echo 'Pending Payment';

    default:
        echo 'Unknown Status';

}
echo '<br/>';
// bir başka gösterim

$paidStatus= 1; // bir yerine; true, '1' kullanırsan 1'e çevirir
switch($paidStatus){
    
    case 1:
        echo 'paid';
        break;

    case 2:
    case 3:  
        echo 'Payment Declined';
        break;

    case 4:
        echo 'Pending Payment';

    default:
        echo 'Unknown Status';

}

echo '<br/>';
####loop içinde switch
//break 2: diyerek 2 loopdan tamamen çıkıyoduk
//aynısı burada da geçerli
$paymentStatuses=[1,2,0];

foreach ($paymentStatuses as $paymentStatus){
    switch($paymentStatus){
        case 1:
            echo 'paid';
            break 2;

        case 2:
        case 3:
            echo 'Payment Decline';
            break;
        case 0:
            echo 'Pending Payment';
            break;

        default:
            echo 'Unknown Payment Status';
    }
}

echo'<br/>';
//continue
// continue'ya 2 değeri vermemiz gerekir 1 verirsek break'le aynı manaya gelir.


$paymentStatuses=[1,2,0];

foreach ($paymentStatuses as $a => $paymentStatus){
    switch($paymentStatus){
        case 1:
            continue 2;
            echo 'paid';
            

        case 2:
        case 3:
            echo 'Payment Decline';
            break;
        case 0:
            echo 'Pending Payment';
            break;

        default:
            echo 'Unknown Payment Status';
    }
    echo '<br/>';
}
####if ile switch arasındaki fark
//if'de koşul ifadesi sürekli tekrar edilir.
//switch içerisindeki ifade yalnız bir kere okunur.
//aşağıda fucntion yazan eleman 3sn bekletiyor ve 3 değerini döndürüyor.
//function'a çok takılmayın sonra görücez.
//if fonksiyonu çalışma şekli şöyledir
//1. 3.sn bekle 3 döndü.
//2. "3 === 1" sorgusu yaptı ve yanlış olduğu için
//3. 3 sn bekledi ve 3===2 sorgusunu yaptı yanlış olduğu için.
//4. 3 sn bekledi 3===3 doğru olduğu için yazdırdı.
//5. toplam 9Sn bekledik.
function x(){
    sleep(3);
    echo 'Done <br/>';
    return 3;
}
if (x()===1){
    echo 1;
} elseif (x()===2){
    echo 2;
} elseif (x()===3){
    echo 3;
}
elseif (x()===4){
    echo 4;
}
// şimdi gelin swtichle yapalım
// switchle sadece 3sn bekledik çünkü switch içindeki ifade yalnız bir kere tekrar ediliyor.
switch (x()){
case 1:
    echo 1;
    break;

case 2:
    echo 2;
    break;
case 3:
    echo 3;
    break;

default:
    echo 4;
}