<?php include 'header.html';  echo base_url().'<br>'; echo base_url(); ?>

<div align="right">
            <a class='btn btn-info' href="<?php echo base_url('main_page/admin_panel'); ?>" title="enter as admin or moderator">admin panel</a>
        </div>
<div class="container" style="margin: 50px 0px 0px 0px ">
    <div class="col-md-2">

        <H3>Категории:</H3>

        <?php foreach ($category as $value) : ?>
        <div class="dropdown">
        <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
           <?php echo $value['category_name']; ?>
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">



                <?php foreach ($sub_category as $val) :
                    if($value['id'] == $val['sub_category_id']): ?>

                    <li><a href="<?php echo base_url().'main_page/index?tab='.$val['id_cat']; ?>">
                            <?php echo $val['item_category_name']; ?>
                        </a></li>
                <?php endif; endforeach; ?>

            </ul>
        </div>
        <?php endforeach; ?>




    </div>
    <div class="col-md-10">



        <?php if (isset($items)) : ?>

            <?php foreach ($items as $val) : ?>

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
