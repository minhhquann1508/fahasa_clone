<?php 
function render_pagination($page, $total_page, $url, $page_size = 10, $max_visible_pages = 3) {
    $nums_page = ceil($total_page / $page_size);
    $content = '<div id="pagination" class="text-center">
    <ul class="d-flex justify-content-center align-items-center gap-2">';
    
    // Tính trang bắt đầu và trang kết dựa trên trang đang chọn
    $start_page = max(1, $page - floor($max_visible_pages / 2));
    $end_page = min($nums_page, $start_page + $max_visible_pages - 1);

    // Điều chỉnh nếu gần đầu hoặc cuối
    if ($end_page - $start_page < $max_visible_pages - 1) {
        $start_page = max(1, $end_page - $max_visible_pages + 1);
    }

    // Nút "Trước"
    if ($page > 1) {
        $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index='.($page-1).'">«</a></li>';
    }

    // Hiển thị nút trang đầu 
    if ($start_page > 1) {
        $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index=1">1</a></li>';
        if ($start_page > 2) {
            $content .= '<li class="btn px-3 pagination-item disabled">...</li>';
        }
    }

    // Hiển thị các nút trong khoảng
    for ($i = $start_page; $i <= $end_page; $i++) {
        if ($page == $i) {
            $content .= '<li class="btn px-3 pagination-item pagination-active"><a class="text-white fw-medium d-block w-100" href="'.$url.'&page_index='.$i.'">'.$i.'</a></li>';
        } else {
            $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index='.$i.'">'.$i.'</a></li>';
        }
    }

    // Hiển thị nút trang cuối nếu cần
    if ($end_page < $nums_page) {
        if ($end_page < $nums_page - 1) {
            $content .= '<li class="btn px-3 pagination-item disabled">...</li>';
        }
        $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index='.$nums_page.'">'.$nums_page.'</a></li>';
    }

    // Nút "Sau"
    if ($page < $nums_page) {
        $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index='.($page+1).'">»</a></li>';
    }

    $content .= '</ul>
        </div>';
    echo $content;
}
?>