
<?php
    

$host = "localhost";
$dbname = "bloge";
$username = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo "conexion conactid ";
}catch(PDOException $e ){
    echo "not coexion" . $e;
}