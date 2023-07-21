<?php

declare(strict_types = 1);

// Your Code

function getTransactionFiles(string $dirPath):array 
{
    $files=[];
    foreach(scandir($dirPath) as $file){
        if (is_dir($file)){
            continue;
        }
        $files[] = $dirPath.$file;
        return $files;
    }
}

function getTransactions(string $fileName, ?callable $transactionHandler=null) : array {
    if(! file_exists($fileName)){
        trigger_error('File '.$fileName.' does not exists!',E_USER_ERROR);
    }

    $file= fopen($fileName, 'r');

    fgetcsv($file);// bu satırı yazdık çünkü $file resource'ününün ilk satırı burda çağırıldı. aşağıda 2. satırdan çağırmaya başlayacak.

    $transactions=[];

    while(($transaction=fgetcsv($file))!==false){
        if($transactionHandler!==null){
            $transaction= $transactionHandler($transaction); 
        }
        $transactions[] = $transaction;

    }
    return $transactions;
}

function extractTransaction(array $transactionRow): array{
    [$date, $checkNumber, $descripton, $amount] = $transactionRow;

    $amount = (float) str_replace(['$',','],'',$amount);


    return[
        'date' => $date,
        'checkNumber' => $checkNumber,
        'descripton' => $descripton,
        'amount' => $amount
    ];
}

function calculateTotals(array $transactions): array
{
    $totals= ['netTotal'=>0, 'netIncome'=>0, 'totalExpense'=>0];

    foreach($transactions as  $transaction){
            $totals['netTotal'] += $transaction['amount'];
        if ($transaction['amount']>=0){
                $totals['netIncome']+= $transaction['amount'];
        } else {
            $totals['totalExpense']+=$transaction['amount'];
        }
    }
    return $totals;
    

}