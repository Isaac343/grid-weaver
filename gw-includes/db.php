<?php namespace Config;
  date_default_timezone_set("America/Mexico_City");

  class Connection{
    private $conn;

    function __construct(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gw-sufix";
      $this->conn = new mysqli($servername, $username, $password, $dbname);
      $this->conn->set_charset("utf8");
      if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
    }
    public function simple_query($sql){
      $this->conn->query($sql);
    }
    public function return_query($sql){
      $result = $this->conn->query($sql);
      return $result;
    }
  }
?>
