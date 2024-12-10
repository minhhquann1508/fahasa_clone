<?php include_once './models/Product.php';?>

<?php
    function banner() {
        return [
            0 => [
                'type' => 'carousel',
                'url' => 'https://placehold.co/800x400/png'
            ],
            1 => [
                'type' => 'carousel',
                'url' => 'https://placehold.co/600x400/png',
            ],
            2 => [
                'type' => 'carousel',
                'url' => 'https://placehold.co/200x400/png',
            ],
            3 => [
                'type' => 'carousel',
                'url' => 'https://placehold.co/800x400/png',
            ],
            4 => [
                'type' => 'banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
            5 => [
                'type' => 'banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
            6 => [
                'type' => 'sub_banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
            7 => [
                'type' => 'sub_banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
            8 => [
                'type' => 'sub_banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
            9 => [
                'type' => 'sub_banner',
                'url' => 'https://placehold.co/600x400/png',
            ],
        ];
    }

    function category() {
        return [
            1 => [
                'name' => 'Electronics',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'electronics',
            ],
            2 => [
                'name' => 'Books',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'books',
            ],
            3 => [
                'name' => 'Clothing',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'clothing',
            ],
            4 => [
                'name' => 'Furniture',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'furniture',
            ],
            5 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
            6 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
            7 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
            8 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
            9 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
            10 => [
                'name' => 'Toys',
                'thumbnail' => 'https://placehold.co/400',
                'slug' => 'toys',
            ],
        
        ];
    }

    function bestseller() {
        return [
            0 => [
                "id" => 5,
                "title" => "Truyện Conan tập 2",
                "price" => 20000.00,
                "thumbnail" => "https://placehold.co/400",
                "is_show" => 1,
                "is_hot" => 1,
                "discount" => 10,
                "solds" => 1,
                "views" => 102,
                "slug" => "truyen-conan-tap-2",
                "description" => "Đây là mô tả Conan tập 2",
                "quantity" => 11,
                "publish_year" => "2024-12-09",
                "translator" => "Chưa có",
                "page_num" => 150,
                "author" => "Chưa có",
                "created_at" => "2024-12-09 00:00:00",
                "updated_at" => "2024-12-09 00:00:00",
                "supplier_id" => 2,
                "category_id" => 6,
                "type_id" => 1
            ],
            1 => [
                'title' => 'Xứ Sở Miên Man - Bản Đặc Biệt - Tặng Kèm 1 Bookmark + 2',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '0',
                'quantity' => '200',
                'solds' => '10',
            ],
            2 => [
                'title' => 'Nexus - A Brief History Of Information Networks From The',
                'price' => '509.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '15',
                'quantity' => '200',
                'solds' => '50',
            ],
            3 => [
                'title' => 'Máy Tính Casio FX-880BTG - Màu Đen + Bút Frixion Colors và G2 (Bút Giao Ngẫu Nhiên)',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '5',
                'quantity' => '200',
                'solds' => '100',
            ],
            4 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '2',
                'quantity' => '400',
                'solds' => '399',
            ],
            5 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '0',
                'quantity' => '200',
                'solds' => '200',
            ],
            6 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '10',
                'quantity' => '200',
                'solds' => '120',
            ],
            7 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '0',
                'quantity' => '200',
                'solds' => '120',
            ],
            8 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '30',
                'quantity' => '200',
                'solds' => '200',
            ],
            9 => [
                'title' => 'Electronic',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '0',
                'quantity' => '200',
                'solds' => '22',
            ],
            10 => [
                'title' => 'Electronics',
                'price' => '238.000đ',
                'thumbnail' => 'https://placehold.co/400',
                'discount' => '10',
                'quantity' => '200',
                'solds' => '109',
            ],
        ];
    }

    function list_products() {
        return [
            1 => [
                'title' => 'Xứ Sở Miên Man',
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
    }

?>