
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới</h2>
            <form>
                <input type="text" placeholder="Tên">
                <input type="text" placeholder="Email">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Thao tác</th> <!-- Thêm cột mới -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($userList as $user):?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?=$user['username']?></td>
                        <td><?=$user['email']?></td>
                        <td><?=$user['password']?></td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php $i++; endforeach;?>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
