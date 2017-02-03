<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter un article</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  </head>
  <body>
    <div class="ui container">
      <div class="ui huge centered header">Ajouter un article</div>

      <form action="./controllers/submit_form.php" method="post" class="ui form error">

      <?php if(isset($_SESSION['error']) && $_SESSION['error']) :?>
        <div class="ui error message">
          <div class="header">Impossible d'ajouter l'article</div>
          <p>Remplissez tous les champs.</p>
        </div>
      <?php endif ?>

        <div class="required field">
          <label for="title">Titre </label><input type="text" name="title" max="50" value=""/>
        </div>
        <div class="required field">
          <label for="author">Auteur </label><input type="text" name="author" max="50" value=""/>
        </div>
        <div class="required field">
          <label for="content">Contenu </label><textarea name="content" rows="8" cols="80" value=""></textarea>
        </div>
        <button type="submit" class="ui green button">Ajouter</button>
      </form>
    </div>

  </body>
</html>
