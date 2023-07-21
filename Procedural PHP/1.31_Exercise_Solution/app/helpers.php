<?php

function formatDollarAmount(float $amount): string{
    $isNeagitve = $amount <0;
    //abs önemlidir mutlak değer alır aksi halde -$-123.12 gibi bir değerle karşılaşabiliriz.
    return($isNeagitve ? '-' :''). '$' .number_format(abs($amount),2);
}

function formatDate(string $date): string{
    
    return date(('M j, Y'), strtotime($date));
}