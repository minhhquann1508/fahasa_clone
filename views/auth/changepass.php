<?php
include_once './configs/upload.php';
include_once './configs/helper.php';
include_once './models/User.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php?page=login");
    exit;
}
$model = new User();
$id = $_GET['id']?? $_SESSION['user']['id'];
$user = User::get_UserById($id); 

?>
<?php
$err = "";
    if (isset($_POST['update-password'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $err = '';
        if (password_verify($old_password, $user['password'])) {
        if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        if ($model->updatePassword($id, $hashed_password)) {
            header("Location: index.php?page=profile");
            exit;
        } else {
            $err = "Lỗi khi cập nhật mật khẩu.";
                }
        } else {
            $err = "Mật khẩu mới và xác nhận mật khẩu không trùng khớp.";
            }
        } else {
            $err= "Mật khẩu hiện tại không đúng.";
            }
    }
?>
<div class="wrapper-password">
    <h3>Đổi mật khẩu</h3>
    <form class="form-password" method="post">
        <div class="form-group row">
            <label for="example-old_password-input" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
            <div class="col-sm-10">
                <input type="password" name="old_password" class="form-control" id="example-old_password-input"
                    placeholder="Mật khẩu cũ">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-new_password-input" class="col-sm-2 col-form-label">Mật khẩu mới</label>
            <div class="col-sm-10">
                <input type="password" name="new_password" class="form-control" id="example-new_password-input"
                    placeholder="Mật khẩu mới">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-confirm_new_password-input" class="col-sm-2 col-form-label">Xác nhận mật khẩu
                mới</label>
            <div class="col-sm-10">
                <input type="password" name="confirm_password" class="form-control"
                    id="example-confirm_new_password-input" placeholder="Xác nhận mật khẩu mới">
            </div>
        </div>

        <div id="password-error" class="text-danger">
            <?php if (!empty($err)): ?>
            <div class="error-message" style="color:red">
                <?= $err; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="update-password" class="btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>




<style>
.wrapper-password {
    max-width: 1200px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 10px 40px;
    background-color: #fff;
    border-radius: 10px;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 20px;
}

.wrapper-password .form-password {
    padding: 20px;

}

.wrapper-password h3 {
    font-size: 1.5rem;
    margin: 20px;
    color: gray;
}

.form-password .form-group {
    margin-bottom: 15px;
}

.form-password .form-control {
    border-radius: 5px;
    padding: 15px;
}


.form-password .form-check-label {
    margin-right: 15px;
}

.form-password .form-check-input {
    margin-right: 5px;
    padding: 10px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>