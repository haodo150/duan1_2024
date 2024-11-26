

<section>
    <div class="container2">
        <section>
            <form action="index.php?trang=dm_sp&lenh=capnhat&id=<?php echo $mt[0]['id']; ?>" method="post">
                <label for="product_name">Tên thương hiệu:</label><br>
                <input type="text" value="<?php echo $mt[0]['name'];  ?>" name="tendm"><br>
                <input type="submit" value="Cập nhật">
            </form>
        </section>
    </div>
</section>

</body>
</html>
