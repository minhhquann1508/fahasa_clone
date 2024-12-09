<?php $data['category'] = category(); ?>

<div>
    <div style="background-color: var(--secondary);" class="d-flex justify-content-center">
        <div class="container">
            <img src="./img/top_banner.webp" height="auto" width="100%">
        </div>
    </div>
    <div class="mx-auto" style="background-color: white;">
        <div class="container p-0" style="width:1230px;">
            <div class="d-flex align-items-center justify-content-between" style="height: 68px;">
                <div>
                    <a href="<?php echo home?>">
                        <img src="./img/logo.webp" style="width:220px; vertical-align: middle;">
                    </a>
                </div>
                <div class="d-flex gap-3">
                    <div class="d-flex align-items-center gap-2 position-relative" style="height: 68px;">
                        <div class="dropdown d-flex align-items-center gap-2" style="height: 100%;">
                            <img src="./img/menu_red.svg" style="color: var(--greyD);">
                            <span><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu container pt-4 px-3 pb-3" aria-labelledby="dropdownMenuButton"
                                style="width: 1230px;">
                                <div class="row">
                                    <div class="col-3" style="border-right: 1px solid #ccc;">
                                        <p class="fs-4">Danh mục sản phẩm</p>
                                        <?php foreach ($data['category'] as $keys => $values): ?>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <?php echo $values['name']; ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-9">
                                        <!-- You can add more content here if needed -->
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="input-group d-flex align-items-center">
                        <input type="text" class="form-control rounded" placeholder="Tìm kiếm sản phẩm..."
                            style="width: 585px;height: 40px;">
                        <div class="input-group-append position-relative">
                            <button
                                class="btn btn-outline-secondary position-absolute d-flex justify-content-center rounded"
                                type="button"
                                style="width: 72px;height: 30px;background: var(--primary);color: white;right: 2px;top: -15px;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-regular fa-bell"></i>
                        <span class="text-xs">Thông báo</span>
                    </div>
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="text-xs">Giỏ hàng</span>
                    </div>
                    <div class="d-flex flex-column accout text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-regular fa-user"></i>
                        <span class="text-xs">Tài khoản</span>
                        <?php if (!isset($_SESSION['user'])) { ?>
                        <ul class="accept">
                            <li><a class="dropdown-item" href="index.php?page=login">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                        </ul>
                        <?php } else { ?>
                        <ul class="accept">
                            <li><a class="dropdown-item" href="index.php?page=profile">Thông tin cá nhân</a></li>
                            <li><a class="dropdown-item" href="index.php?page=logout">Đăng xuất</a></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="rounded d-flex align-items-center gap-2 border px-2 pt-1 pb-2">
                    <div class="btn-group">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./img/default.svg" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><img src="./img/english.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.dropdown:hover>.dropdown-menu {
    display: block;
    z-index: 1000;
}

.dropdown>.dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

.dropdown-menu {
    left: -255px;
    top: 65px;
}

.accout {
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease;
}

.accept {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 10;
    display: none;
}

.accout:hover .accept {
    display: block;
}

.accept li {
    margin: 0;
    padding: 0;
}

.accept a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.accept a:hover {
    background-color: #d90429;
    color: #fff;
}

.accept li:not(:last-child) a {
    border-bottom: 1px solid #ddd;
}
</style>