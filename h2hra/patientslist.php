<?php

require_once('config.php');

require_once('functions.php');

try {

    $PDO = new PDO('mysql:host=localhost;dbname='.DATABASE, 'h2hra', 'h2hra');
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    foreach($PDO->query('SELECT * from patient') as $row) {
        showArray($row);

    }
    $PDO = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>