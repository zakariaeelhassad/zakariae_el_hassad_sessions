<?php
session_start();


if(isset($_SESSION['nom'])){
    header('localhost: index.php');
    exit;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
        <p>Vous êtes connecté avec succès.</p>
        
        <form method="post" action="">
            <button type="submit" name="logout" class="btn">Se déconnecter</button>
        </form>
</body>
</html>