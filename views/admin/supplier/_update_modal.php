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
                    <input type="hidden" id="update-supplier-id">
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