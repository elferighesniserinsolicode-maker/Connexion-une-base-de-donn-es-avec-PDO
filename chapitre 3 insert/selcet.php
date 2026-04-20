<?php
require 'config.php';
$stmt = "SELECT * FROM utilisateurs ";
$stmt = $pdo->query($stmt);
$utilisateur = $stmt->fetchall(PDO::FETCH_ASSOC);
$utilisateur = [
    "nom" => "niserine",
    "email" => "niserine@gmail.com"
];
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($utilisateur as $user) : ?>
        <div class ="card">
            <h2><?php echo htmlspecialchars($user['nom']); ?></h2>
            <p><?php echo htmlspecialchars($user['email']); ?></p>
            <a href="supprimer.php?id=<?php echo $user['id']; ?>">supprimer</a>
        </div>
    <?php endforeach; ?>
</body>

</html>
</body>

</html>