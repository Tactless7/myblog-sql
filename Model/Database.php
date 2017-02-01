<?php
  class Database {
    private $_host;
    private $_databaseName;
    private $_username;
    private $_password;

    public function __construct($host, $dbName, $username, $password){
      $this->_host = $host;
      $this->_databaseName = $dbName;
      $this->_username = $username;
      $this->_password = $password;
    }

    public function connectToDb(){
      ORM::configure('mysql:host='. $this->_host .';dbname='.$this->_databaseName);
      ORM::configure('username',  $this->_username);
      ORM::configure('password', $this->_password);
    }

    public function getArticles(){
      return ORM::for_table('posts')->find_many();
    }

    public function addData($title, $author, $content, $created_at){
      $post = ORM::for_table('posts')->create();
      $post->title = $title;
      $post->author = $author;
      $post->content = $content;
      $post->created_at = $created_at;
      $post->save();
    }

  }
