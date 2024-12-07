<?php 
    $id = isset($_GET['id']) ? $_GET['id'] : null;
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