<?php
$data['category'] = [
    1 => [
        'name' => 'Electronics',
        'thumbnail' => 'https://example.com/images/electronics.jpg',
        'slug' => 'electronics',
    ],
    2 => [
        'name' => 'Books',
        'thumbnail' => 'https://example.com/images/books.jpg',
        'slug' => 'books',
    ],
    3 => [
        'name' => 'Clothing',
        'thumbnail' => 'https://example.com/images/clothing.jpg',
        'slug' => 'clothing',
    ],
    4 => [
        'name' => 'Furniture',
        'thumbnail' => 'https://example.com/images/furniture.jpg',
        'slug' => 'furniture',
    ],
    5 => [
        'name' => 'Toys',
        'thumbnail' => 'https://example.com/images/toys.jpg',
        'slug' => 'toys',
    ],
];
?>


<div>
    <div style="background-color:var(--secondary)" class="d-flex justify-content-center">
        <div class="container">
            <img src="./img/top_banner.webp" height="auto" width="100%">
        </div>
    </div>
    <div class="mx-auto" style="background-color: white">
        <div class="container p-0" style="width:1230px">
            <div class="d-flex align-items-center justify-content-between" style="height: 68px">
                <div>
                    <img src="./img/logo.webp" style="width:220px; vertical-align: middle;">
                </div>
                <div class="d-flex gap-3">
                    <div class="d-flex align-items-center gap-2 position-relative"  style="height:68px">
                        <div class="dropdown d-flex align-items-center gap-2"  style="height:100%">
                            <img src="./img/menu_red.svg" style="color: var(--greyD);">
                            <span><i class="fa-solid fa-angle-down"></i></span>
                        <ul class="dropdown-menu container pt-4 px-3 pb-3" aria-labelledby="dropdownMenuButton" style="width:1230px;z-index:10000">
                            <div class="row">
                                <div class="col-3 " style="border-right:1px solid #ccc">
                                    <p class="fs-4">Danh mục sản phẩm</p>
                                    <?php foreach ($data['category'] as $keys => $values) : ?>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <?php echo $values['name']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </div>
                                <div class="col-9">

                                </div>
                            </div>
                        </ul>
                        </div>
                    </div>
                    <div class="input-group d-flex align-items-center">
                        <div class="input-group">
                            <input type="text" class="form-control rounded" placeholder="Tìm kiếm sản phẩm..." style="width: 585px;height:40px">
                            <div class="input-group-append position-relative">
                                <button class="btn btn-outline-secondary position-absolute d-flex justify-content-center rounded" type="button" style="width:72px;height:30px;background:var(--primary);color:white;right:2px;top:5px">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
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
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-regular fa-user"></i>
                        <span class="text-xs">Tài khoản</span>
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
    pointer-events: none;
}
.dropdown-menu {
    left: -255px;
    top: 65px;
}
</style>