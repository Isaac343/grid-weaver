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
?>
