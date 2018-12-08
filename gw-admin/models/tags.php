<?php namespace Models;
  use Models\Connection as Connection;
  class Tags{
    private $id, $name, $slug;
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
      $sql = "INSERT INTO tags(IdTag, tag_name, tag_slug) VALUES (null, '{$this->tag_name}', '{$this->tag_slug}')"; //PENDIENTE COLOCAR VARIABLES A INSERTAR
      $this->conn->simple_query($sql);
    }
  }

?>
