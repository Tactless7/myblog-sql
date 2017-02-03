<?php
  session_start();
  define('BASEPATH', __DIR__.'/../..');
  $basepath = './../..';
  $_SESSION['error'] = false;
  require_once BASEPATH.'/vendor/autoload.php';
  use JulianeB\MyBlog\Models\AddPost;
  // use JulianeB\MyBlog\Models\EditPost;

  if ( $_SERVER['REQUEST_METHOD'] === 'POST' && (!$_POST['title'] || !$_POST['author'] || !$_POST['content'])) {
    $_SESSION['error'] = true;
    header("Location: $basepath/index.php?p=form");
  } elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['title'] && $_POST['author'] && $_POST['content']){

    (new AddPost())->savePost();
    $_SESSION['error'] = false;

    header("Location: $basepath/index.php");
  }

  // if(isset($_GET['id'])){
  //   $edit = new EditPost($_GET['id']);
  //   require_once BASEPATH.'/src/Views/edit.php';
  // }
