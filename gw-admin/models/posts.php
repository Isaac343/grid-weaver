<?php namespace Models;
  use Models\Connection as Connection;
  class Posts{
    private $id, $title, $date, $category, $content, $status, $user, $slug;
    private $conn;

    function __construct(){
      $this->conn = new Connection();
    }

    function set($att, $value){
      $this->att = $value;
    }

    function get($att){
      return $this->att;
    }

    function create(){
      $sql = "INSERT INTO posts(IdPost, post_title, post_date, post_category, post_content, post_status, post_user, post_slug) VALUES (null, '{$this->post_title}')"; //PENDIENTE COLOCAR VARIABLES A INSERTAR
      $this->conn->simple_query($sql);
    }
  }

?>
