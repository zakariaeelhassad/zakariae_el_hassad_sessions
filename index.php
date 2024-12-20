<?php 
session_start();

if(isset($_SESSION['nom'])){
    header('localhost: /zakariae_el_hassad_sessions/index.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom =  trim($_POST['nom']?? '');
    $mode_de_passe = trim($_POST['mode_de_passe']?? '');
}

if ($username === 'zakariae' && $password === '123456789') {
    $_SESSION['nom'] = $username; 
    header('Location: /zakariae_el_hassad_sessions/index.php');
    exit;
} else {
    $error = "Nom d'utilisateur ou mot de passe incorrect."; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nom{
            color: black ;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="POST">
            <label for="" class='nom'>entre le nom</label>
            <input type="text" name="nom">
            <label for="">entre le mode de passe</label>
            <input type="password" name="mode_de_passe">
            <button type="submit">entrer</button>
        </form>
    </div>
</body>
</html>
