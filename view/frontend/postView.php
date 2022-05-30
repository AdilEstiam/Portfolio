<?php

$title = nl2br(htmlspecialchars($post->title()));
$description = 'Voir le projet';

ob_start();

?>

<h1 class="my-3"> <?= nl2br(htmlspecialchars($title)) ?> </h1>
<p> <i> <?=nl2br(htmlspecialchars($post->chapo()))?> </i> </p>
<center><img class="img-fluid rounded mb-3 mb-md-0" src="public/upload/<?=nl2br(htmlspecialchars($post->image()))?>" alt=""></center>


<p class="post-content"> <?=nl2br(htmlspecialchars($post->content()))?> </p>

Publié le <span class="date"><?=nl2br(htmlspecialchars($post->creationDate()))?>
<?php
$creationDate = $post->creationDate();
$updateDate = $post->updateDate();

if ($creationDate !== $updateDate) {
    ?>
    </span>• Mise à jour le <span class="date"><?=nl2br(htmlspecialchars($post->updateDate())) ?></span>
    <?php
}
?>
 par <span class="username"> <?=nl2br(htmlspecialchars($post->username()))?></span></br>

<?php

if (isset($_SESSION['user'])) {
    if (strpos($_SESSION['user'] -> permAction(), 'editPost') !== false) {
        ?>

        <a class="btn btn-primary"
           href='modifier-article-<?=nl2br(htmlspecialchars($post->idPost()))?>'><img src="public/img/edit.png"> Edit</a>

        <a class="btn btn-danger"
            
           href='supprimer-article-<?=nl2br(htmlspecialchars($post->idPost()))?>'
           onclick="return confirm('Etes-vous sûr ?');"><img src="public/img/delete.png"> Delete</a></br>
            
        <?php
    }
}
?>
<hr>

<?php
if (isset($_SESSION['user'])) {
    if (strpos($_SESSION['user'] -> permAction(), 'addComment') !== false) {
        ?>
        <div class="article">
            <form id = 'form_com' method = "post"
                  action = "ajouter-commentaire-<?=nl2br(htmlspecialchars($post->idPost()))?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="content"
                           placeholder="Add a comment" required /> </td>
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>

            </form>
        </div>

        <?php
    }
}

?>

<h5>Commentaires</h5>
<?php


if (isset($comments)) {
    foreach ($comments as $oneComment) {
        ?>
    <div class="comment">
        <span class="username"> <?=nl2br(htmlspecialchars($oneComment->username()))?></span>
        <span class="date"> <?=nl2br(htmlspecialchars($oneComment->creationDate()))?></span>
        <p> <?=nl2br(htmlspecialchars($oneComment->content()))?> </p>

        <?php

        if (isset($_SESSION['user'])) {
            if (strpos($_SESSION['user'] -> permAction(), 'deleteComment') !== false) {
                ?>

                <p>
                    <a href='supprimer-commentaire-<?=nl2br(htmlspecialchars($oneComment->idComment()))?>'
                   onclick="return confirm('Etes-vous sûr ?');"><img src="public/img/delete2.png"></a>
                </p>

                <?php
            }
        }
        ?>
        </div>
        <?php
    }
}
?>

<center><a href="articles">Retour à la liste des projets</a></center>
<br><br>
<?php

$content = ob_get_clean();
include __DIR__ . "/../template.php";
?>
