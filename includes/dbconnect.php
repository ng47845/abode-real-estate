<?php

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=abodedb","root","");
    }
    catch(PDOException $pdo){
        die("Unsuccessful connection");
    }

?>