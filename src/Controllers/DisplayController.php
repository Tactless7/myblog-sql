<?php

  namespace JulianeB\MyBlog\Controllers;

  use JulianeB\MyBlog\Models\Database;

  class DisplayController {
    private $_database;

    public function __construct(){
      $this->_database = new Database();
    }

    public function display($articles, $comments){
      require_once BASEPATH.'/src/Views/display.php';
    }

    public function displayArticles(){
      return $this->_database->getArticles();
    }

    public function displayComments(){
      return $this->_database->getComments();
    }

  }
