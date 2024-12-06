<?php 
    class AdminController {
        public function dashboard() {
            $main_view = './views/admin/dashboard.php';
            include_once './views/admin/layout.php';
        }
    }
?>