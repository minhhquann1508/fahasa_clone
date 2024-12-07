<?php 
    function render_pagination($page, $total_page, $url, $page_size = 10) {
        $nums_page = ceil($total_page / $page_size);
        $content = '<div id="pagination" class="text-center">
        <ul class="d-flex justify-content-center align-items-center gap-2">';
        for($i = 1; $i <= $nums_page; $i++) {
            if($page == $i) {
                $content .= '<li class="btn px-3 pagination-item pagination-active"><a class="text-white fw-medium d-block w-100" href="'.$url.'&page_index='.$i.'">'.$i.'</a></li>';
            } else {
                $content .= '<li class="btn px-3 pagination-item"><a class="fw-medium d-block w-100" href="'.$url.'&page_index='.$i.'">'.$i.'</a></li>';
            }
        }
        $content .= '</ul>
            </div>';
        echo $content;
    }
?>