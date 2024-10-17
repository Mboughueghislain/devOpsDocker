<?php
// Informations de connexion à la base de données
$dsn = 'mysql:host=data;dbname=testdb';  // Le container "data" est l'hôte
$username = 'user';
$password = 'password';

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête d'insertion
    $pdo->exec("INSERT INTO my_table (name) VALUES ('Test " . rand(1, 1000) . "')");

    // Requête de lecture
    $stmt = $pdo->query("SELECT name FROM my_table");

    // Affichage des résultats de la lecture
    echo "<h2>Résultats de la base de données :</h2>";
    while ($row = $stmt->fetch()) {
        echo $row['name'] . "<br>";
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
