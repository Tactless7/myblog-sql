<?php
  class EditPost extends AddPost {
    private $_idPost;
    private $_updated_at;

    public function __construct($id){
      //récupérer les valeurs des attributs;
      $info = (new Database)->getArticleInfo($id);
      $this->_title = $info['title'];
      $this->_author = $info['author'];
      $this->_content = $info['content'];
      $this->_created_at = $info['created_at'];
    }

    public function editPost(){ //display Edit finalement ?
      $editPost = new Database();
      $editPost->editData($this->idPost, $this->_title, $this->_author, $this->_content, $this->_updated_at);
    }

    public function getTitle(){
      return $this->_title;
    }

    public function getAuthor(){
      return $this->_author;
    }
    public function getContent(){
      return $this->_content;
    }

    public function getCreatedAt(){
      return $this->_created_at;
    }

    //function editPost avec sauvegarde des infos
  }
