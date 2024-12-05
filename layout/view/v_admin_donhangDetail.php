<?php foreach($history as $hehe):?>
<h2 class>Chi tiết đơn số #<?=$hehe['id_order']?>
<?php switch ($hehe['status']) {
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
</h2>
<?php endforeach;?>
<div class="row">
    <div class="col-sm-4">
        <table id="table table-bordered">
            <?php foreach($history as $hehe):?>
                <tbody>
                    <tr>
                        <th>Người mua</th>
                        <td><?=$hehe['username']?></td>
                    </tr>
                    <tr>
                        <th>Ngày mua</th>
                        <td><?=$hehe['datetime']?></td>
                    </tr>
                    <tr>
                        <th>Số lượng</th>
                        <td><?=$hehe['quantity']?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><?=$hehe['city']?></td>
                    </tr>
                    <tr>
                        <th>Sdt</th>
                        <td><?=$hehe['phone']?></td>
                    </tr>
                    <tr>
                        <th>Tổng tiền</th>
                        <td><?=number_format($hehe['total'])?></td>
                    </tr>
                    <tr>
                        <th>Trạng Thái</th>
                        <td>
                            <select name="" class="form-select" id="status">
                                <option value="cart"<?=$hehe['status'] == 'cart' ? 'selected' : '' ?>>Chờ xác nhận</option>
                                <option value="processing" <?=$hehe['status'] == 'processing' ? 'selected' : '' ?>>Đang xử lý</option>
                                <option value="delivering" <?=$hehe['status'] == 'delivering' ? 'selected' : '' ?>>Đang giao hàng</option>
                                <option value="received" <?=$hehe['status'] == 'received' ? 'selected' : '' ?>>Đã giao</option>
                                <option value="canceled" <?=$hehe['status'] == 'canceled' ? 'selected' : '' ?>>Đã hủy</option>
                            </select>
                            <script>
                               document.querySelector('#status').addEventListener('change', (event) => {
                                    let value = event.target.value;
                                    location.search = `?mod=page&act=updateOrderStatus&id=<?=$hehe['id_order']?>&status=${value}`;
                                })
                            </script>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach;?>
        </table>
    </div>
    <div class="col-8">
        <table id="table">
            <thead>
                <tr>
                    <th>Tên Giày</th>
                    <th>Số lượng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($historyDetail as $sneakers):?>
                        <tr>
                            <td>
                                <img src="<?=$baseURL?><?=$sneakers['img']?>" width="64">
                                <?=$sneakers['name_products']?>
                            </td>
                            <td><?=$sneakers['quantity']?></td>
                        </tr>
                <?php endforeach;?>
                </tbody>
        </table>
    </div>
</div>

