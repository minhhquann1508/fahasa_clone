<?php
include_once '_button.php';

$data['bestseller'] = bestseller();


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
                <?php include '_bar.php'?>

            </div>
        </a>
    <?php endforeach; ?>
</div>
<?php custom_btn('Xem Thêm', 'abc')?>

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


