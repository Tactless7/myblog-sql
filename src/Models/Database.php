<?php

  namespace JulianeB\MyBlog\Models;

  use ORM;

  class Database {
    private $_comments;
    private $_posts;

    public function __construct(){
      ORM::configure(array(
      'connection_string' => 'mysql:host=localhost;dbname=my_blog',
      'username' => 'root',
      'password' => 'root'
      ));
      $this->_posts = ORM::for_table('posts');
      $this->_comments = ORM::for_table('comments');
    }

    public function getArticles(){
      return $this->_posts->find_many();
    }

    public function getComments(){
      return $this->_comments->find_many();
    }

    public function addData($title, $author, $content, $created_at){
      $post = $this->_posts->create();
      $post->title = $title;
      $post->author = $author;
      $post->content = $content;
      $post->created_at = $created_at;
      $post->save();
    }

    public function editData($id, $title, $author, $content, $updated_at){
      $edit = $this->_posts->find_one($id);
      $edit->title = $title;
      $edit->author = $author;
      $edit->content = $content;
      $edit->updated_at = $updated_at;
      $edit->save();
    }

    public function getArticleInfo($id){
      return $this->_posts->find_one($id);
    }

    public function addComment($author, $content, $post_id){
      $comment = $this->_comments->create();
      $comment->author = $author;
      $comment->content = $content;
      $comment->post_id = $post_id;
      $comment->created_at = date('Y-m-d');
      $comment->save();
    }
  }
