<div class="row align-items-center mb-3">
    <div class="col-6">
        <h5>Thêm sản phẩm</h5>
    </div>
</div>

<section>
    <form action="" class="border rounded p-4">
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
                            <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Giảm giá (%)</label>
                            <input type="text" name="discount" class="form-control"
                                placeholder="Nhập giá giảm của sản phẩm">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label">Lượt xem</label>
                            <input type="number" name="views" class="form-control" placeholder="Nhập lượt xem">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Lượt bán</label>
                            <input type="number" name="solds" class="form-control" placeholder="Nhập lượt bán">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <textarea style="resize: none; height: 150px" class="form-control"
                            placeholder="Nhập vào mô tả sản phẩm"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="file">Hình ảnh sản phẩm</label>
                        <label class="d-block rounded border shadow"
                            style="width: 180px; height: 180px; ; overflow: hidden">
                            <input type="file" id="file" class="d-none">
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
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Nhà cung cấp</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Loại hàng</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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
                        <input type="number" name="views" class="form-control" placeholder="Nhập lượt xem">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Số lượng trang</label>
                        <input type="number" name="solds" class="form-control" placeholder="Nhập lượt bán">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <label class="form-label">Ẩn hiện</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <label class="form-label">Sản phẩm hot</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày phát hành</label>
                    <input class="d-block w-50 p-2 rounded" style="border: 1px solid #ccc;" type="date" id="start" />
                </div>
            </div>
        </div>
        </div>

        </div>
    </form>
</section>