

<?php include_once './views/user/_list.php';?>
<?php include_once './views/user/_listproduct.php';?>
<?php include_once './models/Product.php';?>

<!-- datahandlers -->
<?php
    $data['conan'] = Database::get_by_cond("SELECT * FROM product WHERE slug like '%conan%' ORDER BY id asc LIMIT 10");
    $data['conan2'] = Database::get_by_cond('SELECT * FROM product WHERE is_hot = 1 ORDER BY id ASC LIMIT 10');
    $data['manga_bestseller'] = Database::get_by_cond('SELECT * FROM product WHERE is_hot = 1 ORDER BY id ASC LIMIT 20');
    
    $data['manga_bestseller1'] = array_slice($data['manga_bestseller'], 0, 10);
    $data['manga_bestseller2'] = array_slice($data['manga_bestseller'], 10, 20);
?>


<!-- ads -->
<div class="container pb-2 p-0" style="width: 1230px">
    <?php include_once '_carousel.php' ?>
    <div class="rounded mt-4 " style="background:var(--white)" >
        <div class="row p-3">
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2024/Icon_XaKho_120x120_1.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Xả Kho</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2024/Icon_GameManhGhep_120x120.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Ghép tranh tặng quà</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2024/Icon_TanViet_120x120.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Tân Việt</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2024/NCC_FirstNew_120x120.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">First News</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_MaGiamGia_8px_1.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Mã giảm giá</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_SanPhamMoi_8px_1.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Sản phẩm mới</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/Icon_GiamGia_120x120.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Sản phẩm được trợ giá</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-01-2024/ChoDoCu.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Phiên chợ đồ cũ</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/ICON/Icon_DonSi_120x120.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Bán sỉ</p>
            </div>
            <div class="col">
                <div class=" d-flex justify-content-center">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-06-2024/icon_ManngaT06.png" alt="" width="46">
                </div>
                <p class="text-center mt-2">Manga</p>
            </div>
        </div>
    </div>
</div>
<!-- Flash Sales -->
<div class="mt-3 position-relative" style="height: 450px;">
    <img src="https://cdn0.fahasa.com/media/fahasa_web_image/flash_sale_background_image.jpg" class="position-absolute" alt="" width="100%" height="450px">
    <div class="position-absolute" style="left:50%;transform:translate(-50%,0)">
        <div class="container px-4 py-3 rounded mt-3 d-flex gap-4 align-items-center d-flex justify-content-between" style="width: 1230px;background:var(--white)">
            <div class="d-flex justify-content-between gap-3">
                <div>
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/flashsale/label-flashsale.svg?q=" alt="" height="26px">
                </div>
                <div>
                    <p class="fw-bold">Kết thúc trong <span></span></p>
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
    <div class="position-absolute" style="left:50%;transform:translate(-50%,0);margin-top:75px">
        <div class="container px-0 py-3 rounded" style="width: 1230px">
            <div class="flash-grid-container">
                <div class="card" style="background:var(--white);height:340px"></div>
                <div class="card" style="background:var(--white);height:340px"></div>
                <div class="card" style="background:var(--white);height:340px"></div>
                <div class="card" style="background:var(--white);height:340px"></div>
                <div class="card" style="background:var(--white);height:340px"></div>
            </div>
        </div>
    </div>
</div>

<!-- Category list 1-->
<?php $data['category'] = category(); ?>
<div class="container mt-5 pt-0 pb-3 px-3 rounded" style="width: 1230px; background: var(--white);">
    <div class="d-flex align-items-center py-3 border-bottom gap-2">
        <img src="./img/menu_red.svg" alt="Menu Icon">
        <p class="fs-5 fw-bold">Danh mục sản phẩm</p>
    </div>
    <div class="row mt-3">
        <?php foreach ($data['category'] as $key => $value) : ?>
            <div class="col text-center" style="height: 160px;">
                <a href="<?php echo $value['slug']; ?>" class="text-decoration-none">
                    <img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['name']; ?>" class="img-fluid">
                    <p class="mt-2"><?php echo $value['name']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Best seller -->
<?php showScrollableList_WithHeader("https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png", 
                                    "Xu Hướng Mua Sắm", 
                                    ["Xu Hướng Theo Ngày", "Sách HOT - Giảm Sốc", "Bestseller Ngoại Văn"], 
                                    "bestsellers", 
                                    [list_products_unscrollable($data['manga_bestseller1']),list_products_unscrollable($data['manga_bestseller2']),list_products_unscrollable($data['manga_bestseller2'])]);?>

