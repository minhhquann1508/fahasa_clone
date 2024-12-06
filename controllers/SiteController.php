<?php 
    class SiteController {
        public function index() {
            $main_view = './views/user/home.php';
            include_once './views/user/layout.php';
        }
    }
?>