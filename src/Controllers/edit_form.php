<?php
  session_start();
  define('BASEPATH', __DIR__.'/../..');
  $basepath = './../..';
  require_once BASEPATH.'/vendor/autoload.php';
  use JulianeB\MyBlog\Models\EditPost;

  $id = intval(empty($_GET['id']) ? $_SESSION['editId'] : $_GET['id']);
  $edit = new EditPost($id);

  if(!isset($_GET['id'])){
    $edit->updateData($_POST['title'], $_POST['author'], $_POST['content']);
    header("Location: $basepath/index.php");
  }
  elseif(isset($_GET['id'])){
    $_SESSION['editId'] = $_GET['id'];
    require_once BASEPATH.'/src/Views/edit.php';
  }
