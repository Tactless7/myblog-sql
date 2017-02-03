<?php
  session_start();
  $_SESSION['error'] = false;
  require_once './../vendor/autoload.php';
  require_once './../Model/Database.php';

  if ( $_SERVER['REQUEST_METHOD'] === 'POST' && (!$_POST['title'] || !$_POST['author'] || !$_POST['content'])) {
    $_SESSION['error'] = true;
    header('Location: ../index.php?p=form');
  } elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['title'] && $_POST['author'] && $_POST['content']){
    require_once './../Model/AddPost.php';

    (new AddPost())->savePost();
    $_SESSION['error'] = false;

    header('Location: ../index.php');
  }

  if(isset($_GET['id'])){
    require_once './../Model/AddPost.php';
    require_once './../Model/EditPost.php';
    $edit = new EditPost($_GET['id']);
    require_once '../views/edit.php';
  }
