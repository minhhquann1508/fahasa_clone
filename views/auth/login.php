<style>
/* LOGIN */
.card {
    width: 400px;
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

.btn {
    background-color: #d90429;
    border: none;
    height: 45px;
    font-size: 16px;
    border-radius: 8px;
}

.btn:disabled {
    background-color: #dcdcdc;
    cursor: not-allowed;
}

.btn-success {
    background-color: #28a745;
    border: none;
    height: 45px;
    font-size: 16px;
    border-radius: 8px;
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
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form id="login-form">
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Email hoặc số điện thoại:</label>
                            <input type="text" class="form-control" id="login-email"
                                placeholder="Nhập email hoặc số điện thoại">
                        </div>
                        <div class="mb-3">
                            <label for="login-password" class="form-label">Mật khẩu:</label>
                            <input type="password" class="form-control" id="login-password" placeholder="Nhập mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <form id="register-form">
                        <div class="mb-3">
                            <label for="register-name" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" id="register-name" placeholder="Nhập họ và tên">
                        </div>
                        <div class="mb-3">
                            <label for="register-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="register-email" placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label for="register-password" class="form-label">Mật khẩu:</label>
                            <input type="password" class="form-control" id="register-password"
                                placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-3">
                            <label for="register-confirm-password" class="form-label">Xác nhận mật khẩu:</label>
                            <input type="password" class="form-control" id="register-confirm-password"
                                placeholder="Xác nhận mật khẩu">
                        </div>
                        <button type="submit" class="btn w-100">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>