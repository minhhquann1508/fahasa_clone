<?php
    $data['product_detail'] = [
        0 => [
            'title' => 'OVERLORD',
            'price' => '238.000đ',
            'discount' => '100',
            'solds' => '45',
            'author' => 'Maruyama Kugane, Miyama Hugin, Oshio Satoshi',
            'views' => '200',
            'type' => 'Manga',
            'thumbnail' => 'https://placehold.co/400',
            'book_layout' => 'https://placehold.co/400',
        ]
    ];

    $data['image'] = [
        1 => ['url' => 'https://placehold.co/800x800'],
        2 => ['url' => 'https://placehold.co/600x600'],
        3 => ['url' => 'https://placehold.co/150x150'],
        4 => ['url' => 'https://placehold.co/200x200'],
        5 => ['url' => 'https://placehold.co/400x400'],
        6 => ['url' => 'https://placehold.co/150x150'],
    ];
    
    $data['comment'] = [
        0 => [
            'rating' => '4',
            'content' => 'abc',
            'created_at' => '',
            'user_id' => '',
        ],
        1 => [
            'rating' => '2',
            'content' => 'bcd',
            'created_at' => '',
            'user_id' => '',
        ],
        2 => [
            'rating' => '3',
            'content' => 'dce',
            'created_at' => '',
            'user_id' => '',
        ],
        3 => [
            'rating' => '5',
            'content' => 'omn',
            'created_at' => '',
            'user_id' => '',
        ],
    ];
    // Tính trung bình rating
    $total_rating = 0;
    $total_comments = count($data['comment']);
    foreach ($data['comment'] as $comment) {
        $total_rating += $comment['rating'];
    }
    $average_rating = $total_rating / $total_comments;

    $max_thumbnail_img = 4;
    $total_img = count($data['image']);

    foreach ($data['product_detail'] as $key => $value) {
        if ($value['discount'] != '0') {
            $originalPrice = intval(str_replace('.', '', explode('đ', $value['price'])[0]));
            $discount = intval($value['discount']);
            $data['product_detail'][$key]['final_price'] = number_format($originalPrice - ($originalPrice * $discount / 100), 0, '.', '.') . 'đ';
        } else {
            $data['product_detail'][$key]['final_price'] = $value['price'];
        }
    }
?>

<div class="container p-0 mt-3" style="width: 1230px;">
    <div class="breadcrumb d-flex align-items-center gap-2">
        <span href="#" style="font-size:13px;color:#212121;text-transform: uppercase;">Sách Tiếng Việt</span>
        <i class="fa-solid fa-angle-right" style="color:#ccc"></i>
        <span href="#" style="font-size:13px;color:#212121;text-transform: uppercase;">Manga - Comic</span>
        <i class="fa-solid fa-angle-right" style="color:#ccc"></i>
        <span href="#" style="font-size:13px;color:#212121;text-transform: uppercase;"><?php echo $data['product_detail'][0]['type']?></span>
    </div>
