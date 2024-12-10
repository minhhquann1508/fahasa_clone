<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_SESSION['user']['id']; 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $ward = $_POST['ward'];
    $address = $_POST['address'];
    $user = new User();
    $result = $user->updateAdress($id, $name, $phone, $city, $district, $ward, $address);
    
    if ($result['status']) {
        header("Location: index.php?page=profile");
    } else {
        $err = "Cập nhật thất bại: " . $result['message'];
    }
    
}
?>

<div class="wrapper-address">
    <div class="alert alert-danger" role="alert">
        Bạn vui lòng cập nhật thông tin tài khoản: <a href="#" class="alert-link">Cập nhật thông tin ngay</a>
    </div>
    <div class="form-address">
        <h2 class="mb-4">Thêm địa chỉ mới</h2>
        <form method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên đăng nhập"
                        value="<?php echo $user['name']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                        value="<?php echo $user['phone']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">Tỉnh/Thành phố</label>
                <div class="col-sm-10">
                    <select class="form-control" id="city" name="city">
                        <option selected><?php echo $user['city']; ?></option>
                        <option>Hà Nội</option>
                        <option>TP. Hồ Chí Minh</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="district" class="col-sm-2 col-form-label">Quận/Huyện</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="district" name="district"
                        value="<?php echo $user['district']; ?>" placeholder="Quận/Huyện">
                </div>
            </div>
            <div class="form-group row">
                <label for="ward" class="col-sm-2 col-form-label">Xã/Phường</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ward" value="<?php echo $user['ward']; ?>" name="ward"
                        placeholder="Xã/Phường">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address"
                        value="<?php echo $user['address']; ?>" placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn-primary">Lưu địa chỉ</button>
                </div>
            </div>
        </form>


        <div class="text-start mt-3">
            <a href="#" class="text-decoration-none">« Quay lại</a>
        </div>
    </div>
</div>


<style>
.wrapper-address {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-address {
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
}

.form-address h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
}

.form-address .form-group {
    margin-bottom: 15px;
}

.profile-statiscal .form-control {
    border-radius: 5px;
    padding: 25px;
}

.form-address .form-check-label {
    margin-right: 15px;
}

.form-address .form-check-input {
    margin-right: 5px;
    padding: 10px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>