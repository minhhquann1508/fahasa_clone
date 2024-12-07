<div class="modal fade" id="update_category_modal" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Sửa danh mục</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" placeholder="Nhập vào tên danh mục của bạn" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                    <input type="file" name="thumbnail" class="form-control">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" name="is_show" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ẩn hiện danh mục</label>
                </div>
            </div>
            <div class="modal-footer">
                <button name="add_category" type="submit" class="btn btn-primary">Thêm danh mục</button>
            </div>
        </form>
    </div>
</div>