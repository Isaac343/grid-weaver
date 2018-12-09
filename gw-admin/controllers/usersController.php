<?php namespace Controllers;
  use Models\Users as Users;
  class usersController{
    private $user;

    function __construct(){
      $this->user = new Users();
    }

    function index(){
      if (true) {
        $this->user->list();
      }
    }
    function add(){
      if (isset($_POST['new_user'])) { //user form

        $this->user->set('username', $_POST['username']);
        $this->user->set('name', $_POST['name']);
        $this->user->set('password', $_POST['password']);
        $this->user->set('surname', $_POST['surname']);
        $this->user->set('email', $_POST['email']);
        $this->user->set('rol', $_POST['rol']);
        $this->user->create();
      }
    }

    function edit(){
      // code
    }

    function overall(){
      //
    }

  } $user = new usersController();
//
?>
