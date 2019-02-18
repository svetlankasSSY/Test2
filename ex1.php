<?php

$clients = [
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

/*
//Задание вывести список емайл
$emails = [];
foreach ($clients as $client) {
    $emails[]= $client['email'];
}
    
    
    //Задание вывести список имён

$names = [];
foreach ($clients as $client) {
    $names[]= $client['name'];
}
    
echo '<pre>';
var_dump($emails, $names);
echo '</pre>';        */

//Задание вывести список имён и фамилий
$total = [];
foreach ($clients as $client) {
    $total[]= $client['name'] ." ". $client['lastname'];
}

echo '<pre>';
var_dump($total);
echo '</pre>'; 