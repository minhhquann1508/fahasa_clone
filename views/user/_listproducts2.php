<?php
$data['list_products'] = [
    1 => [
        'title' => 'Xứ Sở Miên Man - Bản Đặc Biệt - Tặng Kèm 1 Bookmark + 2',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '10',
    ],
    2 => [
        'title' => 'Nexus - A Brief History Of Information Networks From The',
        'price' => '509.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '15',
        'quantity' => '200',
        'sold' => '50',
    ],
    3 => [
        'title' => 'Máy Tính Casio FX-880BTG - Màu Đen + Bút Frixion Colors và G2 (Bút Giao Ngẫu Nhiên)',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '5',
        'quantity' => '200',
        'sold' => '100',
    ],
    4 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '2',
        'quantity' => '400',
        'sold' => '399',
    ],
    5 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '200',
    ],
    6 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '10',
        'quantity' => '200',
        'sold' => '120',
    ],
    7 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '120',
    ],
    8 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '30',
        'quantity' => '200',
        'sold' => '100',
    ],
    9 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '2',
    ],
    10 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '10',
        'quantity' => '200',
        'sold' => '29',
    ],
];

foreach ($data['list_products'] as $key => $value) {
    if ($value['discount'] != '0') {
        $originalPrice = intval(str_replace('.', '', explode('đ', $value['price'])[0]));
        $discount = intval($value['discount']);
        $data['list_products'][$key]['final_price'] = number_format($originalPrice - ($originalPrice * $discount / 100), 0, '.', '.') . 'đ';
    } else {
        $data['list_products'][$key]['final_price'] = $value['price'];
    }
}
?>

<div class="container-fluid px-0 pb-2 position-relative">
    <div class="product-scroll-container scroll-container">
        <div class="row flex-nowrap gap-2 px-2">
            <?php foreach ($data['list_products'] as $key => $value) : ?>
                <div class="card-model px-3" style="pointer-events: none;user-select: none;height: 380px; width:235px">
                    <a href="">
                        <div class="">
                            <img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['title']; ?>" class="product-image">
                        </div>
                        <div  style="height: 110px;">
                            <p title="<?php echo $value['title'];?>" class="product-title mt-2 text-m" style="height: 40px;overflow:hidden;"><?php echo $value['title']; ?></p>
                            <div class="d-flex gap-3 align-items-center">
                                <p class="product-price fw-bold mt-3" style="color: var(--primary);font-size:16px">
                                    <?php echo $value['final_price']; ?>
                                </p>
                                <?php if ($value['discount'] != '0') : ?>
                                    <p class="mt-3 fw-bold rounded" style="color: white; font-size: 13px; background: var(--primary); padding: 2px 4px;">
                                        -<?php echo $value['discount']; ?>%
                                    </p>
                                <?php endif; ?>
                            </div>
                            <?php if ($value['discount'] != '0') : ?>
                                <p class="product-price" style="color: #888888;font-size:14px;text-decoration: line-through;">
                                    <?php echo $value['price']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex justify-content-center mt-3 ">
                            <div class="sold-progress">
                                <?php
                                $quantity = $value['quantity'];
                                $sold = $value['sold'];
                                $percent = ($sold / $quantity) * 100;
                                ?>
                                <div class="progress-bar" style="width: <?php echo $percent; ?>%;"></div>
                                <span>
                                    <?php 
                                    if ($percent >= 100) {
                                        echo "Hết hàng";
                                    } elseif ($percent >= 85) {
                                        echo "Sắp hết";
                                    } else {
                                        echo "Đã bán $sold";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="scroll-btn left"><i class="fa-solid fa-angle-left"></i></div>
    <div class="scroll-btn right"><i class="fa-solid fa-angle-right"></i></div>
</div>
<div class="d-flex justify-content-center pb-3">
        <button class="custom-btn btn py-2">
            Xem thêm
        </button>
</div>


