<?php 
    include_once './models/Category.php';
    include_once './utils/constant.php';
    // $id = isset($_GET['id']) ? $_GET['id'] : null;
    $page = isset($_GET['page_index']) ? $_GET['page_index'] : 1;
    $category_data = Category::get_all_category(true, $page, $PAGE_SIZE);
?>

<div class="row align-items-center mb-4">
    <div class="col-6">
        <h5>Danh sách danh mục</h5>
    </div>
    <div class="col-6 text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_category_modal">
            Thêm danh mục
        </button>
    </div>
    <?php include_once '_add_modal.php' ?>
</div>

<section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Bí danh</th>
                <th scope="col" class="text-center">Ẩn hiện</th>
                <th scope="col" class="text-center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($category_data['data']['categories'] as $index => $category) {
                    $is_show = $category['is_show'] == 1 ? 'Hiện' : 'Ẩn';
                    echo '
                        <tr>
                            <td>'.($index + 1).'</td>
                            <td>'.$category['name'].'</td>
                            <td>
                                <img class="shadow rounded-circle" width="60" height="60" src="'.$category['thumbnail'].'" alt="">
                            </td>
                            <td>'.$category['slug'].'</td>
                            <td class="text-center">'.$is_show.'</td>
                            <td class="text-center">
                                <button class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>

    <?php 
        include_once './views/core/_pagination.php';
        render_pagination($page, $category_data['data']['total'], 'admin.php?page=category', $PAGE_SIZE);
    ?>
</section>