<!-- list products 1 -->
<?php  showScrollableList_WithoutHeader(["Lịch Bàn 2025"], 
                                         'calendars', 
                                         [list_products_scrollable($data['manga_bestseller2'])]) ?>

<!-- Merry Chrismas -->
<div class="container pb-4 px-2 mt-3 rounded" style="width: 1230px;background-color:white">
    <div class="d-flex align-items-center pt-3 py-3 gap-2 border-bottom">
        <img src="https://cdn0.fahasa.com/media/fahasa_web_image/noel_event_image/satan_noel.svg" alt="" width="24px">
        <p class="fw-bold" style="font-size: 17px;text-transform: uppercase;">merry christmas</p>
    </div>
    <div class="d-flex justify-content-between gap-3">
        <div class="p-2">
            <img  src="https://placehold.co/600x400" width="750px">
        </div>
        <div class="w-100">
            <p class="mt-2 fw-bold" style="font-size: 14px;">Trang trí Giáng Sinh</p>
            <div class="d-flex justify-content-between mt-2">
                <div class="px-2" style="background: #f2f4f5;">
                    <img class="rounded mt-2" src="https://placehold.co/400" alt="" width="80px">
                    <p class="mt-2 mb-4 text-center" style="font-size: 12px">Cây thông</p>
                </div>
                <div class="px-2" style="background: #f2f4f5;">
                    <img class="rounded mt-2" src="https://placehold.co/400" alt="" width="80px">
                    <p class="mt-2 mb-4 text-center" style="font-size: 12px">Cây thông</p>
                </div>
                <div class="px-2" style="background: #f2f4f5;">
                    <img class="rounded mt-2" src="https://placehold.co/400" alt="" width="80px">
                    <p class="mt-2 mb-4 text-center" style="font-size: 12px">Cây thông</p>
                </div>
                <div class="px-2" style="background: #f2f4f5;">
                    <img class="rounded mt-2" src="https://placehold.co/400" alt="" width="80px">
                    <p class="mt-2 mb-4 text-center" style="font-size: 12px">Cây thông</p>
                </div>
            </div>
            <div class="mt-3" style="overflow: auto; height:310px">
                <div class="">
                    <img class="w-100" src="https://placehold.co/400x100" alt="" height="100px">
                </div>
                <div class="mt-2">
                    <img class="w-100" src="https://placehold.co/400x100" alt="" height="100px">
                </div>
                <div class="mt-2">
                    <img class="w-100" src="https://placehold.co/400x100" alt="" height="100px">
                </div>
                <div class="mt-2">
                    <img class="w-100" src="https://placehold.co/400x100" alt="" height="100px">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hot list products 1-->
<div class="container px-0 pb-3 mt-4 rounded position-relative" style="width: 1230px; background-color:white;">
    <div class="d-flex align-items-center py-3 px-3 gap-2 rounded-top" style="background-color: var(--fourth);">
        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/category/ico_sachtrongnuoc.svg" alt="" width="32px">
        <p class="fs-5 fw-bold">TỦ SÁCH NỔI BẬT</p>
    </div> 
    <div class="list_product-scroll-container scroll-container px-2">
        <?php include '_hotlist.php'?>
    </div>
    <div class="scroll-btn left" style="top:150px;left:-30px"><i class="fa-solid fa-angle-left"></i></div>
    <div class="scroll-btn right" style="top:150px;right:-30px"><i class="fa-solid fa-angle-right"></i></div>
</div>

<!-- banner & bestproducts 1-->
<div class="container mt-3 p-0" style="width: 1230px;">
    <div class="d-flex justify-content-between gap-2">
        <?php
        showBanner_Bestsellers(
            "Thiếu nhi",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Người lớn",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Phụ nữ",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Cụ già",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        ?>
    </div>
</div>


<!-- list products 2-->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png", 
                         "Thương hiệu nổi bật", 
                         ["Mcbooks", "Bitex", "First News", "Hương Trang"], 
                         "highlighted-brands", 
                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),
                          list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]) ?>

<!-- list products 3-->
<?php  showScrollableList_WithoutHeader(["Tân Việt", "Thiên Long", "Deli", "Colormate"], 
                                         'ads', 
                                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),
                                          list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]) ?>

