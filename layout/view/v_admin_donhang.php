<h2 class>Đơn hàng</h2>
<table class="table">
    <thead>
        <tr>
            <th>Mã đơn</th>
            <th>Người mua</th>
            <th>Ngày mua</th>
            <th>Số lượng</th>
            <th>Địa chỉ</th>
            <th>Sdt</th>
            <th>Tổng tiền</th>
            <th>Trạng Thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($donHang as $his):?>
        <tr>
            <td><?=$his['id_order']?></td>
            <td><?=$his['username']?></td>
            <td><?=$his['datetime']?></td>
            <td><?=$his['quantity']?></td>
            <td><?=$his['city']?></td>
            <td><?=$his['phone']?></td>
            <td><?= number_format($his['total'])?>đ</td>
            <td>
               
                <?php switch ($his['status']) {
                    case 'cart':
                        echo '<span class="badge text-bg-primary">Chờ xác nhận</span>';
                        break;
                    case 'processing':
                        echo '<span class="badge text-bg-info">Đang xử lý</span>';
                        break;
                    case 'delivering':
                        echo '<span class="badge text-bg-warning">Đang giao hàng</span>';
                        break;
                    case 'received':
                        echo '<span class="badge text-bg-success">Đã giao</span>';
                        break;
                    case 'canceled':
                        echo '<span class="badge text-bg-danger">Đã hủy</span>';
                        break;
                    default:
                        # code...
                        break;
                }?>
            </td>
            <td>
                <a href="admin.php?mod=page&act=donhangDetail&id=<?=$his['id_order']?>"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>