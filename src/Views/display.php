<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  </head>
  <body>
    <div class="ui marged container">

      <h1 class="ui huge marged centered header">Mon Blog</h1>
      <div class="ui fourteen wide column grid">
        <div class="ui three wide column">
          <a href="index.php?p=form"><button class="ui green button" type="button">Ajouter un article</button></a>
        </div>
        <div class="ui thirteen wide column">
          <div class="ui one wide cards">

            <?php foreach ($articles as $post) :?>
            <div class="ui card">
              <div class="content">
                <div class="header"><?= $post['title'] ?></div>
                <div class="meta"><?= $post['author']?>, <?= $post['created_at']?></div>
                <div class="description"><?= $post['content']?></div>
              </div>

              <?php foreach ($comments as $comment): ?>
                <?php if ($comment['post_id'] === $post['id']): ?>
              <div class="content">
                <div class="meta"><?= $comment['author'] ?></div>
                <div class="description"><?= $comment['content'] ?></div>
              </div>
                <?php endif; ?>
              <?php endforeach; ?>

              <div class="content">
                <form action="./src/Controllers/submit_comment.php" method="post" class="ui tiny form error">

                <?php if(isset($_SESSION['error']) && $_SESSION['error']) :?>
                  <div class="ui error message">
                    <div class="header">Impossible d'ajouter le commentaire</div>
                    <p>Remplissez tous les champs.</p>
                  </div>
                <?php endif ?>

                  <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                  <div class="required field">
                    <label for="author">Auteur </label><input type="text" name="author" max="50"/>
                  </div>
                  <div class="required field">
                    <label for="content">Contenu </label><textarea name="content" rows="3" cols="70"></textarea>
                  </div>
                  <button type="submit" class="ui inverted green button">Commenter</button>
                </form>
              </div>
              <div>
                <a href="./src/Controllers/edit_form.php?id=<?= $post['id']?>"><div class="ui bottom attached button">
                  <i class="edit icon"></i>Editer
                </div></a>
              </div>
          </div>
        <?php endforeach ?>
        </div>
      </div>

    </div>

  </body>
</html>
