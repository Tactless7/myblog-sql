<?php
  session_start();

  if (!$_POST['title'] || !$_POST['author'] || !$_POST['content']) {
    $_SESSION['error'] = true;
    header('Location: ../index.php?p=form');
  } elseif($_POST['title'] && $_POST['author'] && $_POST['content']){
    require_once './../vendor/autoload.php';
    require_once './../Model/AddPost.php';
    require_once './../Model/Database.php';

    (new AddPost())->savePost();
    $_SESSION['error'] = false;

    header('Location: ../index.php');
  }

  if(isset($_GET['id'])){
    //require form.php avec l'id du post
    //values remplies avec getters
  }
