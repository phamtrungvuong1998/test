<?php
    require_once "./core/Controller.php";
    class AuthController extends Controller{
        public function login(){
            $this->view("Login");
        }

        public function loginProcess(){
            if ($_POST['username'] == 'vuong' && $_POST['pass'] == '123') {
                $_SESSION['login'] =[$_POST['username'], $_POST['pass']];
                header("Location: http://localhost/Admin/");
            }
        }

        public function logout(){
            session_destroy();
            header("Location: http://localhost/Admin/");
        }
    }

?>