<?php 
    include_once './models/Product.php';
    include_once './configs/helper.php';
    include_once './utils/constant.php';

    $page = isset($_GET['page_index']) ? $_GET['page_index'] : 1;

    $product_data = Product::get_all_product_pagination(true, $page, $PAGE_SIZE);

    if(isset($_POST['delete_product'])) {
        $id = $_POST['id'];
        $url = 'admin.php?page=product';
        $delete_product = Product::delete_product($id);

        if($delete_product['status']) {
            redirect(''.$url.'&page_index='.$page.'', $delete_product['message'], "success");
        } else {
            redirect(''.$url.'&page_index='.$page.'', $delete_product['message'], "error");
        }
    }
?>

<div class="row align-items-center mb-4">
    <div class="col-6">
        <h5>Danh sách sản phẩm</h5>
    </div>
    <div class="col-6 text-end">
        <a href="admin.php?page=product&type=add" class="btn btn-primary text-white">Thêm sản phẩm</a>
    </div>
</div>

<section>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá (VNĐ)</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Lượt bán</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Loại hàng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">NXB</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($product_data['data']['products'] as $product) {
                    echo '
                        <tr>
                            <td class="text-center">'.$product['id'].'</td>
                            <td>'.$product['title'].'</td>
                            <td class="text-center">'.format_price($product['price']).'</td>
                            <td>
                                <img src="'.$product['thumbnail'].'" alt="">
                            </td>
                            <td class="text-center">'.$product['solds'].'</td>
                            <td class="text-center">'.$product['views'].'</td>
                            <td class="text-center">'.$product['type_name'].'</td>
                            <td class="text-center">'.$product['category_name'].'</td>
                            <td class="text-center">'.$product['supplier_name'].'</td>
                            <td class="text-center">
                                <button class="btn btn-info py-1"><a href="admin.php?page=product&type=update&id='.$product['id'].'"><i class="fa-regular fa-pen-to-square"></i></a></button>
                                <span class="dropdown">
                                    <a class="btn btn-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <ul class="dropdown-menu mt-2" style="width: 200px;">
                                        <form class="p-2" method="post">
                                            <input type="hidden" name="id" value="'.$product['id'].'">
                                            <p class="text-center" for="">Bạn có chắc chắn muốn xóa chứ ?</p>
                                            <div class="text-end">
                                                <button name="delete_product" type="submit" class="text-xs py-1 px-2 btn btn-danger">Xác nhận</button>
                                            </div>
                                        </form>
                                    </ul>
                                </span>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>

    <?php 
        include_once './views/core/_pagination.php';
        render_pagination($page, $product_data['data']['total'], 'admin.php?page=product', $PAGE_SIZE);
    ?>
</section>