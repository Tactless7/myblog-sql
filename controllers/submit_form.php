<?php
  require_once '../vendor/autoload.php';
  require_once '../Model/AddPost.php';
  require_once '../Model/Database.php';

  (new AddPost())->savePost();
