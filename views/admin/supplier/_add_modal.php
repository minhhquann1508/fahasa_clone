<?php 
    include_once './configs/upload.php';
    include_once './configs/helper.php';

    if(isset($_POST['add_supplier'])) {
        $name = $_POST['name'];
        $thumbnail = $_FILES['thumbnail'] && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK? upload_file($_FILES['thumbnail']['tmp_name']) : '';
        $description = $_POST['description'];
        $is_show = isset($_POST['is_show']) ? 1 : 0;
        $slug = slugify($name);

        $supplier = [
            'name' => $name,
            'thumbnail' => $thumbnail,
            'description' => $description,
            'slug' => $slug,
            'is_show' => $is_show
        ];

        $is_add_supplier = Supplier::add_new_supplier($supplier);

        if($is_add_supplier['status']) {
            redirect('admin.php?page=supplier', $is_add_supplier['message'], "success");
        } else {
            redirect('admin.php?page=supplier', $is_add_supplier['message'], "error");
        }
    }
?>

<div class="modal fade" id="add_supplier_modal" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="add-category-form" class="modal-content" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Thêm nhà cung cấp</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên nhà cung cấp</label>
                    <input type="text" id="category-name" name="name" placeholder="Nhập vào tên nhà cung cấp của bạn"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                    <input type="file" id="category-thumbnail" name="thumbnail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" style="resize: none; height: 150px" class="form-control"
                        placeholder="Nhập vào mô tả"></textarea>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" id="category-is-show" name="is_show" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ẩn hiện</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="add_supplier" class="btn btn-primary">Thêm nhà cung cấp</button>
            </div>
        </form>
    </div>
</div>