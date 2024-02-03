<?php

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=webdb","root","");
    }
    catch(PDOException $pdo){
        die("Unsuccessful connection");
    }

?>