<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  </head>
  <body>
    <div class="ui marged container">
      <h1 class="ui header">Mon Blog</h1>
      <?php foreach ($articles as $value) :?>
      <div class="ui card">
        <div class="content">
          <div class="header"><?= $value['title'] ?></div>
          <div class="meta"><?= $value['author']?>, <?= $value['created_at']?></div>
          <div class="description"><?= $value['content']?></div>
        </div>
      </div>
    <?php endforeach ?>
    </div>


  </body>
</html>
