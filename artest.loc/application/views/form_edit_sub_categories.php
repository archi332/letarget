<?php include 'header.html'; ?>

    <div class="container" style="margin: 50px 0px 50px 0px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <table class="table">


                <?php foreach ($sub_categories as $val): ?>
                    <tr>
                        <td><?php echo $val['item_category_name']; ?></td>
                        <td><a class="btn btn-warning" href="<?php echo site_url(). 'main_page/edit_sub_cat?id='.$val['id_cat']; ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="<?php echo site_url(). 'main_page/delete_sub_cat?id='.$val['id_cat']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <a class="btn btn-info" href="<?php echo site_url('main_page/admin_panel') ?>">Вернутся в админку</a>
        </div>


        <?php if(isset($sub_cat_edit)): ?>
            <div class="col-md-3">
                <form action="<?php echo site_url('main_page/update_sub_cat') ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_items" value="<?php echo $sub_cat_edit['id_cat']; ?>">
                        <label for="category_name">Название категории:</label>
                        <input type="text" class="form-control" id="item-name" name="category_name" value="<?php echo $sub_cat_edit['item_category_name']; ?>" required>

                        <div class="form-group">
                            <label>Выберите родительскую категорию:</label>
                            <select class="form-control" name="category">

                                <?php foreach($category as $value) : ?>

                                    <option
                                        value="<?php echo $value['id'] ; ?>"
                                        <?php if($value['id']==$sub_cat_edit['sub_category_id']) echo 'selected = selected';?>
                                    >

                                        <?php echo $value['category_name']; ?>

                                    </option>

                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-default">Изменить</button>
                </form>
            </div>
        <?php endif; ?>

    </div>

<?php include 'footer.html'; ?>