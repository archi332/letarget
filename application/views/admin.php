<?php include 'header.html'; ?>

<div align="right">
    <a class="btn btn-default" href="<?php echo site_url(); ?>">Вернутся на страницу</a>
    <a class='btn btn-info' href="<?php echo site_url('/main_page/log_out'); ?>" title="Logout from admin page">Log Out</a>
</div>
<div class="container" style="margin: 50px; background-color: rgba(255, 255, 255, 0)">
    <div class="row">
        <div class="col-md-3">
            <div class="text-left">
                <H4><span class="label label-default">Категории:</span></H4>
                <div class="btn-group-vertical" role="group" style="width: 80%;">
                    <a class="btn btn-default disabled">Обувь</a>
                    <a class="btn btn-default disabled">Одежда</a>
                    <a class="btn btn-default disabled">Добавить категорию</a>
                </div>
                <H4><span class="label label-default">Подкатегории:</span></H4>
                <div class="btn-group-vertical" role="group" style="width: 80%;">
                    <a class="btn btn-default" href="<?php echo site_url('/main_page/admin_panel?table=Jacket'); ?>">Кофты</a>
                    <a class="btn btn-default" href="<?php echo site_url('/main_page/admin_panel?table=Pants'); ?>">Штаны</a>
                    <a class="btn btn-default" href="<?php echo site_url('/main_page/admin_panel?table=All'); ?>">Отобразить все</a>
                    <a href="add_new" class="btn btn-success" title="Добавление товара с описанием в необходимую категорию.">Добавить запись</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <?php if (isset($jackets)) : ?>

                <table class="table">

                    <tr>
                        <td class="text-center">Наименование</td>
                        <td class="text-center">Описание</td>
                    </tr>

                    <?php foreach ($jackets as $val) : ?>
                        <tr><td> <?php echo $val['name']; ?></td>
                            <td><?php echo $val['description']; ?></td>
                            <td><a href="<?php echo site_url(). '/main_page/update?table=jakket&id='. $val['id']; ?>" class="btn btn-warning">Изменить</a></td>
                            <td><a href="<?php echo site_url(). '/main_page/delete?table=jakket&id='. $val['id']; ?>" class="btn btn-danger">Удалить</a></td></tr>
                    <?php endforeach; ?>

                </table>

            <?php endif; ?>

        </div>
    </div>
</div>


<?php include 'footer.html';