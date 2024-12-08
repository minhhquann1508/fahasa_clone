<div class="container mt-4">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" id="all-tab" data-bs-toggle="pill" href="#all">Tất Cả</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="orders-tab" data-bs-toggle="pill" href="#orders">Đơn Hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="events-tab" data-bs-toggle="pill" href="#events">Sự Kiện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="discounts-tab" data-bs-toggle="pill" href="#discounts">Mã Giảm Giá</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="confirmations-tab" data-bs-toggle="pill" href="#confirmations">Xác Nhận</a>
        </li>
    </ul>
    <div class="line"></div>

    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="all">
            <div class="notification">Không có thông báo.</div>
        </div>
        <div class="tab-pane fade" id="orders">
            <div class="notification">Không có đơn hàng nào.</div>
        </div>
        <div class="tab-pane fade" id="events">
            <div class="notification">Không có sự kiện nào.</div>
        </div>
        <div class="tab-pane fade" id="discounts">
            <div class="notification">Không có mã giảm giá nào.</div>
        </div>
        <div class="tab-pane fade" id="confirmations">
            <div class="notification">Không có xác nhận nào.</div>
        </div>
    </div>
</div>

<style>
.tabs {
    display: flex;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
}

.tab-item {
    padding: 10px 20px;
    cursor: pointer;
    font-weight: bold;
    color: #333;
    text-align: center;
}

.tab-item.active {
    color: #ff6a00;
    border-bottom: 2px solid #ff6a00;
}

.notification {
    font-size: 18px;
    color: #555;
    text-align: center;
}

.line {
    width: 100%;
    height: 2px;
    background-color: #ff6a00;
    margin-top: 20px;
}
</style>