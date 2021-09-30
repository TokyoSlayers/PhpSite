<?php $title = 'Mon blog'; $director = '../'; $nav = '';
ob_start(); 
use \TokyoSlayer\phpTokyo\model\CommentManager;
$commentManager = new CommentManager();

?>

<h1>Le Forum !</h1>
<p>Les dernieres annonces :</p>

<?php
while ($data = $posts->fetch())
{
    $number = $commentManager->getNumComments($data['id']);
    

?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="blog.php?action=post&amp;id=<?= $data['id'] ?> ">Commentaires(<?=$number?>)</a></em>
        </p>
    </div>
<?php
}

$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
