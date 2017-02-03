<?php
  session_start();
  define('BASEPATH', __DIR__.'/../..');
  $basepath = './../..';
  require_once BASEPATH.'/vendor/autoload.php';
  use JulianeB\MyBlog\Models\AddComment;

  if ( $_SERVER['REQUEST_METHOD'] === 'POST' && (!$_POST['author'] || !$_POST['content'])) {
    $_SESSION['error'] = true;
    header("Location: $basepath/index.php");
  } elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['author'] && $_POST['content']){
    (new AddComment())->saveComment();
    $_SESSION['error'] = false;
    header("Location: $basepath/index.php");
  }
