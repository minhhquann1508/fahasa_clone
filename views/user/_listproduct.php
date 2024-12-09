<?php

function list_products_scrollable($data_added) {
    include_once '_button.php';
    foreach ($data_added as $key => $value) {
        ob_start(); // Bắt đầu buffer
        if ($value['discount'] != '0') {
            $originalPrice = intval(str_replace('.', '', explode('đ', $value['price'])[0]));
            $discount = intval($value['discount']);
            $data_added[$key]['final_price'] = number_format($originalPrice - ($originalPrice * $discount / 100), 0, '.', '.') . 'đ';
        } else {
            $data_added[$key]['final_price'] = $value['price'];
        }
    }
    ?>

    <div class="container-fluid px-0 pb-2 position-relative">
        <div class="product-scroll-container scroll-container">
            <div class="row flex-nowrap gap-2 px-2">
                <?php foreach ($data_added as $value) : ?>
                    <div class="card-model px-3" style="pointer-events: none; user-select: none; height: 380px; width: 235px;">
                        <a href="">
                            <div>
                                <img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['title']; ?>" class="product-image">
                            </div>
                            <div style="height: 110px;">
                                <p title="<?php echo $value['title']; ?>" class="product-title mt-2 text-m" style="height: 40px; overflow: hidden;">
                                    <?php echo $value['title']; ?>
                                </p>
                                <div class="d-flex gap-3 align-items-center">
                                    <p class="product-price fw-bold mt-3" style="color: var(--primary); font-size: 16px;">
                                        <?php echo $value['final_price']; ?>
                                    </p>
                                    <?php if ($value['discount'] != '0') : ?>
                                        <p class="mt-3 fw-bold rounded" style="color: white; font-size: 13px; background: var(--primary); padding: 2px 4px;">
                                            -<?php echo $value['discount']; ?>%
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <?php if ($value['discount'] != '0') : ?>
                                    <p class="product-price" style="color: #888888; font-size: 14px; text-decoration: line-through;">
                                        <?php echo $value['price']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <!-- sold progress  -->
                        <?php include '_bar.php'?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="scroll-btn left"><i class="fa-solid fa-angle-left"></i></div>
        <div class="scroll-btn right"><i class="fa-solid fa-angle-right"></i></div>
    </div>
    <!-- showmore btn -->
    <?php custom_btn('Xem Thêm', 'abc')?>

    <style>
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
    .grid-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr); 
        gap: 10px; 
    }

    .product-image {
        width: 100%; 
        height: auto;
    }

    .product-title {
        color: #333333;
    }

    .product-price {
        font-size: 0.9rem;
        color: #ff5722;
    }
</style>
<?php 
    return ob_get_clean();
} ?>
