<?php 
    function format_price($num) {
        return number_format($num, 0,  ',', '.');
    } 

    function slugify($str) {
        $str = trim($str);
        $str = mb_strtolower($str);
        $str = preg_replace('/[^a-z0-9-]+/', '-', $str);
        return $str;
    }

    function return_data($status, $data, $message) {
        return [
            'status' => $status,
            'data' => $data,
            'message' => $message
        ];
    }
?>