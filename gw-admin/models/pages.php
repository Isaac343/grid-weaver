<?php namespace Models;
  use Models\Connection as Connection;
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
?>
