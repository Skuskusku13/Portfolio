<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles_g.css" />
  <link rel="stylesheet" type="text/css" href="responsive/styles_g_resp.css" />
  <title>Envoie du message</title>
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

  <main style="margin-top: 100px;">
    <?php

    if (isset($_POST['Valider'])) {
      $nom = trim(($_POST['nom']));
      $email = trim(htmlspecialchars($_POST['email']));
      $tel = trim(htmlspecialchars($_POST['tel']));
      $sujet = trim(($_POST['sujet']));
      $mess = trim((nl2br($_POST['mess'])));

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<a href="mailto:danlevy149@gmail.com?subject=' . $sujet . ' / ' . $tel . ' / ' . $nom . '&body=' . $mess . '>Confirmez l\'envoie du mail en cliquant ici</a>';
      } else {
        header("Location: Levy-Dan-SLAM/contact.html");
      }
    }

    ?>
    <a href="Levy-Dan-SLAM/index.html">Retourner à la page d'accueil</a>
  </main>
</body>

</html>