<?php

if(isset($_POST['Valider'])){
    $nom = trim(htmlspecialchars($_POST['nom']));
    $email = trim(htmlspecialchars($_POST['email']));
    $tel = trim(htmlspecialchars($_POST['tel']));
    $mess = trim(htmlspecialchars(nl2br($_POST['mess'])));

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if(!empty($nom) &&  (!empty($email) || !empty($tel)) && !empty($mess)){
            echo "<p>Votre message a bien été envoyé</p>";
    
        } else {
            header("Location: contact.html");
        }
    } else {
        header("Location: contact.html");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Retourner à la page d'accueil</a>
</body>
</html>