<!-- list products 4-->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2023/icon_new.png", 
                         "Combo trending", 
                         ["Combo kinh tế", "Combo Sách Học Ngoại Ngữ", "Combo Tâm Lý - Kỹ Năng Sống", "Combo Văn Học"], 
                         "combo-books", 
                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),
                         list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]);?>

<!-- banner & bestproducts 2-->
<div class="container mt-3 p-0" style="width: 1230px;">
    <div class="d-flex justify-content-between gap-2">
        <?php
        showBanner_Bestsellers(
            "Thiếu nhi",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Người lớn",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Phụ nữ",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Cụ già",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        ?>
    </div>
</div>

<!-- list products 5-->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2023/icon_new.png", 
                         "Foreign Books", 
                         ["Dictionaries & Languages", "Fiction", "Children's Books", "Other languages"], 
                         "foreign-books", 
                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),
                         list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]);?>

<!-- Best seller 2 -->
<?php  showScrollableList_WithoutHeader(["Truyện thiếu nhi", "Kiến thức - Kỹ Năng Sống Cho Trẻ", "Kiến Thức Bách Khoa", "Sách Âm Thanh"], 
                                         'random-books', 
                                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),
                                         list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]) ?>

<!-- banner & bestproducts 3-->
<div class="container mt-3 p-0" style="width: 1230px;">
    <div class="d-flex justify-content-between gap-2">
        <?php
        showBanner_Bestsellers(
            "Thiếu nhi",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Người lớn",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Phụ nữ",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        showBanner_Bestsellers(
            "Cụ già",
            "https://placehold.co/800x400/png",
            [
                "https://placehold.co/400",
                "https://placehold.co/400",
                "https://placehold.co/400"
            ]
        );
        ?>
    </div>
</div>

<!-- list products 6-->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico-dochoi_1.png", 
                         "Manga nổi bật", 
                         ["Manga Mới", "Light Novel Mới"], 
                         "manga-books", 
                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])]);?>

<!-- list products 7-->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_SachThieuNhi_120x120.png", 
                         "Văn phòng phẩm nổi bật", 
                         ["Máy tính điện tử", "Màu Arcrylic","Bút - Viết"], 
                         "working-books", 
                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller1'])])?>

<!-- Best seller -->
<?php showScrollableList("https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico-dochoi_1.png", 
                         "Đồ chơi", 
                         ["Mô hình nhân vật", "Robot - Siêu nhân", "Đồ Chơi Lắp Ráp"], 
                         "Toys", 
                         [list_products_unscrollable($data['manga_bestseller1']),"_listproducts1.php","_listproducts1.php","_listproducts1.php"]);?>


<!-- list products 8-->
<?php  showScrollableList_WithoutHeader(["Đèn bàn", "Bình nước", "Pin"], 
                                         'tools', 
                                         [list_products_scrollable($data['manga_bestseller1']),list_products_scrollable($data['manga_bestseller_1']),list_products_scrollable($data['manga_bestseller1'])]) ?>

<!-- hot list products 2-->
<div class="container px-0 pb-3 mt-4 rounded position-relative" style="width: 1230px; background-color:white;">
    <div class="list_product-scroll-container scroll-container px-2">
        <?php include '_hotlist.php'?>
    </div>
    <div class="scroll-btn left" style="top:100px;left:-30px"><i class="fa-solid fa-angle-left"></i></div>
    <div class="scroll-btn right" style="top:100px;right:-30px"><i class="fa-solid fa-angle-right"></i></div>
</div>


<!-- subcribe -->
<div class="container mt-5 p-3 mb-3 rounded-top" style="width: 1230px;background:rgb(159 167 171)">
    <div class="d-flex justify-content-center">
    <div class="d-flex" style="width:950px">
        <div class="d-flex align-items-center gap-2">
            <i class="fa-regular fa-envelope"></i>
            <p>ĐĂNG KÝ NHẬN BẢN TIN</p>
        </div>
        <div class="input-group d-flex align-items-center">
            <div class="input-group" style="width: 500px;height:40px">
                <input type="text" class="form-control rounded" placeholder="Tìm kiếm sản phẩm..." >
                <div class="input-group-append position-relative">
                    <button class="btn btn-outline-secondary position-absolute d-flex justify-content-center rounded" type="button" style="width:72px;height:30px;background:var(--primary);color:white;right:2px;top:5px">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<style>
    p {
        padding: 0;
        margin: 0;
    }
    .flash-grid-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr); 
        gap: 10px; 
    }

</style>