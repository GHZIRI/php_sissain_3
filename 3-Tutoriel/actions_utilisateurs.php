<?php
  require 'connexion.php';

try{

    $stmt = $pdo->prepare("INSERT INTO users (name_user, email) VALUES (:name_user, :email)");
    $stmt->execute([
        'name_user' => 'Charlie',
        'email' => 'charlie@test.com'
    ]);

    echo "User added successfully <br>";

}catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}

$stmt = $pdo->prepare("UPDATE users SET email = :email, name_user = :name WHERE id_user = :id_user");

$stmt->execute([
'email' => 'charlie.new@test.com',
'name' => 'Charlie',
'id_user' => 4
]);

echo "User updated";

$stmt = $pdo->prepare("DELETE FROM users WHERE id_user = :id_user");
$stmt->execute(['id_user' => 3]);
echo "user delet";

echo $stmt->rowCount() . " ligne(s) affectée(s).";