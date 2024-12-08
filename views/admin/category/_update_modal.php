<?php 
    include_once './configs/helper.php';

    if(isset($_POST['update_category'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $thumbnail = $_FILES['file'] && $_FILES['file']['error'] === UPLOAD_ERR_OK ? upload_file($_FILES['file']['tmp_name']) : $_POST['thumbnail'];
        $is_show = isset($_POST['is_show']) ? 1 : 0;
        $slug = slugify($name);
        $page = isset($_GET['page_index']) ? $_GET['page_index'] : 1;
        $url = 'admin.php?page=category&page_index='.$page.'';

        $category = [
            'id' => $id,
            'name' => $name,
            'thumbnail' => $thumbnail,
            'slug' => $slug,
            'is_show' => $is_show
        ];

        $update_category = Category::update_category($category);

        if($is_add_category['status']) {
            redirect($url, $is_add_category['message'], "success");
        } else {
            redirect($url, $is_add_category['message'], "error");
        }

    }
?>

<div class="modal fade" id="update_category_modal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Sửa danh mục</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="update-category-id">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" id="update-category-name" placeholder="Nhập vào tên danh mục của bạn"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                    <input type="file" name="file" class="form-control">
                    <input type="hidden" name="thumbnail" id="update-category-thumbnail" class="form-control">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" id="update-category-show" name="is_show" type="checkbox"
                        role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ẩn hiện danh mục</label>
                </div>
            </div>
            <div class="modal-footer">
                <button name="update_category" type="submit" class="btn btn-primary">Thêm danh mục</button>
            </div>
        </form>
    </div>
</div>