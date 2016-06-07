<?php include 'header.html'; ?>


    <div class="container" style="margin: 50px 0px 50px 0px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="<?php echo site_url('main_page/update') ?>" method="post">
                <div class="form-group">
                    <label for="item-name">Название</label>
                    <input type="text" class="form-control" id="item-name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="item-desc">Описание</label>
                    <textarea class="form-control" name="description" required><?php echo $description; ?></textarea>
                </div>
                <div>
                    <input type="hidden" name="table" value="<?php echo $table; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <button type="submit" class="btn btn-default">Изменить</button>
                <a class="btn btn-info" href="<?php echo site_url('main_page/admin_panel') ?>">Вернутся в админку</a>
            </form>
        </div>
    </div>


<?php include 'footer.html'; ?>