<?php
  require 'vendor/autoload.php';

  if(!isset($_GET['p'])){
    require_once 'controllers/DisplayController.php';
    require_once 'Model/Database.php';

    $displayAll = new DisplayController;
    $displayAll->displayArticles();
}
