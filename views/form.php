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

      <form action="submit_form.php" method="post" class="ui form">
        <label for="title">Titre : <input type="text" name="title" max="50"/></label>
        <label for="author">Auteur : <input type="text" name="author" max="50"></label>
        <label for="content">Contenu : <textarea name="content" rows="8" cols="80"></textarea></label>
        <button type="submit" class="ui green button">Ajouter</button>
      </form>
    </div>

  </body>
</html>
