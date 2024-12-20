<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $language = $_POST['language'];
    setcookie('preferred_language', $language, time() + (30 * 24 * 60 * 60));
    header('Location: /zakariae_el_hassad_sessions/message.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choix de la Langue</title>
</head>
<body>
    <h2>Choisissez votre langue préférée</h2>
    <form action="" method="POST">
        <label for="language">Langue :</label>
        <select name="language" id="language">
            <option value="fr">Français</option>
            <option value="en">Anglais</option>
            <option value="es">Espagnol</option>
        </select>
        <br>
        <button type="submit">Sauvegarder</button>
    </form>
</body>
</html>
