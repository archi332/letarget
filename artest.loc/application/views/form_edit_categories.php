<?php include 'header.html'; ?>

<div class="container" style="margin: 50px 0px 50px 0px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">


            <table class="table">


                <?php foreach ($categories as $val): ?>
                    <tr>
                        <td><?php echo $val['category_name']; ?></td>
                        <td><a class="btn btn-warning" href="<?php echo site_url(). 'main_page/edit_cat?id='.$val['id']; ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="<?php echo site_url(). 'main_page/delete_cat?id='.$val['id']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        <a class="btn btn-info" href="<?php echo site_url('main_page/admin_panel') ?>">Вернутся в админку</a>
    </div>


    <?php if(isset($cat_edit)): ?>
    <div class="col-md-3">
        <form action="<?php echo site_url('main_page/update_cat') ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id_items" value="<?php echo $cat_edit['id']; ?>">
                <label for="category_name">Название категории:</label>
                <input type="text" class="form-control" id="item-name" name="category_name" value="<?php echo $cat_edit['category_name']; ?>" required>
                <input type="hidden" value="">
            </div>
            <button type="submit" class="btn btn-default">Изменить</button>
        </form>
    </div>
    <?php endif; ?>


</div>





<?php include 'footer.html'; ?>