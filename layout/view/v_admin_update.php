
<section>
    <div class="container2">
        <section>
            <h2>Cập nhật sách</h2>
            <?php if(isset($_SESSION['alert'])): ?>
                <div class="alert-success">
                  <?= $_SESSION['alert'] ?>
                </div>
              <?php endif; unset($_SESSION['alert']) ?>
            <form method="POST" action="admin.php?mod=page&act=postUpdate" enctype="multipart/form-data">
                <input type="hidden" name="id_product" value="<?=$home_products['id_product']?>">
                <label for="name_products">Tên sản phẩm:</label><br>
                <input type="text" id="name_products" name="name_products" value="<?=$home_products['name_products']?>"><br>
                
                <label for="price_products">Giá:</label><br>
                <input type="text" id="price_products" name="price_products" value="<?=$home_products['price_products']?>"><br>

                <label for="id_categories">Danh mục sản phẩm:</label><br>
                <select name="id_categories" id="id_categories">
                    <?php foreach($subjectList as $subject): ?>
                    <option value="<?=$subject['id_categories']?>" <?=$subject['id_categories']
                    == $home_products['id_categories']?"selected":""?> >
                        <?=$subject['name_categories']?>
                    </option>
                    <?php endforeach; ?>
                </select><br>
                <label for="img">Hình ảnh:</label><br>
                <img src="<?= $baseURL?><?=$home_products['img']?>" width="100" alt="">
                <input type="file" id="img" name="img"><br>
                <input type="hidden" name="imgHienTai" value="<?=$home_products['img']?>">
                
                <input type="submit" value="Thêm">
            </form>
    </section>

    </div>
</section>

</body>
</html>