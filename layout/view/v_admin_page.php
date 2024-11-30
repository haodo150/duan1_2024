<div class="container">
    <div class="grid" >
        <div class="card">
            <h2>Doanh số bán hàng</h2>
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>
        <div class="card">
            <h2>Đơn hàng</h2>
            <p><?=number_format($soDonHang)?></p>
        </div>
        <div class="card">
            <h2>Tổng số sản phẩm</h2>
            <p><?=number_format($soGiay)?></p>
        </div>
    </div>
    <div class="grid" >
        <div class="card">
            <h2>Danh sách sản phẩm</h2>
            <p><?=number_format($soChuDe)?></p>
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p><?=number_format($soBinhLuan)?></p>
        </div>
        <div class="card">
            <h2>Khách hàng</h2>
            <p><?=number_format($soTaiKhoan)?></p>
        </div>
    </div>
</div>

<script>
    // Dữ liệu mẫu cho biểu đồ
    const salesData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Sales',
            data: [1000, 1500, 1200, 1800, 2000, 1700],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Lấy thẻ canvas và vẽ biểu đồ doanh số
    const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: salesData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
