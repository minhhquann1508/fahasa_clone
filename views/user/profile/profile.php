<?php
include_once './configs/upload.php';
include_once './configs/helper.php';
include_once './models/User.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php?page=login");
    exit;
}

$id = $_GET['id']?? $_SESSION['user']['id'];
$user = User::get_UserById($id); 

?>
<div class="container-fluid">
    <div class="profile-main">
        <aside class="col-12 col-md-3 sidebar">
            <div class="infor-user">
                <img src="https://lh3.googleusercontent.com/a/ACg8ocIRfZiwTO2wKYSHrmkvUsya-MkPJ7frR1Kz0fvANF2BNls=s96-c"
                    alt="<?php echo $user['name'];?>" class="img-fluid rounded-circle">
                <h5 class="mt-3"><?php echo $user['name'];?></h5>
                <div class="level-user">
                    <p class="text-muted mb-0">Thành viên bạc</p>
                </div>
            </div>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle active" href="#" id="personalInfoDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user"></i> Thông tin tài khoản
                    </a>
                    <ul class="nav nav-pills flex-column submenu ps-3">
                        <li><a href="#personal-info" class="nav-link active" data-bs-toggle="pill"><i
                                    class="fa-solid fa-user-circle"></i> Hồ sơ cá nhân</a>
                        </li>
                        <li class="nav-item">
                            <a href="#address-book" class="nav-link" data-bs-toggle="pill">
                                <i class="fa-solid fa-address-book"></i> Sổ địa chỉ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=changePassword" class="nav-link"><i class="fa-solid fa-key"></i>
                                Đổi mật khẩu</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#order-history" class="nav-link" data-bs-toggle="pill"><i class="fa-solid fa-box"></i> Đơn
                        hàng</a>
                </li>
                <li class="nav-item">
                    <a href="#nofication" class="nav-link" data-bs-toggle="pill"><i class="fa-solid fa-bell"></i> Thông
                        báo</a>
                </li>
                <li class="nav-item">
                    <a href="#My-feedback" class="nav-link" data-bs-toggle="pill"><i class="fa-solid fa-comment"></i>
                        Nhận xét của tôi</a>
                </li>
                <li class="nav-item">
                    <a href="#account-settings" class="nav-link" data-bs-toggle="pill"><i class="fa-solid fa-cogs"></i>
                        Cài đặt tài khoản</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-danger"><i class="fa-solid fa-sign-out-alt"></i> Đăng xuất</a>
                </li>
            </ul>
        </aside>
        <div class="main-content">
            <div class="tab-content">
                <section class="tab-pane fade show active" id="personal-info">
                    <?php include '_statistical-data.php'?>
                </section>
                <section class="tab-pane fade" id="address-book">
                    <?php include '_address-profile.php'?>
                </section>
                <section class="tab-pane fade" id="order-history">
                    <?php include 'orders/orders-profile.php'?>
                </section>
                <section class="tab-pane fade" id="nofication">
                    <?php include 'nofication/nofication-profile.php'?>
                </section>
                <section class="tab-pane fade" id="account-settings">
                    <h2 class="h5">Cài đặt tài khoản</h2>
                    <p>Chỉnh sửa thông tin tài khoản và mật khẩu tại đây.</p>
                </section>
            </div>
        </div>
    </div>
</div>


<style>
.infor-user {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.infor-user img {
    border: 3px solid #ddd;
    padding: 2px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.infor-user h5 {
    font-size: 1.25rem;
    color: #333;
    margin-top: 15px;
    font-weight: 600;
}

.infor-user .level-user {
    width: 80%;
    font-size: 0.9rem;
    color: #888;
    margin: auto;
    background-color: #ccc;
    padding: 10px;
    border-radius: 50px;
}

.nav-item {
    background-color: transparent !important;
}

.nav-link {
    color: #333;
    padding: 10px 15px;
}

.nav-link:hover {
    color: #C92127;
    background-color: transparent;
}

.nav-link.active {
    color: #C92127 !important;
    background-color: transparent !important;
}

.nav-pills .nav-link {
    border-radius: 0;
}

.sidebar {
    width: 20%;
    padding: 20px;
    background-color: #fff;
    border-right: 1px solid #ddd;
}

.sidebar .infor-user img {
    border-radius: 50%;
    width: 96px;
    height: 96px;
}

.sidebar .infor-user h5 {
    margin-top: 10px;
    font-weight: 600;
}

.sidebar .role p {
    color: #6c757d;
}

.profile-main {
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin: 20px 5px;
}

.main-content {
    width: 75%;
    background-color: none;
    padding: 20px;
}

.list-group-item {
    border: none;
    padding: 10px;
    background-color: #f8f9fa;
}

.list-group-item:hover {
    background-color: #e9ecef;
}
</style>