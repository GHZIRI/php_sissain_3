<?php

    $host = "localhost";
    $dbname = "bloge";
    $username = "root";
    $password = "";


    try
    {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie à la base $dbname";
    }
    catch(EXCEPTION $e)
    {
      echo "Error: " . $e->message() ;
    }
?>