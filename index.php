<?php
  session_start();
  define('BASEPATH', __DIR__);
  require BASEPATH.'/vendor/autoload.php';
  use JulianeB\MyBlog\Controllers\DisplayController;

  if(!isset($_GET['p'])){
    $displayAll = new DisplayController;
    $articles = $displayAll->displayArticles();
    $comments = $displayAll->displayComments();
    $displayAll->display($articles, $comments);
  } elseif($_GET['p'] === 'form'){
    require_once BASEPATH.'/src/Views/form.php';
  }
