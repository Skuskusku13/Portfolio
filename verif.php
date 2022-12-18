<?php

if (isset($_POST['Valider'])) {
  $nom = trim(($_POST['nom']));
  $email = trim(htmlspecialchars($_POST['email']));
  $tel = trim(htmlspecialchars($_POST['tel']));
  $sujet = trim(($_POST['sujet']));
  $mess = trim((nl2br($_POST['mess'])));

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<a href="mailto:danlevy149@gmail.com?subject=' . $sujet . ' / ' . $tel . ' / ' . $nom . '&body=' . $mess . '>ici</a>';
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
  <link rel="stylesheet" href="styles_g.css" />
  <link rel="stylesheet" href="responsive/styles_g.css" />
  <title>Message Envoyé</title>
</head>

<body>
  <header>
    <nav class="menu-principal">
      <div class="logo-navbar">
        <a href="index.html">
          <img class="navbar-image" src="www/cv.png" alt="logo du site" />
        </a>
      </div>
      <i class="open"></i>
      <i class="close"></i>
      <ul class="menu">
        <li><a class="pages-menu" href="index.html">Home</a></li>
        <li><a class="pages-menu" href="cv.html">CV</a></li>
        <li><a class="pages-menu" href="formation.html">Formation</a></li>
        <li><a class="pages-menu" href="entreprise.html">Entreprise</a></li>
        <li><a class="pages-menu" href="projets.html">Projets</a></li>
        <li><a class="pages-menu" href="veilles.html">Veilles</a></li>
        <li><a class="pages-menu" href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <a href="index.html">Retourner à la page d'accueil</a>
</body>

</html>