<?php foreach ($data['product_detail'] as $key => $value): ?>

    <div class="d-flex mt-3 gap-3">
        <div class="p-3 rounded" style="background:white">
            <img id="main-image" src="https://placehold.co/400" alt="Main Image" width="450px">
            <div class="thumbnail-container d-flex justify-content-between mt-3">
                <?php 
                $index = 0;
                foreach ($data['image'] as $key => $image): 
                    $index++;
                    if ($index <= $max_thumbnail_img): 
                ?>
                    <img class="thumbnail" src="<?php echo $image['url']; ?>" alt="Thumbnail <?php echo $key; ?>" width="84px">
                <?php 
                    elseif ($index == $max_thumbnail_img + 1): 
                ?>
                    <div class="thumbnail-more">
                        <div class="d-flex align-items-center justify-content-center" style="background:#818181;width:84px;height:84px">
                            <p class="fw-bold" style="color:white">+<?php echo $total_img - $max_thumbnail_img; ?></p>
                        </div>
                    </div>
                <?php 
                    endif; 
                endforeach; 
                ?>
            </div>
            <div class="d-flex row px-1 mt-2">
                <div class="col-6 p-2">
                    <button class="addcart-btn btn rounded d-flex align-items-center justify-content-center w-100 py-2 gap-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>Thêm vào giỏ hàng</p>
                    </button>
                </div>
                <div class="col-6 p-2">
                    <button class="buynow-btn btn rounded d-flex align-items-center justify-content-center w-100 py-2">
                        <p>Mua ngay</p>
                    </button>
                </div>
            </div>
            <div class="mt-2">
                <p class="fw-bold" style="font-size: 16px;">Chính sách ưu đãi của Fahasa</p>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_truck_v2.png" alt="" width="18">
                        <p class="fw-bold" style="font-size: 14px;">Thời gian giao hàng:</p>
                        <p style="font-size: 14px;">Giao hàng nhanh và uy tín</p>
                    </div>
                    <div><i class="fa-solid fa-angle-right"></i></div>
                </div>
                <div class="d-flex align-items-center gap-2 justify-content-between mt-2">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_transfer_v2.png" alt="" width="18">
                        <p class="fw-bold" style="font-size: 14px;">Chính sách đổi trả:</p>
                        <p style="font-size: 14px;">Đổi trả miễn phí toàn quốc</p>
                    </div>
                    <div><i class="fa-solid fa-angle-right"></i></div>
                </div>
                <div class="d-flex align-items-center gap-2 justify-content-between mt-2">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_shop_v2.png" alt="" width="18">
                        <p class="fw-bold" style="font-size: 14px;">Chính sách khách sỉ:</p>
                        <p style="font-size: 14px;">Ưu đãi khi mua số lượng lớn</p>
                    </div>
                    <div><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div>
            <div class="rounded px-3 p-4" style="width:730px;background:white">
                <div class="d-flex align-items-center gap-2">
                    <span style="color:#2489f4;padding:2px 8px;background:#E8F3FE;border-radius: 4px;font-size: 14px;font-weight: 700;margin-bottom:32px">Bộ</span>
                    <p style="font-size: 23px;height:69px;overflow:hidden">[<?php echo $data['product_detail'][0]['type']?>] <?php echo $data['product_detail'][0]['title']?> - Tập 13</p>
                </div>
                <div class="row mt-2">
                    <div class="col-7">
                        <p class="text-m">Nhà cung cấp: <a href="">IPM</a></p>
                        <p class="text-m">Nhà xuất bản: <span class="fw-bold">NXB Hồng Đức</span></p>
                    </div>
                    <div class="col-5">
                        <p title="<?php echo $data['product_detail'][0]['author']?>" class="text-m" style="overflow: hidden;height:25px">Tác giả: <a class="fw-bold" href=""><?php echo $data['product_detail'][0]['author']?></a></p>
                        <p class="text-m">Hình thức bìa: <span class="fw-bold">Bìa Mềm</span></p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <?php
                            $fullStars = floor($average_rating); // Số sao vàng
                            $halfStar = ($average_rating - $fullStars) >= 0.5 ? 1 : 0; // Sao nửa (nếu cần)
                            $emptyStars = 5 - $fullStars - $halfStar; // Số sao xám
    
                            for ($i = 0; $i < $fullStars; $i++) {
                                echo '<span style="color: #F39801;font-size:18px">★</span>'; // Sao vàng
                            }
                            if ($halfStar) {
                                echo '<span style="color: #F39801;font-size:18px">☆</span>'; // Sao nửa
                            }
                            for ($i = 0; $i < $emptyStars; $i++) {
                                echo '<span style="color: gray;font-size:18px">★</span>'; // Sao xám
                            }
                        ?>
                    </div>
                    <p style="color: #F39801;font-size:14px">(<?php echo $total_comments ?> đánh giá)</p>
                    <span class="mx-2" style="color:grey">|</span>
                    <p class="text-m" style="color:grey">Đã bán <span style="color:#212121"><?php echo $data['product_detail'][0]['solds']?></span></p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <p class="fw-bold" style="color:#C92127;font-size:32px"><?php echo $value['final_price']?></p>
                    <?php if ($data['product_detail'][0]['discount'] != '0') : ?>
                        <p class="product-price" style="color: #888888;font-size:15px;text-decoration: line-through;">
                            <?php echo $data['product_detail'][0]['price'] ?>
                        </p>
                        <p class="fw-bold rounded" style="color: white; font-size: 13px; background: var(--primary); padding: 2px 4px;">
                            -<?php echo $data['product_detail'][0]['discount'] ?>%
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="rounded px-3 mt-3 pt-2" style="width:730px;background:white">
                <p class="fw-bold" style="font-size: 18px;">Thông tin vận chuyển</p>
                <div class="d-flex gap-4">
                    <p class="text-m mt-2">Giao hàng đến <span class="fw-bold">Phường Bến Nghé, Quận 1 ,Hồ Chí Minh</span></p>
                    <p class="text-m fw-bold mt-2" style="color:#2489F4;">Thay đổi</p>
                </div>
                <div class="d-flex gap-3 mt-2">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico-delivery-green.png" class="mt-2" alt="" width="22px" height="22px">
                    <div class="">
                        <p class="fw-bold text-l">Giao hàng tiêu chuẩn</p>
                        <p class="text-m mt-1">Dự kiến giao Thứ hai - <span class="fw-bold">09/12</span></p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <p class="fw-bold mt-2" style="font-size: 18px;">Ưu đãi liên quan</p>
                    <a class="text-m fw-bold mt-2" href=""><p  style="color:#2489F4;">Xem thêm <i class="fa-solid fa-angle-right"></i></p></a>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const thumbnails = document.querySelectorAll(".thumbnail");
    const mainImage = document.getElementById("main-image");

    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener("click", function () {
            const newSrc = this.src; // Lấy nguồn ảnh từ thumbnail
            mainImage.src = newSrc; // Gán nguồn ảnh mới vào ảnh lớn
        });
    });
});

</script>

<style>
    p{
        padding: 0;
        margin: 0;
    }
    .addcart-btn {
        color: #C92127;
        background-color: #fff;
        border: 2px solid #C92127;
        font-size: 14px;
        font-weight: 700;
    }
    .buynow-btn {
        color: #fff;
        background-color: #C92127;
        border: 2px solid #C92127;
        font-size: 14px;
        font-weight: 700;
    }
    .addcart-btn:hover {
        color: #C92127;
        border: 2px solid #C92127;
        background-color: #fff;
    }
    .buynow-btn:hover {
        color: #fff;
        background-color: #C92127;
    }
</style>