<?php

namespace TokyoSlayer\phpTokyo\model;

require_once("../model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh %imin\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));
    
        return $comments;
    }
    
    public function getNumComments($postId)
    {
        $db = $this->dbConnect();
    
        $comments = $db->prepare('SELECT COUNT(*) FROM comments WHERE post_id = ?');
        $comments->execute(array($postId));
        $rowcount = $comments->fetch($db::FETCH_NUM);
        $count = $rowcount[0];
          
        return $count;
    }
    
    public function postComment($postId,$author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments (post_id, author, comment) VALUES(?, ?, ?)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
    
        return $affectedLines;
    }
}
?>