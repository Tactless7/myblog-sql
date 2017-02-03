<?php
  session_start();
  // $_SESSION['error'] = false;
  require_once './../vendor/autoload.php';
  require_once './../Model/Database.php';
  require_once './../Model/AddPost.php';
  require_once './../Model/EditPost.php';
  $id = intval(empty($_GET['id']) ? $_SESSION['editId'] : $_GET['id']);
  $edit = new EditPost($id);

  if(!isset($_GET['id'])){
    $edit->updateData($_POST['title'], $_POST['author'], $_POST['content']);
    header('Location: ../index.php');
  }
  elseif(isset($_GET['id'])){
    $_SESSION['editId'] = $_GET['id'];
    require_once '../views/edit.php';
  }
