<?php
include_once './configs/upload.php';
include_once './configs/helper.php';
include_once './models/User.php';

$login_err = "";
$register_err = "";

// Xử lý đăng ký
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-register'])) {
    $username = trim($_POST['register-name']);
    $email = filter_var(trim($_POST['register-email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['register-password'];
    $confirm_password = $_POST['register-confirm-password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $register_err = "Vui lòng nhập đầy đủ thông tin.";
    } elseif (!$email) {
        $register_err = "Email không hợp lệ.";
    } elseif ($password !== $confirm_password) {
        $register_err = "Mật khẩu và xác nhận mật khẩu không khớp.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $is_exist = User::checkmail($email);

        if ($is_exist['status']) {
            $register_err = $is_exist['message'];
        } else {
            $is_add_success = User::register($username, $email, $hashed_password);
            if (!$is_add_success['status']) {
                $register_err = $is_add_success['message'];
            } else {
                header("Location: index.php?page=login");
                exit;
            }
        }
    }
}

// Xử lý đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-login'])) {
    $email = filter_var(trim($_POST['login-email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['login-password'];

    if (empty($email) || empty($password)) {
        $login_err = "Vui lòng nhập email và mật khẩu.";
    } elseif (!$email) {
        $login_err = "Email không hợp lệ.";
    } else {
        $user = User::login($email);
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit;
        } else {
            $login_err = "Email hoặc mật khẩu không đúng.";
        }
    }
}
?>


<style>
/* LOGIN */
.card {
    width: 600px;
    margin: 50px auto;
    border: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    padding: 0;
    border-bottom: none;
}

.nav-tabs {
    display: flex;
    justify-content: center;
    border-bottom: none;
}

.nav-tabs .nav-link {
    border: none;
    font-size: 18px;
    color: #666;
    width: 300px;
}

.nav-tabs .nav-link.active {
    color: #d90429;
    border-bottom: 2px solid #d90429;
}

.form-label {
    font-size: 14px;
    color: #555;
}

.form-control {
    height: 50px;
    border-radius: 8px;
    font-size: 14px;
}

.submit {
    max-width: 250px;
    width: 100%;
    background-color: #d90429;
    border: none;
    height: 45px;
    font-size: 16px;
    border-radius: 8px;
    color: #fff;
    margin-left: 150px;
    margin-top: 20px;
}

.submit:hover {
    background-color: #B70909;
    color: #fff;
}

.card-body {
    padding: 30px;
}

.form-text {
    font-size: 12px;
    color: #999;
    text-align: right;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.password-container {
    position: relative;
}

.password-icon {
    position: absolute;
    right: 30px;
    top: 70%;
    transform: translateY(-50%);
    cursor: pointer;
}

.password-icon i {
    font-size: 20px;
    color: #555;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                        type="button" role="tab" aria-controls="login" aria-selected="true">Đăng nhập</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register"
                        type="button" role="tab" aria-controls="register" aria-selected="false">Đăng ký</button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form id="login-form" method="POST" action="">
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="login-email" id="login-email"
                                placeholder="Nhập email" value="<?= htmlspecialchars($_POST['login-email'] ?? '') ?>">
                        </div>
                        <div class="mb-3 password-container">
                            <label for="login-password" class="form-label">Mật khẩu:</label>
                            <input type="password" class="form-control" name="login-password" id="login-password"
                                placeholder="Nhập mật khẩu">
                            <span class="password-icon" id="toggle-login-password">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                        <div id="login-error" class="text-danger"><?= $login_err; ?></div>
                        <button type="submit" name="submit-login" class="btn submit w-100">Đăng nhập</button>
                    </form>
                </div>

                <!-- Register Form -->
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <form id="register-form" method="POST" action="">
                        <div class="mb-3">
                            <label for="register-name" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" name="register-name" id="register-name"
                                placeholder="Nhập họ và tên"
                                value="<?= htmlspecialchars($_POST['register-name'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="register-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="register-email" id="register-email"
                                placeholder="Nhập email"
                                value="<?= htmlspecialchars($_POST['register-email'] ?? '') ?>">
                        </div>
                        <div class="mb-3 password-container">
                            <label for="register-password" class="form-label">Mật khẩu:</label>
                            <input type="password" class="form-control" name="register-password" id="register-password"
                                placeholder="Nhập mật khẩu">
                            <span class="password-icon" id="toggle-register-password">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>

                        <div class="mb-3 password-container">
                            <label for="register-confirm-password" class="form-label">Xác nhận mật khẩu:</label>
                            <input type="password" class="form-control" name="register-confirm-password"
                                id="register-confirm-password" placeholder="Xác nhận mật khẩu">
                            <span class="password-icon" id="toggle-confirm-password">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                        <div id="register-error" class="text-danger"><?= $register_err; ?></div>
                        <button type="submit" name="submit-register" class="btn submit w-100">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
document.getElementById('toggle-login-password').addEventListener('click', function() {
    let passwordField = document.getElementById('login-password');
    let icon = this.querySelector('i');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});

document.getElementById('toggle-register-password').addEventListener('click', function() {
    let passwordField = document.getElementById('register-password');
    let icon = this.querySelector('i');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});

document.getElementById('toggle-confirm-password').addEventListener('click', function() {
    let confirmPasswordField = document.getElementById('register-confirm-password');
    let icon = this.querySelector('i');
    if (confirmPasswordField.type === 'password') {
        confirmPasswordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        confirmPasswordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});
</script>