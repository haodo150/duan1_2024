

<section>
    <div class="container2">
        <section>
        <h2>Thêm sách</h2>
            <form method="POST" action="admin.php?mod=page&act=postAdd" enctype="multipart/form-data">
                <label for="name_products">Tên sản phẩm:</label><br>
                <input type="text" id="name_products" name="name_products"><br>
                
                <label for="price_products">Giá:</label><br>
                <input type="text" id="price_products" name="price_products"><br>

                <label for="id_categories">Danh mục sản phẩm:</label><br>
                <select name="id_categories" id="id_categories">
                    <?php foreach($subjectList as $subject): ?>
                    <option value="<?=$subject['id_categories']?>">
                        <?=$subject['name_categories']?>
                    </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="img">Hình ảnh:</label><br>
                <input type="file" id="img" name="img"><br>
                
                <input type="submit" value="Thêm">
            </form>
    </section>

    </div>
</section>

</body>
</html>
