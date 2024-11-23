
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form>
                <input type="text" placeholder="Tên sản phẩm">
                <input type="text" placeholder="Giá">
                <input type="file" name="product_image"> <!-- Thêm trường nhập hình ảnh -->
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Danh mục</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $ch='';
                    foreach ($mangsp as $key => $value) {
                        $ch.='<tr>
                        <td>'.$value['id'].'</td>
                        <td><img src="public/img/'.$value['img'].'" width="100px" alt=""></td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['price'].'</td>
                        <td>'.$value['view'].'</td>
                        <td>'.$value['namedm'].'</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
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
