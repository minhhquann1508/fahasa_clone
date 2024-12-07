<?php 
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : null;
?>

<?php 
    switch ($type) {
        case 'add':
            include_once 'add_product.php';
            break;
        case 'update':
            if($id == null) {
                die();
            } else {
                include_once 'update_product.php';
            }
            break;
        case 'delete':
            if($id == null) {
                die();
            } else {
                echo 'Xóa sản phẩm';
            }
            break;
        default:
            include_once 'list_product.php';
            break;
    }
?>