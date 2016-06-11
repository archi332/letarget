<?php include 'header.html'; ?>

<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <H2 align="center" style="margin: 50px 0px 50px">Добавление новой категории</H2>
        <form action="<?php echo base_url().'main_page/add_cat'; ?>" method="post">

            <div class="form-group">

                <label>Введите имя новой категории: </label>

                <input type="text" name="name" class="form-control" id="name" title="esxdcgbyhnjmk">

            </div>

            <button class="btn btn-default">Добавить</button>
            <a class="btn btn-info" href="<?php echo base_url().'main_page/admin_panel'; ?>">Вернутся</a>
        </form>
    </div>
</div>

<?php include 'footer.html'; ?>
