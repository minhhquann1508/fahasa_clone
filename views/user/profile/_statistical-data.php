<?php
$err = "";
if (isset($_POST['update-personal'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    
    $id = $_SESSION['user']; 
    
    $user = new User();
    $result = $user->updatePersonal($id, $name, $email, $phone, $gender, $day, $month, $year);
    
    if ($result['status']) {
        header("Location: index.php?page=profile");
    } else {
        $err = "Cập nhật thất bại: " . $result['message'];
    }
}
?>

<div class="wrapper-statiscal">
    <div class="up-statiscal">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="card card-statistic-1">
                    <div class="card-body">
                        <div class="ml-3">
                            <div class="card-header">
                                <h4 class="mb-0">F-Point hiện có</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="text-primary mb-0">2,300</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="card card-statistic-1">
                    <div class="card-body">
                        <div class="ml-3">
                            <div class="card-header">
                                <h4 class="mb-0">Đơn hàng</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="text-danger mb-0">0 đơn hàng</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="card card-statistic-1">
                    <div class="card-body">
                        <div class="ml-3">
                            <div class="card-header">
                                <h4 class="mb-0">Đã thanh toán</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="text-success mb-0">0 đ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="card card-statistic-1">
                    <div class="card-body">
                        <div class="ml-3">
                            <div class="card-header">
                                <h4 class="mb-0">Free ship hiện có</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="text-warning mb-0">0 lần</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="profile-statiscal">
        <h3>Hồ sơ cá nhân</h3>
        <form action="index.php?page=profile" method="post">
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="example-text-input" placeholder="Tên đăng nhập"
                        value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="example-email-input" placeholder="Email"
                        value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-phone-input" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="phone" class="form-control" id="example-phone-input" placeholder="Phone"
                        value="<?= htmlspecialchars($user['phone']) ?>" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-radio-input" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10 gender">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="1"
                            <?php echo (isset($user['gender']) && $user['gender'] == '1') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="male">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="0"
                            <?php echo (isset($user['gender']) && $user['gender'] == '0') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="female">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="day-input" placeholder="Ngày" min="1" max="31"
                        value="<?php echo isset($user['birthday']) ? explode('-', $user['birthday'])[2] : ''; ?>"
                        name="day">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="month-input" placeholder="Tháng" min="1" max="12"
                        value="<?php echo isset($user['birthday']) ? explode('-', $user['birthday'])[1] : ''; ?>"
                        name="month">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="year-input" placeholder="Năm" min="1900" max="2024"
                        value="<?php echo isset($user['birthday']) ? explode('-', $user['birthday'])[0] : ''; ?>"
                        name="year">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="update-personal" class="btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>

    </div>
</div>

<style>
.wrapper-statiscal {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.wrapper-statiscal .up-statiscal {
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 10px;
}

.wrapper-statiscal .profile-statiscal {
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 10px;
}

.profile-statiscal h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
}

.profile-statiscal .form-group {
    margin-bottom: 15px;
}

.profile-statiscal .form-control {
    border-radius: 5px;
    padding: 25px;
}


.profile-statiscal .form-check-label {
    margin-right: 15px;
}

.profile-statiscal .form-check-input {
    margin-right: 5px;
    padding: 10px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>