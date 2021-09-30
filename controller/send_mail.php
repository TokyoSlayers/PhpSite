<?php
function send(){
  if(isset($_POST["ContactName"]) && isset($_POST["ContactComment"])){
    if(!$_POST["ContactName"] || $_POST["ContactName"] != $_SESSION["username"]){
      echo "<p>Merci de saisir un pseudo valide!</p>";
        return;
    }
    
    if(strlen($_POST["ContactComment"]) == 0){
      echo "<p>Merci de saisir un message a m'envoyer</p>";
        return;
    }
    $name = $_POST["ContactName"];
    
    function sendmail($textarea_text, $objet, $email){
        $headers = array(
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=iso-8859-1',
    
            'To' => $email,
            'From' => 'TokyoSlayer.com <no_reply@TokyoSlayer.com>'
            );
        $news ="$textarea_text";
        $objet = $objet;
        if( mail($email, utf8_decode($objet), utf8_decode($news), $headers) ){
            echo "<p>Votre message a bien été envoyer</p>";
        }else{
            echo "<p>Votre message n'est pas parvenue</p>";
        }
    }
    
    sendmail($_POST["ContactComment"], "Le message vien de $name","tokyo@tokyoslayer.com");
  }
}
?>