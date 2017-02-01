<?php

  class DisplayController {
    public function __construct(){
      $this->display();
    }
    public function display(){
      require_once 'views/display.php';
    }


  }
