<?php
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP', 'kemal']
];

$x= count($user['skills'])-1;

foreach($user as $value):
    if(is_array($value)){
        foreach ($value as $skill){
            if($user['skills'][(int)($x)]==$skill){
                echo $skill;
            }else echo $skill.'-';
        }
    } else{
    echo $value.'<br/>';}
endforeach;

//chat gpt-version


$user = [
    'name' => 'ali',
    'email' => 'aibrahimkcc@gmail.com',
    'skills' => ['CMK', 'Aile', 'PHP', 'kemal']
];

foreach ($user as $value) {
    if (is_array($value)) {
        foreach ($value as $index => $skill) {
            if ($index === count($value) - 1) {
                echo $skill;
            } else {
                echo $skill . '-';
            }
        }
    } else {
        echo $value . '<br/>';
    }
}


//chat gpt-version

$user = [
    'name' => 'ali',
    'email' => 'aibrahimkcc@gmail.com',
    'skills' => ['CMK', 'Aile', 'PHP', 'kemal']
];

$lastIndex = count($user['skills']) - 1;

foreach ($user as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $index => $skill) {
            echo $skill;
            if ($index !== $lastIndex) {
                echo '-';
            }
        }
    } else {
        echo $value . '<br/>';
    }
}