<?php
$user=[
    'name'=>'ali',
    'email'=>'aibrahimkcc@gmail.com',
    'skills'=>['CMK','Aile','PHP', 'kemal']
];


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

