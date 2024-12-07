<div class="container">
    <div class="login-register">
        <input type="radio" id="login" name="tab" checked>
        <input type="radio" id="register" name="tab">

        <div class="tabs">
            <label class="tab active" for="login">Đăng nhập</label>
            <label class="tab" for="register">Đăng ký</label>
        </div>

        <div class="tab-content login-content active">
            <form id="login-form" method="POST">
                <div class="input-group">
                    <label for="login-email">Email:</label>
                    <input type="text" name="email" id="login-email" placeholder="Nhập số điện thoại hoặc email">
                </div>
                <div class="input-group">
                    <label for="login-password">Mật khẩu:</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" placeholder="Nhập mật khẩu">
                        <span id="togglePassword" class="toggle-password">Hiện</span>
                    </div>
                    <a href="#" class="forgot-password">Quên mật khẩu?</a>
                </div>
                <div class="button-group">
                    <button type="submit" name="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div class="tab-content register-content">
            <form id="register-form" method="POST">
                <div class="input-group">
                    <label for="register-name">Họ và tên:</label>
                    <input type="text" name="name" id="register-name" placeholder="Nhập họ và tên">
                </div>
                <div class="input-group">
                    <label for="register-email">Email:</label>
                    <input type="email" name="email" id="register-email" placeholder="Nhập email">
                </div>
                <div class="input-group">
                    <label for="register-password">Mật khẩu:</label>
                    <div class="input-wrapper">
                        <input type="password" id="register-password" placeholder="Nhập mật khẩu">
                        <span id="togglePasswordRegister" class="toggle-password">Hiện</span>
                    </div>
                </div>
                <div class="input-group">
                    <label for="register-confirm-password">Xác nhận mật khẩu:</label>
                    <div class="input-wrapper">
                        <input type="password" id="register-confirm-password" placeholder="Xác nhận mật khẩu">
                        <span id="togglePasswordConfirm" class="toggle-password">Hiện</span>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit" name="register_submit">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabDangNhap = document.querySelector('label[for="login"]');
    const tabDangKy = document.querySelector('label[for="register"]');
    const noiDungDangNhap = document.querySelector('.login-content');
    const noiDungDangKy = document.querySelector('.register-content');

    tabDangNhap.addEventListener('click', function() {
        if (!tabDangNhap.classList.contains('active')) {
            tabDangNhap.classList.add('active');
            tabDangKy.classList.remove('active');
            noiDungDangNhap.classList.add('active');
            noiDungDangKy.classList.remove('active');
        }
    });

    tabDangKy.addEventListener('click', function() {
        if (!tabDangKy.classList.contains('active')) {
            tabDangKy.classList.add('active');
            tabDangNhap.classList.remove('active');
            noiDungDangKy.classList.add('active');
            noiDungDangNhap.classList.remove('active');
        }
    });
});
</script>