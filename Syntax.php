<?php
header("Content-type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php
//основные операторы
//оператор присваивания

$firstName = "имя";
$lastName = "фамилия";
$fullName = $firstName . $lastName; //оператор конкатенации
$fullName = $firstName . " - " . $lastName; //изменили выводы. Почему выводится 1 раз?
echo $fullName; 
//условные операторы
//if
echo '</br> =========================================== <br/>';
$a = 5;
$b = 6;
if  ($a == $b) {
    echo 'А равно В';
}else{
    echo 'А не равно В';
}

echo '</br> =========================================== <br/>';
//elseif

$c = 10;
$d = 4;
if ($a == $b) {
     echo 'А равно В';  
} elseif ($a == $c) {
    echo 'А равно С';
} elseif ($a == $d) {
    echo 'А равно Д';
} else  {
    echo 'А ничему не равно';
}
echo '</br> =========================================== <br/>';

//switch
switch ($a) {
    case $b:
        echo 'А равно В';
        break;
case $c:
        echo 'А равно C';

        break;
case $d:
        echo 'А равно D';
    break;
    default:
         echo 'А ничему не равно';
        break;
        
}

echo '</br> =========================================== <br/>';
//for
for ( $i = 1; $i<101; $i++) {
    echo $i . '<br>';
}
//while
$i=1;
while($i<101) {
    echo $i;
    $i++;
    
}
//foreach
echo '</br> =========================================== <br/>';
$myArray = array('Привет,', ' Мир, ', 'родился ', 'новый ', 'программист!');
foreach ($myArray as $value) {
    echo $value;
}