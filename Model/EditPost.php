<?php
  class EditPost extends AddPost {
    private $_idPost;
    private $_updated_at;

    public function __construct($id){
      //récupérer les valeurs des attributs;
    }

    public function editPost(){ //display Edit finalement ?
      $editPost = new Database('localhost', 'myblog', 'root', 'root');
      $editPost->connectToDb();
      $editPost->editData($this->idPost, $this->_title, $this->_author, $this->_content, $this->_updated_at);
    }

    //function editPost avec sauvegarde des infos
  }
