<?php include 'header.html'; ?>

    <div class="container" style="margin: 50px 0px 50px 0px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="<?php echo base_url('main_page/update') ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_items" value="<?php echo $id_items; ?>">
                    <label for="item-name">Название</label>
                    <input type="text" class="form-control" id="item-name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="item-desc">Описание</label>
                    <textarea class="form-control" name="description" required><?php echo $description; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="table">Выберите категорию:</label>

                    <select class="form-control" name="sub_cat_id">

                        <?php foreach($cat as $value){
                            echo '<option disabled>'.$value['category_name']. '</option>';

                            foreach($sub_cat as $val) :

                                if ($value['id'] == $val['sub_category_id']) : ?>
                                    <option
                                        value="<?php echo $val['id_cat']; ?>"
                                        <?php if($val['id_cat'] == $category_id) echo 'selected = selected'; ?>
                                    >

                                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val['item_category_name']; ?>

                                    </option>
                                <?php endif; ?>

                            <?php endforeach;

                        } ?>

                    </select>

                </div>
                <button type="submit" class="btn btn-default">Изменить</button>
                <a class="btn btn-info" href="<?php echo base_url('main_page/admin_panel') ?>">Вернутся в админку</a>
            </form>
        </div>
    </div>





<?php include 'footer.html'; ?>