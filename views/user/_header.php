 <div>
    <div style="background-color:var(--secondary)" class="d-flex justify-content-center">
        <div class="container">
            <img src="./img/top_banner.webp" height="auto" width="100%">
        </div>
    </div>
    <div class="mx-auto" style="background-color: white">
        <div class="container" style="width:1230px">
            <div class="d-flex align-items-center justify-content-between" style="height: 68px;">
                <div>
                    <img src="./img/logo.webp" style="width:220px; vertical-align: middle;">
                </div>
                <div class="d-flex gap-2">
                    <div class="d-flex align-items-center gap-1 position-relative dropdown-wrapper">
                        <img src="./img/menu_red.svg" style="color: var(--greyD);">
                        <span><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                    <div class="input-group">
                        <div class="input-group">
                            <input type="text" class="form-control rounded" placeholder="Tìm kiếm sản phẩm..." style="width: 585px;height:40px">
                            <div class="input-group-append position-relative">
                                <button class="btn btn-outline-secondary position-absolute d-flex justify-content-center rounded" type="button" style="width:72px;height:30px;background:var(--primary);color:white;right:2px;top:5px">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-regular fa-bell"></i>
                        <span class="text-xs">Thông báo</span>
                    </div>
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="text-xs">Giỏ hàng</span>
                    </div>
                    <div class="d-flex flex-column text-center gap-1" style="color: var(--greyD)">
                        <i class="fa-regular fa-user"></i>
                        <span class="text-xs">Tài khoản</span>
                    </div>
                </div>
                <div class="rounded d-flex align-items-center gap-2 border px-2 pt-1 pb-2">
                    <div class="btn-group">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./img/default.svg" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><img src="./img/english.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dropdown">
    sadaklsjdklsval
</div>

<style>
#dropdown {
    display: none; 
    position: absolute;
    top: 100%; 
    left: 0;
    background: white;
    border: 1px solid var(--greyD);
    padding: 10px;
    z-index: 1000;
    width: 100%; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.dropdown-wrapper:hover #dropdown {
    display: block;
}

</style>