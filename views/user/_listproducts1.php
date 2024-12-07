<?php
$data['bestseller'] = [
    0 => [
        'title' => 'Xứ Sở Miên Man - Bản Đặc Biệt - Tặng Kèm 1 Bookmark + 2',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '10',
    ],
    1 => [
        'title' => 'Nexus - A Brief History Of Information Networks From The',
        'price' => '509.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '15',
        'quantity' => '200',
        'sold' => '50',
    ],
    2 => [
        'title' => 'Máy Tính Casio FX-880BTG - Màu Đen + Bút Frixion Colors và G2 (Bút Giao Ngẫu Nhiên)',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '5',
        'quantity' => '200',
        'sold' => '100',
    ],
    3 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '2',
        'quantity' => '400',
        'sold' => '399',
    ],
    4 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '200',
    ],
    5 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '10',
        'quantity' => '200',
        'sold' => '120',
    ],
    6 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '120',
    ],
    7 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '30',
        'quantity' => '200',
        'sold' => '200',
    ],
    8 => [
        'title' => 'Electronic',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '0',
        'quantity' => '200',
        'sold' => '22',
    ],
    9 => [
        'title' => 'Electronics',
        'price' => '238.000đ',
        'thumbnail' => 'https://placehold.co/400',
        'discount' => '10',
        'quantity' => '200',
        'sold' => '109',
    ],
];

foreach ($data['bestseller'] as $key => $value) {
    if ($value['discount'] != '0') {
        $originalPrice = intval(str_replace('.', '', explode('đ', $value['price'])[0]));
        $discount = intval($value['discount']);
        $data['bestseller'][$key]['final_price'] = number_format($originalPrice - ($originalPrice * $discount / 100), 0, '.', '.') . 'đ';
    } else {
        $data['bestseller'][$key]['final_price'] = $value['price'];
    }
}
?>

<div class="grid-container pb-4 mt-2 ">
    <?php foreach ($data['bestseller'] as $key => $value) : ?>
        <a href="">
            <div class="card-model p-2" style="height: 380px;">
                <div class="px-2">
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
            </div>
        </a>
    <?php endforeach; ?>
</div>
<?php include '_button_showmore.php'?>

<script>
function applyCardHoverEffect(selector) {
    const cards = document.querySelectorAll(selector);
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = 'rgba(99, 99, 99, 0.2) 0px 2px 8px 0px'; 
        });

        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = 'none'; 
        });
    });
}
applyCardHoverEffect('.card-model');

</script>

<style>

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


