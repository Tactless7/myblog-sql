<?php
  session_start();
  $_SESSION['commentError'] = false;
  require_once './../vendor/autoload.php';
  require_once './../Model/Database.php';

  if ( $_SERVER['REQUEST_METHOD'] === 'POST' && (!$_POST['author'] || !$_POST['content'])) {
    $_SESSION['error'] = true;
    header('Location: ../index.php');
  } elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['author'] && $_POST['content']){
    require_once './../Model/AddComment.php';

    (new AddComment())->saveComment();
    $_SESSION['error'] = false;

    header('Location: ../index.php');
  }
