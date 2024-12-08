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
        <div class="row flex-nowrap gap-2 px-2">
            <?php foreach ($data['books'] as $key => $value) : ?>
                <div class="px-3 product-card" style="width:147px;pointer-events: none;user-select: none;">
                    <a href="">
                        <div class="d-flex flex-column">
                            <img src="<?php echo $value['thumbnail']; ?>" width="115px">
                            <p class="text-center" style="font-size: 14px;"><?php echo $value['title']; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>



