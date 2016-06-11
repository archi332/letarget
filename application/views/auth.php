<?php include 'header.html'; ?>
<div class="container">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="text-center" style="margin: 50px 0px 50px 0px;"><H3>Для доступа в административную панель, пожалуйста авторизируйтесь!</H3></div>
        <form action="<?php echo base_url('main_page/auth') ?>" method="post">
            <div class="form-group">
                <label for="user_login">Логин:</label>
                <input type="text" class="form-control" id="user_login" name="username" placeholder="login" value="<?php if(isset($name))  echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="Password">Пароль:</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-default">Войти</button>
            <a class="btn btn-info" href="<?php echo base_url('main_page/index') ?>">Вернутся к каталогу</a>
        </form>

            <?php if (isset($name)) : ?>
                <div class="alert-danger" align="center" style="margin: 30px">
                    Неверные регистрационные данные! Проверьте логин, пароль и заполните форму снова.
                </div>
            <?php endif; ?>

        </div>
</div>








<?php include 'footer.html'; ?>