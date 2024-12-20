<?php
if (isset($_COOKIE['preferred_language'])) {
    $language = $_COOKIE['preferred_language'];

    switch ($language) {
        case 'fr':
            $message = "Bienvenue sur notre site!";
            break;
        case 'en':
            $message = "Welcome to our website!";
            break;
        case 'es':
            $message = "¡Bienvenido a nuestro sitio web!";
            break;
        default:
            $message = "Language not supported.";
    }
} else {
    $message = "Aucune préférence définie.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Personnalisé</title>
</head>
<body>
    <h2>Message</h2>
    <p><?php echo $message; ?></p>
    <a href="/zakariae_el_hassad_sessions/preference.php">Changer la langue</a>
</body>
</html>
