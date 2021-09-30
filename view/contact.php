<?php $title = 'Contact'; $director = '../'; $nav = '';
ob_start(); 
include("../controller/auth_session.php");

require('../controller/send_mail.php');
  send();
?>
  <h1 id="connect">Nous Contacter !</h1>

  <form id="forum" method="POST" name=”EmailForm” action="">
      <input type="text" name="ContactName" placeholder="Pseudo/email" size="1">
      <textarea name="ContactComment" placeholder="Merci de mettre votre demande ici !" rows="1" cols="1"></textarea>

      <button id="recherche" type="submit">Envoyer</button>
  </form>
  
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
