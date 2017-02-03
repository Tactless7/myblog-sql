<?php

  class AddComment {
    private $_author;
    private $_content;
    private $_post_id;

    public function __construct(){
      $this->_author = $_POST['author'];
      $this->_content = $_POST['content'];
      $this->_post_id = $_POST['post_id'];
    }

    public function saveComment(){
      $newComment = new Database();
      $newComment->addComment($this->_author, $this->_content, $this->_post_id);
    }
  }
