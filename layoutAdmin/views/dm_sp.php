
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới thương hiệu</h2>
            <form action="index.php?trang=dm_sp&lenh=them" method="post">
                <input type="text"name="tendm" placeholder="Tên thương hiệu">
                <input type="submit"name="them" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách thương hiệu</h2>
            <table>
                <thead>
                    <tr>
                        <th>stt</th>
                        <th>ID</th>
                        <th>Tên thương hiệu</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ch='';
                    foreach ($dsdm as $key => $value) {
                        $ch.='<tr>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['name'].'</td>
                        <td><img src="" alt=""></td>
                        <td class="action-icons">
                            <a href="index.php?trang=dm_sp&lenh=sua&id='.$value['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="index.php?trang=dm_sp&lenh=xoa&id='.$value['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                    echo $ch;
                    ?>
                    
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
