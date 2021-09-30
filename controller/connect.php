<?php
require_once('../model/AccountManager.php');

use \TokyoSlayer\phpTokyo\model\AccountManager;

function login(){
  session_start();
  // When form submitted, check and create user session.
  if (isset($_POST['lusername'])) {
    $username = stripslashes($_REQUEST['lusername']);

    $accountManager = new AccountManager();
      // Check user is exist in the database
    $account = $accountManager->getCheck($username);

    if(!$account){
        echo "<h3>Ce compte n'existe pas. </h3>";
        return;
    }

    $password = stripslashes($_REQUEST['lpassword']);

    $acc = $accountManager->getUser($username,$password);
    if($acc == false){
      echo "<h3>Le Pseudo/password est incorrect.</h3>";
      return;
    }

    $_SESSION['username'] = $username;
    // Redirect to user dashboard page
    header("Location: dashboard.php");

  }
}
function register(){

  if (isset($_REQUEST['rusername'])) {

      $username = stripslashes($_REQUEST['rusername']);
  
      $accountManager = new AccountManager();
        // Check user is exist in the database
      $account = $accountManager->getCheck($username);
  
      if($account){
          echo "<h3>Un compte est deja crée avec ce pseudo. </h3>";
          return;
      }
  
      $password = stripslashes($_REQUEST['rpassword']);
      $confirmPassword = stripslashes($_REQUEST['rconfirm_password']);
  
      if($password != $confirmPassword || $password == null || $confirmPassword == null){
          echo "<h3>Merci de bien confirmé le même mots de passe</h3>";
          return;
      }
  
      $result   = $accountManager->setUser($username,$password);
  
      if ($result) {
        echo "<h3>Votre compte a bien été crée.</h3>";
        echo "<p>Vous pouvez désormais vous connectez.</p>";
      } else {
          echo "<h3>Une erreur c'est produit.</h3>";
      }
  }
}
?>