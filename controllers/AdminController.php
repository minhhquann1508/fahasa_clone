<?php 
    class AdminController {
        public function dashboard() {
            $main_view = './views/admin/dashboard.php';
            include_once './views/admin/layout.php';
        }

        public function banner() {
            $main_view = './views/admin/banner.php';
            include_once './views/admin/layout.php';
        }

        public function supplier() {
            $main_view = './views/admin/supplier.php';
            include_once './views/admin/layout.php';
        }

        public function product() {
            $main_view = './views/admin/product/product.php';
            include_once './views/admin/layout.php';
        }

        public function category() {
            $main_view = './views/admin/category.php';
            include_once './views/admin/layout.php';
        }

        public function type() {
            $main_view = './views/admin/type.php';
            include_once './views/admin/layout.php';
        }

        public function comment() {
            $main_view = './views/admin/comment.php';
            include_once './views/admin/layout.php';
        }

        public function user() {
            $main_view = './views/admin/user.php';
            include_once './views/admin/layout.php';
        }

        public function order() {
            $main_view = './views/admin/order.php';
            include_once './views/admin/layout.php';
        }
    }
?>