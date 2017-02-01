<?php
  class EditPost extends AddPost {
    private $_idPost;
    private $_updated_at;

    public function __construct($id){

    }

    public function editPost(){
      $editPost = new Database('localhost', 'myblog', 'root', 'root');
      $editPost->connectToDb();
      $editPost->editData($this->idPost, $this->_title, $this->_author, $this->_content, $this->_updated_at);
    }
  }
