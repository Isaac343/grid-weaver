<?php namespace Models;
  use Models\Connection as Connection;
  class Users{
      private $id, $username, $name, $surname, $email, $rol, $password;
      private $conn;

      function __construct(){
        $this->conn = new Connection();
      }

      function set($att, $value){
        $this->$att = $value;
        // echo $att .'='. $value . '<br>';
      }

      function get($att){
        return $this->att;
      }

      function create(){
        $sql = "INSERT INTO gw_users(IdUser, user_username, user_password, user_name, user_surname, user_email, user_rol) VALUES (null, '{$this->username}', '{$this->password}', '{$this->name}', '{$this->surname}', '{$this->email}', '{$this->rol}')";
        $this->conn->simple_query($sql);
      }

      function list(){
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = $this->conn->returnQuery($sql);
      }

  }

  class Pages{
    private $id, $name, $date, $title, $status, $slug;
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
      $sql = "INSERT INTO qw_pages(IdPage, page_content, page_date, page_title, page_status, page_slug) VALUES (null, '{$this->page_content}')"; //PENDIENTE COLOCAR VARIABLES A INSERTAR
      $this->conn->simple_query($sql);
    }

    function list(){
      $sql = "SELECT * FROM pages ORDER BY id DESC";
      $result = $this->conn->returnQuery($sql);
      return $result;
    }
  }

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
