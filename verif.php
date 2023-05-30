<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="www/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="styles_g.css" />
  <link rel="stylesheet" type="text/css" href="responsive/styles_g_resp.css" />
  <link rel="stylesheet" type="text/css" href="styles/contact.css" />
  <title>Envoie du message</title>
</head>

<body>
  <header>
    <nav class="menu-principal">
      <div class="logo-navbar">
        <a href="index.html">
          <img class="navbar-image" src="www/logo-portfolio.png" alt="logo du site" />
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

  <div class="place-colors">
    <a class="colors lightmode">DARK</a>
  </div>

  <main style="margin-top: 100px;">
    <div class="contact-verif-button">
      <p>
        <?php

        if (isset($_POST['Valider'])) {
          $nom = trim(($_POST['nom']));
          $email = trim(htmlspecialchars($_POST['email']));
          $tel = trim(htmlspecialchars($_POST['tel']));
          $sujet = trim($_POST['sujet']);
          $mess = trim(nl2br($_POST['mess']));

          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<a target="_blank" id="valid-email"
                 href="mailto:danlevy149@gmail.com?subject=' . $sujet . ' / ' . $tel . ' / ' . $nom . '&body=' . $mess . '">
          Confirmez l\'envoie du mail
        </a>';
          } else {
            header("Location: contact.html");
          }
        }

        ?>
      </p>

      <p>
        <a class="return-index" href="index.html">Retourner à la page d'accueil</a>
      </p>
    </div>
  </main>

  <footer>
    <div>
      <p class="copyright">© DAN LEVY</p>
      <p class="contact-me"><a href="tel:+33781267866">Téléphone</a></p>
      <p class="contact-me"><a href="contact.html">Me contacter</a></p>
      <p class="contact-me"><a href="https://github.com/Skuskusku13" target="_blank">Github</a></p>
    </div>
  </footer>

  <script src="js/script.js" defer></script>
</body>

</html>