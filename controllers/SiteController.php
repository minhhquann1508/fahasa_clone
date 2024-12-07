<?php 
    class SiteController {
        public function index() {
            $main_view = './views/user/home.php';
            include_once './views/user/layout.php';
        }
        public function login() {
            $main_view = './views/auth/login.php';
            include_once './views/user/layout.php';
        }
    }
?>