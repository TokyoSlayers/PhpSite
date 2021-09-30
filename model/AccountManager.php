<?php
namespace TokyoSlayer\phpTokyo\model;

require_once("../model/Manager.php");

class AccountManager extends Manager
{
  public function getUser($userName,$password)
  {

    $db = $this->dbConnect();
    $comments = $db->prepare('SELECT * FROM membres WHERE pseudo = ? AND password= ?');
    $comments->execute(array($userName,md5($password)));
    $result = $comments->fetchAll();

    if($result == null){
      return false;
    }else{
      return $result;
    }

  }

  public function getCheck($userName)
  {

    $db = $this->dbConnect();
    $comments = $db->prepare('SELECT * FROM membres WHERE pseudo = ?');
    $comments->execute(array($userName));
    $result = $comments->fetchAll();
    if($result == null){
      return false;
    }else{
      return true;
    }
  }

  public function setUser($userName,$password)
  {

    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO membres (pseudo, password) VALUES (?, ?)');
    $comments->execute(array($userName,md5($password)));
    $result = $this->getCheck($userName);
    
    return $result;
  }

}
?>