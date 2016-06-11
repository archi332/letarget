<?php include 'header.html'; ?>

<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <H2 align="center" style="margin: 50px 0px 50px">Добавление новой категории</H2>
        <form action="<?php echo site_url().'main_page/add_sub_cat'; ?>" method="post">

            <div class="form-group">
                <label>Введите имя новой подкатегории: </label>
                <input type="text" name="name" class="form-control" id="name" title="esxdcgbyhnjmk">
            </div>

            <div class="form-group">
                <label>Выберите родительскую категорию: </label>
                <select class="form-control" name="cat_id">
                    <?php foreach($categories as $value) : ?>
                        <option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button class="btn btn-default">Добавить</button>
            <a class="btn btn-info" href="<?php echo site_url().'main_page/admin_panel'; ?>">Вернутся</a>
        </form>
    </div>
</div>

<?php include 'footer.html'; ?>