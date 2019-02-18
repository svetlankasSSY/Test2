<?php

$items = [
    [
    "name"=> "Vasya",
    "lastname"=> "Dolgov",
    "age"=> 19,
    "email"=> "vasya@mail.ru"
],
        [
    "name"=> "Kolya",
    "lastname"=> "Grisin",
    "age"=> 50,
    "email"=> "kolya@mail.ru"  
        ],
[
    "name"=> "Valya",
    "lastname"=> "Galkina",
    "age"=> 22,
    "email"=> "valya@mail.ru"
]
    ];
//делаем универсально

function map($items, $func) {
    $results = [];
    foreach ($items as $item) {
        $results[]= $func($item);
    }
    return $results;
}

/*
$emails = map($items, function ($client){
return $client['email'];
});

$names = map($items, function ($client){
return $client['name'];
});

echo '<pre>';
var_dump($emails, $names);
echo '</pre>';*/

//Задание вывести список имён и фамилий

$total = map($items, function ($client){
return $client['lastname'] ." ". $client['name'];
});

echo '<pre>';
var_dump($total);
echo '</pre>';