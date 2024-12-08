<?php 
    include_once './models/Category.php';
    include_once './utils/constant.php';
    // $id = isset($_GET['id']) ? $_GET['id'] : null;
    $page = isset($_GET['page_index']) ? $_GET['page_index'] : 1;
    $category_data = Category::get_all_category(true, $page, $PAGE_SIZE);

    if(isset($_POST['delete_category'])) {
        $id = $_POST['id'];

        $delete_category = Category::delete_category($id);

        if($delete_category['status']) {
            redirect('admin.php?page=category', $delete_category['message'], "success");
        } else {
            redirect('admin.php?page=category', $delete_category['message'], "error");
        }
    }
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
    <?php include_once '_update_modal.php' ?>
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
                    $category_json = format_data_json($category); // JSON an toàn
                    echo '
                        <tr>
                            <td>'.($index + 1).'</td>
                            <td>'.$category['name'].'</td>
                            <td>
                                <img class="shadow" width="60" height="60" src="'.$category['thumbnail'].'" alt="">
                            </td>
                            <td>'.$category['slug'].'</td>
                            <td class="text-center">'.$is_show.'</td>
                            <td class="text-center">
                                <button 
                                    onclick="setUpdateModal('.$category_json.')"
                                    class="btn btn-info" data-bs-toggle="modal" data-bs-target="#update_category_modal">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <span class="dropdown">
                                    <a class="btn btn-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <ul class="dropdown-menu mt-2" style="width: 200px;">
                                        <form class="p-2" method="post">
                                            <p class="text-center" for="">Bạn có chắc chắn muốn xóa chứ ?</p>
                                            <input type="hidden" name="id" value="'.$category['id'].'">
                                            <div class="text-end">
                                                <button name="delete_category" type="submit" class="text-xs py-1 px-2 btn btn-danger">Xác nhận</button>
                                            </div>
                                        </form>
                                    </ul>
                                </span>
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

<script>
const setUpdateModal = (category) => {
    let checked = category.is_show == 1 ? true : false;

    document.getElementById('update-category-id').value = category.id;
    document.getElementById('update-category-name').value = category.name;
    document.getElementById('update-category-thumbnail').value = category.thumbnail ? category.thumbnail : '';
    document.getElementById('update-category-show').checked = checked;
}
</script>