<div class="wrapper-password">
    <h3>Đổi mật khẩu</h3>
    <form class="form-password" method="post">
        <div class="form-group row">
            <label for="example-password-input" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
            <div class="col-sm-10">
                <input type="password" name="old-password" class="form-control" id="example-password-input"
                    placeholder="Mật khẩu cũ">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-password-input" class="col-sm-2 col-form-label">Mật khẩu mới</label>
            <div class="col-sm-10">
                <input type="password" name="new-password" class="form-control" id="example-password-input"
                    placeholder="Mật khẩu mới">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-password-input" class="col-sm-2 col-form-label">Xác nhận mật khẩu mới</label>
            <div class="col-sm-10">
                <input type="password" name="confirm-new-password" class="form-control" id="example-password-input"
                    placeholder="Xác nhận mật khẩu mới">
            </div>
        </div>
        <div id="password-error" class="text-danger">
            <?php if (!empty($err)): ?>
            <div class="error-message" style="color:red">
                <?php echo $err; ?>
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
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 10px 40px;
    background-color: #fff;
    border-radius: 10px;
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
    padding: 25px;
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