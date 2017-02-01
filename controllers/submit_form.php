<?php
  if (!$_POST['title'] || !$_POST['author'] || !$_POST['content']) {
    header('Location: ../index.php?p=form');
  } else {
    require_once './../vendor/autoload.php';
    require_once './../Model/AddPost.php';
    require_once './../Model/Database.php';

    (new AddPost())->savePost();

    header('Location: ../index.php');
  }
