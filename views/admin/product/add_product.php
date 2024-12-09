<?php 
    include_once './models/Product.php';
    include_once './models/Category.php';
    include_once './models/Supplier.php';
    include_once './models/Type.php';
    include_once './configs/helper.php';
    include_once './configs/upload.php';

    $category_data = Category::get_all_categories();
    $supplier_data = Supplier::get_all_suppliers();
    $type_data = Type::get_all_types();

    if(isset($_POST['add_product'])) {
        $product = [
            'title' => $_POST['title'] ?? '',
            'price' => (int)$_POST['price'],
            'discount' => (int)$_POST['discount'],
            'views' => (int)$_POST['views'],
            'solds' => (int)$_POST['solds'],
            'description' => $_POST['description'] ?? '',
            'thumbnail' => $_FILES['thumbnail'] && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK? upload_file($_FILES['thumbnail']['tmp_name']) : '',
            'category_id' => $_POST['category_id'],
            'supplier_id' => $_POST['supplier_id'],
            'type_id' => $_POST['type_id'],
            'author' => $_POST['author'],
            'translator' => $_POST['translator'],
            'quantity' => (int)$_POST['quantity'],
            'page_num' => (int)$_POST['page_num'],
            'publish_year' => $_POST['publish_year'] ?? date('Y-m-d'),
            'is_show' => isset($_POST['is_show']) ? 1 : 0,
            'is_hot' => isset($_POST['is_hot']) ? 1 : 0,
            'slug' => slugify($_POST['title']) ?? '',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ];

        $is_add_product = Product::add_new_product($product);

        if($is_add_product['status']) {
            redirect('admin.php?page=product', $is_add_product['message'], "success");
        } else {
            redirect('admin.php?page=product', $is_add_product['message'], "error");
        }
    }
?>

<div class="row align-items-center mb-3">
    <div class="col-6">
        <h5>Thêm sản phẩm</h5>
    </div>
</div>

<section>
    <form action="" method="post" class="border rounded p-4" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label">Giá sản phẩm</label>
                            <input type="text" value="0" name="price" class="form-control"
                                placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Giảm giá (%)</label>
                            <input type="text" value="0" name="discount" class="form-control"
                                placeholder="Nhập giá giảm của sản phẩm">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label">Lượt xem</label>
                            <input type="number" value="0" name="views" class="form-control"
                                placeholder="Nhập lượt xem">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Lượt bán</label>
                            <input type="number" value="0" name="solds" class="form-control"
                                placeholder="Nhập lượt bán">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <textarea name="description" style="resize: none; height: 180px" class="form-control"
                            placeholder="Nhập vào mô tả sản phẩm"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="file">Hình ảnh sản phẩm</label>
                        <label class="d-block rounded border shadow"
                            style="width: 180px; height: 180px; ; overflow: hidden">
                            <input type="file" id="file" name="thumbnail" class="d-none">
                            <img src="https://media.istockphoto.com/id/688550958/vector/black-plus-sign-positive-symbol.jpg?s=612x612&w=0&k=20&c=0tymWBTSEqsnYYXWeWmJPxMotTGUwaGMGs6BMJvr7X4="
                                class="d-block w-100 h-100" alt="">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <div class="mb-3">
                        <label class="form-label">Danh mục sản phẩm</label>
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <?php 
                                foreach ($category_data['data'] as $category) {
                                    echo '
                                        <option value="'.$category['id'].'">'.$category['name'].'</option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Nhà cung cấp</label>
                        <select class="form-select" name="supplier_id" aria-label="Default select example">
                            <?php 
                                foreach ($supplier_data['data'] as $supplier) {
                                    echo '
                                        <option value="'.$supplier['id'].'">'.$supplier['name'].'</option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Loại hàng</label>
                        <select class="form-select" name="type_id" aria-label="Default select example">
                            <?php 
                                foreach ($type_data['data'] as $type) {
                                    echo '
                                        <option value="'.$type['id'].'">'.$type['name'].'</option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Tác giả</label>
                        <input type="text" name="author" class="form-control" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Dịch giả</label>
                        <input type="text" name="translator" class="form-control"
                            placeholder="Nhập giá giảm của sản phẩm">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Số lượng tồn</label>
                        <input type="number" value="0" name="quantity" class="form-control"
                            placeholder="Nhập số lượng tồn">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Số lượng trang</label>
                        <input type="number" value="0" name="page_num" class="form-control" placeholder="Nhập lượt bán">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <label class="form-label">Ẩn hiện</label>
                            <input class="form-check-input" name="is_show" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <label class="form-label">Sản phẩm hot</label>
                            <input class="form-check-input" name="is_hot" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày phát hành</label>
                    <input name="publish_year" class="d-block w-50 p-2 rounded" style="border: 1px solid #ccc;"
                        type="date" id="start" />
                </div>
            </div>
        </div>
        <div class="text-end">
            <button type="submit" name="add_product" class="btn btn-primary">Thêm sản phẩm</button>
        </div>
    </form>
</section>