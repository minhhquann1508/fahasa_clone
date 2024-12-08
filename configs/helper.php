<?php 
    function format_price($num) {
        return number_format($num, 0,  ',', '.');
    } 

    function slugify($str) {
        $str = trim($str); // Loại bỏ khoảng trắng đầu/cuối
        $str = mb_strtolower($str); // Chuyển sang chữ thường
    
        // Loại bỏ dấu tiếng Việt
        $str = preg_replace(
            [
                '/[áàảãạăắằẳẵặâấầẩẫậ]/u', 
                '/[éèẻẽẹêếềểễệ]/u', 
                '/[íìỉĩị]/u', 
                '/[óòỏõọôốồổỗộơớờởỡợ]/u', 
                '/[úùủũụưứừửữự]/u', 
                '/[ýỳỷỹỵ]/u', 
                '/[đ]/u'
            ],
            ['a', 'e', 'i', 'o', 'u', 'y', 'd'], 
            $str
        );
        $str = preg_replace('/[^a-z0-9-]+/', '-', $str);
        $str = preg_replace('/-+/', '-', $str);
        return trim($str, '-');
    }
    
    function return_data($status, $data, $message) {
        return [
            'status' => $status,
            'data' => $data,
            'message' => $message
        ];
    }

    function format_data_json($data) {
        return htmlspecialchars(json_encode($data), ENT_QUOTES, 'UTF-8');
    }
?>