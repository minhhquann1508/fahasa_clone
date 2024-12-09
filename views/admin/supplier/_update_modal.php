<?php 
    include_once './configs/helper.php';

    if(isset($_POST['update_supplier'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $thumbnail = $_FILES['file'] && $_FILES['file']['error'] === UPLOAD_ERR_OK ? upload_file($_FILES['file']['tmp_name']) : $_POST['thumbnail'];
        $is_show = isset($_POST['is_show']) ? 1 : 0;
        $slug = slugify($name);
        $url = 'admin.php?page=supplier';

        $supplier = [
            'id' => $id,
            'name' => $name,
            'thumbnail' => $thumbnail,
            'slug' => $slug,
            'is_show' => $is_show,
            'description' => $description
        ];

        $update_supplier = Supplier::update_supplier($supplier);

        if($update_supplier['status']) {
            redirect($url, $update_supplier['message'], "success");
        } else {
            redirect($url, $update_supplier['message'], "error");
        }
    }
?>
<div class="modal fade" id="update_supplier_modal" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="add-category-form" class="modal-content" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Sửa nhà cung cấp</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input name="id" type="hidden" id="update-supplier-id">
                    <label for="exampleInputEmail1" class="form-label">Tên nhà cung cấp</label>
                    <input type="text" id="update-supplier-name" name="name"
                        placeholder="Nhập vào tên nhà cung cấp của bạn" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                    <input type="file" name="file" class="form-control">
                    <input type="hidden" name="thumbnail" id="update-supplier-thumbnail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" id="update-supplier-description" style="resize: none; height: 150px"
                        class="form-control" placeholder="Nhập vào mô tả"></textarea>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" id="update-supplier-show" name="is_show" type="checkbox"
                        role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ẩn hiện</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="update_supplier" class="btn btn-primary">Sửa nhà cung cấp</button>
            </div>
        </form>
    </div>
</div>