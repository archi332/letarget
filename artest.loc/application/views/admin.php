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

                <?php foreach ($category as $val) : ?>

                    <a class="btn btn-default" href="<?php echo site_url(). 'main_page/admin_panel?cat='.$val['id']; ?>"><?php echo $val['category_name']; ?></a>
                <?php endforeach; ?>
                    <a class="btn btn-success" href="<?php echo site_url().'main_page/add_cat'; ?>">Добавить категорию</a>
                    <a class="btn btn-warning" href="<?php echo site_url().'main_page/edit_cat'; ?>">Редактировать категории</a>
                </div>



                <H4><span class="label label-default">Подкатегории:</span></H4>
                <div class="btn-group-vertical" role="group" style="width: 80%;">

                    <?php
                    foreach ($sub_category as $val) : ?>
                        <a class="btn btn-default" href="<?php echo site_url().'main_page/admin_panel?tab='.$val['id_cat']; ?>"><?php echo $val['item_category_name']; ?></a>
                    <?php endforeach; ?>
                    <a class="btn btn-default" href="<?php echo site_url('/main_page/admin_panel?tab=A'); ?>">Отобразить все</a>
                    <a href="add_new" class="btn btn-success" title="Добавление товара с описанием в необходимую категорию.">Добавить запись</a>
                    <a class="btn btn-warning" href="<?php echo site_url(). 'main_page/add_sub_cat'; ?>">Добавить подкатегорию</a>
                    <a class="btn btn-warning" href="<?php echo site_url(). 'main_page/edit_sub_cat'; ?>">Редактировать подкатегории</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <?php
            if (isset($items)) : ?>

                <table class="table">

                    <tr>
                        <td class="text-center" width="30%">
                            Название

                            <a class="btn btn-default" href="<?php echo substr($_SERVER['REQUEST_URI'], 0, 28).'&sort=asc'; ?>">
                                <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-default" href="<?php echo substr($_SERVER['REQUEST_URI'], 0, 28).'&sort=desc'; ?>">
                                <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                            </a>


                        </td>


                        <td class="text-center">Описание</td>
                    </tr>

                    <?php


                    foreach ($items as $val) : ?>
                        <tr><td> <?php echo $val['name']; ?></td>
                            <td><?php echo $val['description']; ?></td>
                            <td><a href="<?php echo site_url(). 'main_page/update?id='. $val['id_items']; ?>" class="btn btn-warning">Изменить</a></td>
                            <td><a href="<?php echo site_url(). 'main_page/delete?id='. $val['id_items']; ?>" class="btn btn-danger">Удалить</a></td></tr>
                    <?php endforeach; ?>

                </table>

            <?php endif; ?>

        </div>
    </div>
</div>


<?php include 'footer.html';