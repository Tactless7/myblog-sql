<?php

  class DisplayController {
    public function __construct(){
      $this->display();
    }
    public function display(){
      require_once 'views/display.php';
    }

    public function displayArticles(){
      $allArticles = new Database('localhost', 'my_blog', 'root', 'root');
      $allArticles->connectToDb();
      $allArticles->getArticles();
    }


  }
