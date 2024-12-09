<?php 
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    $list = [
        [ 'key' => '', 'icon' =>  'fa-solid fa-chart-line', 'label' => 'Dashboard', 'href' => 'admin.php'],
        [ 'key' => 'banner', 'icon' =>  'fa-regular fa-images', 'label' => 'Banner', 'href' => 'admin.php?page=banner'],
        [ 'key' => 'supplier', 'icon' =>  'fa-solid fa-boxes-packing', 'label' => 'Nhà cung cấp', 'href' => 'admin.php?page=supplier'],
        [ 'key' => 'product', 'icon' =>  'fa-solid fa-box', 'label' => 'Sản phẩm', 'href' => 'admin.php?page=product'],
        [ 'key' => 'category', 'icon' =>  'fa-solid fa-list', 'label' => 'Danh mục', 'href' => 'admin.php?page=category'],
        [ 'key' => 'type', 'icon' =>  'fa-regular fa-copyright', 'label' => 'Loại sản phẩm', 'href' => 'admin.php?page=type'],
        [ 'key' => 'comment', 'icon' =>  'fa-regular fa-comment', 'label' => 'Bình luận', 'href' => 'admin.php?page=comment'],
        [ 'key' => 'user', 'icon' =>  'fa-regular fa-user', 'label' => 'Người dùng', 'href' => 'admin.php?page=user'],
        [ 'key' => 'order', 'icon' =>  'fa-solid fa-box-open', 'label' => 'Đơn hàng', 'href' => 'admin.php?page=order'],
    ];
?>
<article class="py-3">
    <a href="index.php" class="mx-auto d-block" style="width: 200px;">
        <img class="w-100" src="./img/logo.webp" alt="">
    </a>
    <ul class="mt-3">
        <?php 
            foreach ($list as $item) {
                if($item['key'] == $page) {
                    echo '<li style="border-bottom: 1px solid #ccc;" class="p-3 side-bar-active">
                            <a href="'.$item['href'].'" class="d-block">
                                <i class="'.$item['icon'].' me-1"></i>
                                '.$item['label'].'
                            </a>
                        </li>';
                } else {
                    echo '<li style="border-bottom: 1px solid #ccc;" class="p-3">
                            <a href="'.$item['href'].'" class="d-block">
                                <i class="'.$item['icon'].' me-1"></i>
                                '.$item['label'].'
                            </a>
                    </li>';
                }
            }
        ?>
    </ul>
</article>