<?php 
    include_once './models/Supplier.php';

    $supplier_data = Supplier::get_all_suppliers();

    if(isset($_POST['delete_supplier'])) {
        $id = $_POST['id'];

        $delete_supplier = Supplier::delete_supplier($id);

        if($delete_supplier['status']) {
            redirect('admin.php?page=supplier', $delete_supplier['message'], "success");
        } else {
            redirect('admin.php?page=supplier', $delete_supplier['message'], "error");
        }
    }
?>

<div class="row align-items-center mb-4">
    <div class="col-6">
        <h5>Danh sách nhà cung cấp</h5>
    </div>
    <div class="col-6 text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_supplier_modal">
            Thêm nhà cung cấp
        </button>
    </div>
    <?php include_once '_add_modal.php' ?>
    <?php include_once '_update_modal.php' ?>
</div>

<section class="mb-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="py-3 text-center">#</th>
                <th scope="col" class="text-center py-3">Tên NCC</th>
                <th scope="col" class="text-center py-3">Bí danh</th>
                <th scope="col" class="text-center py-3">Hình ảnh</th>
                <th scope="col" class="text-center py-3">Mô tả</th>
                <th scope="col" class="text-center py-3">Ẩn hiện</th>
                <th scope="col" class="text-center py-3">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    foreach ($supplier_data['data'] as $index => $supplier) {
                        $is_show = $supplier['is_show'] == 1 ? 'Hiện' : 'Ẩn';
                        $supplier_json = format_data_json($supplier);
                        echo '
                            <tr>
                                <td scope="col" class="py-3 text-center">'.($index + 1).'</td>
                                <td scope="col" class="py-3 text-center">'.$supplier['name'].'</td>
                                <td scope="col" class="py-3 text-center">'.$supplier['slug'].'</td>
                                <td scope="col" class="py-3 text-center">
                                    <img class="shadow" width="60" height="60" src="'.$supplier['thumbnail'].'" alt="">
                                </td>
                                <td scope="col" class="text-center py-3">'.$supplier['description'].'</td>
                                <td scope="col" class="text-center py-3">'.$is_show.'</td>
                                <td scope="col" class="text-center py-3">
                                    <button 
                                        onclick="setUpdateModal('.$supplier_json.')"
                                        class="btn btn-info" data-bs-toggle="modal" data-bs-target="#update_supplier_modal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <span class="dropdown">
                                        <a class="btn btn-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                        <ul class="dropdown-menu mt-2" style="width: 200px;">
                                            <form class="p-2" method="post">
                                                <p class="text-center" for="">Bạn có chắc chắn muốn xóa chứ ?</p>
                                                <input type="hidden" name="id" value="'.$supplier['id'].'">
                                                <div class="text-end">
                                                    <button name="delete_supplier" type="submit" class="text-xs py-1 px-2 btn btn-danger">Xác nhận</button>
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
</section>
</div>

<script>
const setUpdateModal = (supplier) => {
    let checked = supplier.is_show == 1 ? true : false;

    document.getElementById('update-supplier-id').value = supplier.id;
    document.getElementById('update-supplier-name').value = supplier.name;
    document.getElementById('update-supplier-description').value = supplier.description;
    document.getElementById('update-supplier-thumbnail').value = supplier.thumbnail ? supplier.thumbnail : '';
    document.getElementById('update-supplier-show').checked = checked;
}
</script>