<<?php
$db = new PDO("mysql:host=localhost;dbname=testPHP", "SvetlanaS", "");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "INSERT INTO goods (name, price, comment) VALUES ('Doll_Annabelle','25', 'toy for girls'), ('Car_Red','7','toy for boys'), ('Car_White','12','toy for boys'), ('Toy_Cat','48', 'toy for all'), ('Doll_Lol','15','toy for girls')";
    $db->query($queryStr);
} catch (PDOException $e) {
echo $e->getMessage();
}