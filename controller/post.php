<?php

require_once('../model/PostManager.php');
require_once('../model/CommentManager.php');

use \TokyoSlayer\phpTokyo\model\PostManager;
use \TokyoSlayer\phpTokyo\model\CommentManager;

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    
    require('../view/myblog.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('../view/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: blog.php?action=post&id=' . $postId);
    }
}