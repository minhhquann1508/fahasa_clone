<?php 
    include_once './configs/upload.php';
    include_once './configs/helper.php';
    include_once './models/Category.php';

    if(isset($_POST['add_category'])) {
        $name = $_POST['name'];
        $thumbnail = $_FILES['thumbnail'] && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK ? upload_file($_FILES['thumbnail']['tmp_name']) : '';
        $slug = slugify($name);
        $is_show = isset($_POST['is_show']) ? 1 : 0;

        $category = [
            'name' => $name,
            'thumbnail' => $thumbnail,
            'slug' => $slug,
            'is_show' => $is_show
        ];

        $is_add_category = Category::add_new_category($category);

        if($is_add_category['status']) {
            redirect('admin.php?page=category', $is_add_category['message'], "success");
        } else {
            redirect('admin.php?page=category', $is_add_category['message'], "error");
        }
    }
?>

<div class="modal fade" id="add_category_modal" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="add-category-form" class="modal-content" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Thêm danh mục</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                    <input type="text" id="category-name" name="name" placeholder="Nhập vào tên danh mục của bạn"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                    <input type="file" id="category-thumbnail" name="thumbnail" class="form-control">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" id="category-is-show" name="is_show" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ẩn hiện danh mục</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="add_category" class="btn btn-primary">Thêm danh mục</button>
            </div>
        </form>
    </div>
</div>