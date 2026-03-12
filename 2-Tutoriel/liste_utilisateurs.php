<?php
    require 'connexion.php';

    try{
        $sql = "SELECT * FROM users";
        $stmt = $pdo ->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
       

    } catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    }

    echo "<table border='1'>
<tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
foreach ($users as $user) {
    echo "<tr><td>{$user['id_user']}</td><td>{$user['name_user']}</td><td>{$user['email']}</td></tr>";
}
echo "</table>";