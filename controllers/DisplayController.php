<?php

  class DisplayController {
    private $_database;

    public function display($articles){
      require_once 'views/display.php';
    }

    public function displayArticles(){
      $this->_database = new Database();
      return $this->_database->getArticles();
    }

  }
