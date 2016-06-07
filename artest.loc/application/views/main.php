<?php include 'header.html'; ?>

<div align="right">
            <a class='btn btn-info' href="<?php echo site_url('/main_page/admin_panel'); ?>" title="enter as admin or moderator">admin panel</a>
        </div>
<div class="container" style="margin: 50px 0px 0px 0px ">
    <div class="col-md-2">
        <div><strong>Категории:</strong></div><br>

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Обувь
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="disabled"><a href="#">Кроссовки</a></li>
                <li role="separator" class="divider"></li>
                <li class="disabled"><a href="#">Туфли</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Одежда
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo site_url('/main_page/jackets'); ?>">Кофты</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url('/main_page/pants'); ?>">Штаны</a></li>
            </ul>
        </div>

    </div>
    <div class="col-md-10">

        <?php if (isset($jackets)) : ?>

            <?php foreach ($jackets as $val) : ?>

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $val['name']; ?></h3>
                    </div>

                    <div class="panel-body">
                        <?php echo $val['description']; ?>
                    </div>

                </div>
            <?php endforeach; ?>

        <?php endif; ?>

        <?php if (isset($pants)) : ?>

            <?php foreach ($pants as $val) : ?>

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $val['name']; ?></h3>
                    </div>

                    <div class="panel-body">
                        <?php echo $val['description']; ?>
                    </div>

                </div>
            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</div>
<?php include 'footer.html'; ?>
