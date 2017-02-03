<?php

  class DisplayController {
    private $_database;

    public function __construct(){
      $this->_database = new Database();
    }

    public function display($articles, $comments){
      require_once 'views/display.php';
    }

    public function displayArticles(){
      return $this->_database->getArticles();
    }

    public function displayComments(){
      return $this->_database->getComments();
    }

  }
