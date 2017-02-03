<?php

  class AddPost {
    private $_title;
    private $_content;
    private $_author;
    private $_created_at;

    public function __construct(){
      $this->_title = $_POST['title'];
      $this->_author = $_POST['author'];
      $this->_content = $_POST['content'];
      $this->_created_at = date('Y-m-d');
    }

    public function getTitle(){
      return $this->_title;
    }

    public function savePost(){
      $newPost = new Database();
      $newPost->addData($this->_title, $this->_author, $this->_content, $this->_created_at);
    }
  }
