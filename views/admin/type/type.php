<?php 
    include_once './models/Type.php';

    $type_data = Type::get_all_types();

    if(isset($_POST['add_type'])) {
        $name = $_POST['name'];

        $add_type = Type::add_new_type($name);

        if($add_type['status']) {
            redirect('admin.php?page=type', $add_type['message'], "success");
        } else {
            redirect('admin.php?page=type', $add_type['message'], "error");
        }
    }

    if(isset($_POST['delete_type'])) {
        $id = $_POST['id'];

        $delete_type = Type::delete_type($id);

        if($delete_type['status']) {
            redirect('admin.php?page=type', $delete_type['message'], "success");
        } else {
            redirect('admin.php?page=type', $delete_type['message'], "error");
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['add_type']) && !isset($_POST['delete_type'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $update_type = Type::update_type($id, $name);

        if($update_type['status']) {
            redirect('admin.php?page=type', $update_type['message'], "success");
        } else {
            redirect('admin.php?page=type', $update_type['message'], "error");
        }
    }
?>

<div class="row mb-4">
    <div class="col-6">
        <h5 class="mb-4">Danh sách loại mặt hàng</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="py-3 text-center">#</th>
                    <th scope="col" class="w-75 text-center py-3">Tên loại</th>
                    <th scope="col" class="text-center py-3">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($type_data['data'] as $index => $type) {
                        echo '
                            <tr>
                                <td scope="col" class="py-3 text-center">'.($index + 1).'</td>
                                <td scope="col" class="w-75 text-center py-3">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="'.$type['id'].'">
                                        <input id="type_input" name="name" class="text-center" type="text" value="'.$type['name'].'">
                                    </form>
                                </td>
                                <td scope="col" class="text-center py-3">
                                    <span class="dropdown">
                                        <a class="btn btn-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                        <ul class="dropdown-menu mt-2" style="width: 200px;">
                                            <form class="p-2" method="post">
                                                <p class="text-center" for="">Bạn có chắc chắn muốn xóa chứ ?</p>
                                                <input type="hidden" name="id" value="'.$type['id'].'">
                                                <div class="text-end">
                                                    <button name="delete_type" type="submit" class="text-xs py-1 px-2 btn btn-danger">Xác nhận</button>
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
    </div>
    <div class="col-6">
        <h5 class="mb-4">Thêm loại mặt hàng</h5>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Tên loại mặt hàng</label>
            </div>
            <div class="text-end">
                <button type="submit" name="add_type" class="btn btn-primary">Thêm ngay</button>
            </div>
        </form>
    </div>
</div>