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
      $date =  date('Y'.'-'.'n'.'-'.'d'.' '.'G'.':'.'i'.':'.'s');
      $sql = "INSERT INTO gw_posts(IdPost, post_title, post_date, post_category, post_content, post_status, post_user, post_slug) VALUES (null, '{$this->post_title}', '$date', '{$this->post_category}', '$this->post_content', null, null, null)";
      $this->conn->simple_query($sql);
    }
  }

?>
