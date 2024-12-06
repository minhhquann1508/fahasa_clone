<?php 
    $list = [
        ['icon' =>  'fa-solid fa-chart-line', 'label' => 'Dashboard', 'href' => ''],
        ['icon' =>  'fa-regular fa-images', 'label' => 'Banner', 'href' => ''],
        ['icon' =>  'fa-solid fa-boxes-packing', 'label' => 'Nhà cung cấp', 'href' => ''],
        ['icon' =>  'fa-solid fa-book', 'label' => 'Sản phẩm', 'href' => ''],
        ['icon' =>  'fa-solid fa-list', 'label' => 'Danh mục', 'href' => ''],
        ['icon' =>  'fa-regular fa-copyright', 'label' => 'Loại sản phẩm', 'href' => ''],
        ['icon' =>  'fa-regular fa-comment', 'label' => 'Bình luận', 'href' => ''],
        ['icon' =>  'fa-regular fa-user', 'label' => 'Người dùng', 'href' => ''],
        ['icon' =>  'fa-solid fa-box-open', 'label' => 'Đơn hàng', 'href' => ''],
    ];
?>
<article class="py-3">
    <div class="mx-auto" style="width: 200px;">
        <img class="w-100" src="./img/logo.webp" alt="">
    </div>
    <ul class="mt-3">
        <?php 
            foreach ($list as $item) {
                echo '<li style="border-bottom: 1px solid #ccc;" class="p-3">
                        <a href="" class="d-block">
                            <i class="'.$item['icon'].' me-1"></i>
                            '.$item['label'].'
                        </a>
                </li>';
            }
        ?>
    </ul>
</article>