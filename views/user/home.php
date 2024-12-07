<?php
$data['category'] = [
    1 => [
        'name' => 'Electronics',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'electronics',
    ],
    2 => [
        'name' => 'Books',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'books',
    ],
    3 => [
        'name' => 'Clothing',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'clothing',
    ],
    4 => [
        'name' => 'Furniture',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'furniture',
    ],
    5 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],
    6 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],
    7 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],
    8 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],
    9 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],
    10 => [
        'name' => 'Toys',
        'thumbnail' => 'https://placehold.co/400',
        'slug' => 'toys',
    ],

];



?>

<div class="container pb-2 p-0" style="width: 1230px">
    <?php include_once '_carousel.php' ?>
    <div class="rounded mt-4 " style="height:100px;background:var(--white)" >

    </div>
</div>
<!-- Flash Sales -->
<div class="mt-3 position-relative" style="height: 450px;">
    <img src="https://cdn0.fahasa.com/media/fahasa_web_image/flash_sale_background_image.jpg" class="position-absolute" alt="" width="100%" height="450px">
    <div class="position-absolute" style="left:50%;transform:translate(-50%,0)">
        <div class="container px-4 py-3 rounded mt-3 d-flex gap-4 align-items-center d-flex justify-content-between" style="width: 1230px;background:var(--white)">
            <div class="d-flex justify-content-between">
                <div>
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/flashsale/label-flashsale.svg?q=" alt="" height="26px">
                </div>
                <div>
                    Kết thúc trong 01 : 32 : 
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="" class="d-flex align-items-center gap-1">
                    <span>Xem tất cả</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Category list -->
<div class="container mt-5 pt-0 pb-3 px-3 rounded" style="width: 1230px; background: var(--white);">
    <div class="d-flex align-items-center py-3 border-bottom gap-2">
        <img src="./img/menu_red.svg" alt="Menu Icon">
        <p class="fs-5 fw-bold">Danh mục sản phẩm</p>
    </div>
    <div class="row mt-3">
        <?php foreach ($data['category'] as $key => $value) : ?>
            <div class="col text-center" style="height: 160px;">
                <a href="<?php echo $value['slug']; ?>" class="text-decoration-none">
                    <img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['name']; ?>" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                    <p class="mt-2"><?php echo $value['name']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Best seller -->
<div class="container px-0 mt-3 rounded" style="width: 1230px;background-color:white">
<div class="">
    <div class="d-flex align-items-center py-3 px-3 gap-2 rounded-top" style="background-color: var(--fourth);">
        <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png" alt="" width="32px">
        <p class="fs-5 fw-bold">Xu Hướng Mua Sắm</p>
    </div> 
    <div class="px-4 ">
        <div class="card-header border-bottom">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active py-3" id="login-tab" data-bs-toggle="tab" data-bs-target="#day"
                        type="button" role="tab" aria-selected="true">Xu Hướng Theo Ngày</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link py-3" id="register-tab" data-bs-toggle="tab" data-bs-target="#hot"
                        type="button" role="tab" aria-selected="false">Sách HOT - Giảm Sốc</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link py-3" id="register-tab" data-bs-toggle="tab" data-bs-target="#bestseller"
                        type="button" role="tab" aria-selected="false">Bestseller Ngoại Văn</button>
                </li>
            </ul>
        </div>
        <div class="card-body ">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="login-tab">
                    <?php include '_listproducts.php'?>

                </div>
                <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="register-tab">
                    <?php include '_listproducts.php'?>
                    2
                </div>
                <div class="tab-pane fade" id="bestseller" role="tabpanel" aria-labelledby="register-tab">
                    <?php include '_listproducts.php'?>
                    3
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<div style="height: 400px;"></div>
<style>
    p {
        padding: 0;
        margin: 0;
    }
    .nav-tabs .nav-link {
    border: none;
    font-size: 14px;
    color: #666;
}
.nav-tabs .nav-link.active {
    color: #d90429;
    border-bottom: 2px solid #d90429;
    font-weight: bold;
}

</style>