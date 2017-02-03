<?php
  session_start();
  define('BASEPATH', __DIR__);
  require BASEPATH.'/vendor/autoload.php';

  if(!isset($_GET['p'])){
    require_once BASEPATH.'/controllers/DisplayController.php';
    require_once BASEPATH.'/Model/Database.php';

    $displayAll = new DisplayController;
    $articles = $displayAll->displayArticles();
    $comments = $displayAll->displayComments();
    $displayAll->display($articles, $comments);
  } else {
    if($_GET['p'] === 'form'){
      require_once BASEPATH.'/views/form.php';
    }
  }
