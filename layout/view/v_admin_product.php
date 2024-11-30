
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <?php if(isset($_SESSION['alert'])): ?>
                <div class="alert-success">
                  <?= $_SESSION['alert'] ?>
                </div>
              <?php endif; unset($_SESSION['alert']) ?>
            <form> 
            <a href="admin.php?mod=page&act=add" style="display: inline-block; width: 300px; background-color: #555; color: white; padding: 10px 0; text-align: center; border-radius: 5px; text-decoration: none; font-size: 16px;">Thêm
            </a>
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
                    <?php $i=1;
                     foreach ($loadList as $load ):?>
                    <tr>
                        <td><?=$i?></td>
                        <td><img src="<?= $baseURL?><?= $load['img']?>" width="100px" alt=""></td>
                        <td><?=$load['name_products']?></td>
                        <td><?=$load['price_products']?></td>
                        <td></td>
                        <td><?=$load['name_categories']?></td>
                        <td class="action-icons">
                            <a href="?mod=page&act=update&id=<?=$load['id_product']?>"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete" data-id="<?=$load['id_product'] ?>" 
                            data-name="<?=$load['name_products']?>"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <?php $i++;
                    endforeach; ?>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
<script>
    document.querySelectorAll('.btn-delete').forEach((btn)=>{
        btn.addEventListener('click',(event) =>{
            let id = btn.getAttribute('data-id');
            let name = btn.getAttribute('data-name');
            let ok = confirm(`Ban co muon xoa san pham nay khong ${name}.Bam ok de xoa!`);
            if(ok){
                location.search = `?mod=page&act=delete&id=${id}`;
            }
        })
    })
</script>
</html>
