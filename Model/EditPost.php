<?php
  class EditPost extends AddPost {
    private $_idPost;
    private $_updated_at;

    public function __construct($id){
      $info = (new Database)->getArticleInfo($id);
      $this->_idPost = $id;
      $this->_title = $info['title'];
      $this->_author = $info['author'];
      $this->_content = $info['content'];
      $this->_created_at = $info['created_at'];
    }

    public function updateData($title, $author, $content){
      $this->setTitle($title);
      $this->setAuthor($author);
      $this->setContent($content);
      $this->editPost();
    }

    public function editPost(){
      $this->_updated_at = date('Y-m-d');
      $editPost = new Database(); //
      $editPost->editData($this->_idPost, $this->_title, $this->_author, $this->_content, $this->_updated_at);
    }

    public function getTitle(){
      return $this->_title;
    }
    public function setTitle($title){
      $this->_title = $title;
    }

    public function getAuthor(){
      return $this->_author;
    }
    public function setAuthor($author){
      $this->_author = $author;
    }

    public function getContent(){
      return $this->_content;
    }
    public function setContent($content){
      $this->_content = $content;
    }

    public function getCreatedAt(){
      return $this->_created_at;
    }
  }
