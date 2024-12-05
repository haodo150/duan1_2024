<!-- <div class="container">
    <div class="grid">
        <div class="card">
            <h2>Doanh số bán hàng</h2>
           
           
        </div>
        <div class="card">
            <h2>Đơn hàng</h2>
            <p></p>
        </div>
        <div class="card">
            <h2>Tổng số sản phẩm</h2>
            <p></p>
        </div>
    </div>
    <div class="grid" >
        <div class="card">
            <h2>Danh sách sản phẩm</h2>
            <p><?=number_format($soChuDe)?></p>
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p></p>
        </div>
        <div class="card">
            <h2>Khách hàng</h2>
            <p></p>
        </div>
    </div>
</div> -->
<h2>Tổng quan</h2>
<div class="row">
    <div class="col-md-3">
        <div class="cart text-primary mb-3">
            <div class="cart-body">
                <h5 class="cart-title">Đơn hàng</h5>
                <p class="cart-text fs-1 text-center"><?=number_format($soDonHang)?></p>
            </div>
        </div> 
    </div>
    <div class="col-md-3">
        <div class="cart text-success mb-3">
            <div class="cart-body">
                <h5 class="cart-title">Tổng số sản phẩm</h5>
                <p class="cart-text fs-1 text-center"><?=number_format($soGiay)?></p>
            </div>
        </div> 
    </div>
    <div class="col-md-3">
        <div class="cart text-warning mb-3">
            <div class="cart-body">
                <h5 class="cart-title">Bình luận</h5>
                <p class="cart-text fs-1 text-center"><?=number_format($soBinhLuan)?></p>
            </div>
        </div> 
    </div>
    <div class="col-md-3">
        <div class="cart text-danger mb-3">
            <div class="cart-body">
                <h5 class="cart-title">Khách hàng</h5>
                <p class="cart-text fs-1 text-center"><?=number_format($soTaiKhoan)?></p>
            </div>
        </div> 
    </div>
</div>
<div id="myChart" style="max-width:700px; height:400px"></div>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    // // Dữ liệu mẫu cho biểu đồ
    // const salesData = {
    //     labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    //     datasets: [{
    //         label: 'Sales',
    //         data: [1000, 1500, 1200, 1800, 2000, 1700],
    //         backgroundColor: 'rgba(54, 162, 235, 0.2)',
    //         borderColor: 'rgba(54, 162, 235, 1)',
    //         borderWidth: 1
    //     }]
    // };

    // // Lấy thẻ canvas và vẽ biểu đồ doanh số
    // const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
    // const salesChart = new Chart(salesChartCanvas, {
    //     type: 'line',
    //     data: salesData,
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //             }]
    //         }
    //     }
    // });
</script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
// Set Data
const data = google.visualization.arrayToDataTable([
  ['Thang/Nam', 'DoanhThu (VND)'],
  <?php foreach($thongKe as $tk): ?>
  ['<?=$tk['Thang']?>/<?=$tk['Nam']?>',<?=$tk['DoanhThu']?>],
  <?php endforeach;?>
]);

// Set Options
const options = {
  title:'Thống kê doanh thu bán hàng'
};

// Draw
const chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);
}


</script>

</body>
</html>
