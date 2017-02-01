<?php
  session_start();

  if (!$_POST['title'] || !$_POST['author'] || !$_POST['content']) {
    $_SESSION['error'] = true;
    header('Location: ../index.php?p=form');
  } else {
    require_once './../vendor/autoload.php';
    require_once './../Model/AddPost.php';
    require_once './../Model/Database.php';

    (new AddPost())->savePost();
    $_SESSION['error'] = false;

    header('Location: ../index.php');
  }
