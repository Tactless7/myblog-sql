<?php
  require 'vendor/autoload.php';
  require_once 'controllers/DisplayController.php';

  if(!isset($_GET['p'])){
    new DisplayController;
}
