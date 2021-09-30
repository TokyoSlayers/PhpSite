<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebSite | <?= $title ?></title>
  <link rel="stylesheet" href="<?= $director ?>public/css/style.css"/>
</head>
        
    <body>
      <header>
        <figure class="no-deco" id="logo">
          <a href="<?= $director ?>index.php">
            <img src="<?= $director ?>public/images/logo.png" alt="logo"></img>
            <figcaption>WebSite</figcaption>
          </a>
        </figure>

        <nav id="navigator">
          <div id="drop" class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
              <a href="<?= $nav ?>view/blog.php">Forum</a>
              <a href="<?= $nav ?>view/contact.php">Nous contacter</a>
              <a href="<?= $nav ?>view/connection.php">Se connecter</a>
            </div>
          </div>
          <div class="no-deco" id="inline">
            <a href="<?= $nav ?>view/blog.php">Forum</a>
            <a href="<?= $nav ?>view/contact.php">Nous contacter</a>
            <a href="<?= $nav ?>view/connection.php">Se connecter</a>
          </div>
        </nav>

      </header>
      
      <main>
      <?= $content ?>
      </main>

      <footer>
        <div>
            <ul class="no-deco">
                <li>
                    <h3>A propos</h3>
                </li>
                <li>
                    <a href="<?= $nav ?>view/helping.php">Fonctionnement du site</a>
                </li>
                <li>
                    <a href="<?= $nav ?>view/data.php">Données et utilisation</a>
                </li>
            </ul>

            <ul class="no-deco">
                <li>
                    <h3>Assistance</h3>
                </li>
                <li>
                    <a href="https://discord.gg/RWUcgNB">Discord</a>
                </li>
                <li>
                    <a href="<?= $nav ?>view/contact.php">Nous contacter</a>
                </li>
            </ul>
        </div>
    </footer>
      
    </body>
</html>