<?php
    $data['books'] = [
        1 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/t/r/truyen-co-giang-sinh.jpg',
        ],
        2 => [
            'title' => 'Kinh dị - Bí ẩn',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/d/_/d_-m_t-qu_-2.jpg',
        ],
        3 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935236433587.jpg',
        ],
        4 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934974177623.jpg',
        ],
        5 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-1_6_6.jpg',
        ],
        6 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936225390010.jpg',
        ],
        7 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934974178637.jpg',
        ],
        8 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/0/0/00_2.jpg',
        ],
        9 => [
            'title' => 'Kinh dị - Bí ẩn',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/d/_/d_-m_t-qu_-2.jpg',
        ],
        10 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935236433587.jpg',
        ],
        11 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934974177623.jpg',
        ],
        12 => [
            'title' => 'Tủ sách giáng sinh',
            'thumbnail' => 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-1_6_6.jpg',
        ],
    ]

?>

<div class="container px-0 pb-3 mt-4 rounded position-relative" style="width: 1230px; background-color:white;">
    <div class="d-flex align-items-center py-3 px-3 gap-2 rounded-top" style="background-color: var(--fourth);">
        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/category/ico_sachtrongnuoc.svg" alt="" width="32px">
        <p class="fs-5 fw-bold">TỦ SÁCH NỔI BẬT</p>
    </div> 
    <div class="list_product-scroll-container scroll-container px-2">
        <div class="row flex-nowrap gap-2 px-2">
            <?php foreach ($data['books'] as $key => $value) : ?>
                <div class="px-3 product-card" style="width:150px;pointer-events: none;user-select: none;">
                    <a href="">
                        <div class="d-flex flex-column">
                            <img src="<?php echo $value['thumbnail']; ?>" width="120px">
                            <p class="text-center" style="font-size: 14px;"><?php echo $value['title']; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="scroll-btn left" style="top:150px;left:-30px"><i class="fa-solid fa-angle-left"></i></div>
    <div class="scroll-btn right" style="top:150px;right:-30px"><i class="fa-solid fa-angle-right"></i></div>
</div>


