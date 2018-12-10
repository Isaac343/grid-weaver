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

  } $user = new usersController();
    // $result = new usersController;
    // $result->index();
//
class postsController{
  private $posts;

  function __construct(){
    $this->posts = new Posts();
  }

  function index(){
    if (true) {
      $this->user->list();
    }
  }
  function new_post(){
    if (isset($_POST['new_post'])) { //user form

      $this->posts->set('post_title', $_POST['post_title']);
      $this->posts->set('post_content', $_POST['post_content']);
      $this->posts->set('post_category', $_POST['post_category']);
      $this->posts->create();
    }
  }


} $user = new usersController();
  // $result = new usersController;
  // $result->index();
//
?>
