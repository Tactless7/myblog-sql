<?php

  class DisplayController {
    private $_database;

    public function display($articles){
      include 'views/display.php';
    }

    public function displayArticles(){
      $this->_database = new Database('localhost', 'my_blog', 'root', 'root');
      $this->_database->connectToDb();
      return $this->_database->getArticles();
    }

  }
