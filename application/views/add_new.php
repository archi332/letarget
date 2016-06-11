<?php include 'header.html'; ?>

    <div class="container" style="margin: 50px 0px 50px 0px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="<?php echo site_url('main_page/add_new') ?>" method="post">
                <div class="form-group">
                    <label for="item-name">Название товара</label>
                    <input type="text" class="form-control" id="item-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="item-desc">Описание товара</label>
                    <textarea class="form-control" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="table">Выберите категорию:</label>
                    <select class="form-control" name="table">
                        <option value="Jacket">Кофты</option>
                        <option value="Pants">Штаны</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Добавить</button>
                <a class="btn btn-info" href="<?php echo site_url('main_page/admin_panel') ?>">Вернутся в админку</a>
            </form>
        </div>
    </div>



<?php include 'footer.html';