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
        public function logout() {
            $main_view = './views/auth/logout.php';
            include_once './views/user/layout.php';
        }
        public function test() {
            $main_view = './views/user/test.php';
            include_once './views/user/layout.php';
        }
        public function detail() {
            $main_view = './views/user/product_detail.php';
            include_once './views/user/layout.php';
        }
        public function profile(){
            $main_view = './views/user/profile/profile.php';
            include_once './views/user/layout.php';
        }
    }
?>