<?php
$db = new PDO("mysql:host=localhost;dbname=testPHP", "SvetlanaS", "");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "SELECT * FROM goods";
    $query = $db->prepare($queryStr);
    $query->execute();
    while ($row = $query->fetch()) {
      echo $row ['id'] . ' - ' .$row['name'] . ' - '.
              $row['price'] . ' - ' .$row['comment'];
              echo '<br>';
    }
    $query->closeCursor();
} catch (PDOException $e) {
echo $e->getMessage();
}