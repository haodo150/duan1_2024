<section>
    <div class="col3">
        <h2>Thêm Danh Mục Mới</h2>
        <form method="POST" action="admin.php?mod=page&act=categoryAdd" enctype="multipart/form-data">
            
            <label for="name_categories">Tên Danh Mục:</label>
            <input type="text" id="name_categories" name="name_categories" required><br>
            
            <label for="img">Ảnh Danh Mục:</label>
            <input type="file" id="img" name="img" accept="image/*" required><br>
            
            <input type="submit" name="submit" value="Thêm Danh Mục">
        </form>
    </div>
</section>
</body>
</html>




