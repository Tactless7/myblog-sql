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
    //instanciation de la bdd
    (new)
    //récupération des informations
    //values remplies avec getters
    require_once '../views/form.php'; //avec values remplies
  }
