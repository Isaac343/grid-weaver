<?php namespace Models;

  class Users{
      private $id, $username, $name, $surname, $email, $rol;
      private $conn;

      function __construct(){
        $this->conn = new Config\Connection();
      }

      function set($att, $value){
        $this->att = $value;
      }

      function get($att){
        return $this->att;
      }

      function create(){
        $sql = "INSERT INTO users (IdUser, user_username, user_name, user_surname, user_email, user_rol) VALUES (null, '{$this->username}', '{$this->name}', '{$this->surname}', '{$this->email}', '{$this->rol}')";
        $this->conn->simple_query($sql);
      }

  }

?>
