<section class="mb-3">
    <h6>DASHBOARD</h6>
    <h3>Thống kê chi tiết</h3>
</section>

<section class="d-flex justify-content-between gap-3 mb-4">
    <div class="border w-100 p-3 shadow" style="border-radius: 10px">
        <h6 class="text-center">Số sản phẩm</h6>
        <h3 class="text-center">2.300</h3>
        <p class="text-center">sản phẩm</p>
    </div>
    <div class="border w-100 p-3 shadow" style="border-radius: 10px">
        <h6 class="text-center">Số sản phẩm</h6>
        <h3 class="text-center">2.300</h3>
        <p class="text-center">sản phẩm</p>
    </div>
    <div class="border w-100 p-3 shadow" style="border-radius: 10px">
        <h6 class="text-center">Số sản phẩm</h6>
        <h3 class="text-center">2.300</h3>
        <p class="text-center">sản phẩm</p>
    </div>
    <div class="border w-100 p-3 shadow" style="border-radius: 10px">
        <h6 class="text-center">Số sản phẩm</h6>
        <h3 class="text-center">2.300</h3>
        <p class="text-center">sản phẩm</p>
    </div>
    <div class="border w-100 p-3 shadow" style="border-radius: 10px">
        <h6 class="text-center">Số sản phẩm</h6>
        <h3 class="text-center">2.300</h3>
        <p class="text-center">sản phẩm</p>
    </div>
</section>

<section class="container-fluid mb-4">
    <div class="row">
        <div class="col-8 ps-0">
            <div class="border shadow" style="border-radius: 10px;">
                <h5 class="p-3" style="border-bottom: 1px solid #ccc;">Lượt bán</h5>
                <div class="px-3">
                    <canvas id="sold-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="border shadow h-100" style="border-radius: 10px;">
                <h5 class="p-3" style="border-bottom: 1px solid #ccc;">Nhà cung cấp</h5>
                <div class="px-3">
                    <canvas id="supplier-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="border shadow" style="border-radius: 10px;">
                <h6 class="p-3" style="border-bottom: 1px solid #ccc;">Sản phẩm mới</h6>
            </div>
        </div>
        <div class="col-5">
            <div class="border shadow" style="border-radius: 10px;">
                <h6 class="p-3" style="border-bottom: 1px solid #ccc;">Lượt xem cao nhất</h6>
            </div>
        </div>
        <div class="col-3">
            <div class="border shadow" style="border-radius: 10px;">
                <h6 class="p-3" style="border-bottom: 1px solid #ccc;">Top chi tiêu</h6>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const soldChart = document.getElementById('sold-chart');

new Chart(soldChart, {
    type: 'bar',
    data: {
        datasets: [{
            data: [20, 10, 3, 50],
        }],
        labels: ['a', 'b', 'c', 'd']
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const supplierChart = document.getElementById('supplier-chart');

new Chart(supplierChart, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [20, 10, 3, 50],
        }],
        labels: ['a', 'b', 'c', 'd']
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>