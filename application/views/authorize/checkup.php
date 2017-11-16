<div class="user">
    <?php echo validation_errors(); ?>
    <form action="<?=base_url('index.php/authorize/check_user') ?>" method='post'>
        <div>
            <div class='user-note'>
                <p>Введите следующую информацию одного из двух пользователей:</p>
                <ul>
                    <li class='auth-user-info'>
                        <ul>
                            <li>Логин: user1</li>
                            <li>Пароль: 1</li>
                        </ul>
                    </li><br/>
                    <li class='auth-user-info'>
                        <ul>
                            <li>Логин: user2</li>
                            <li>Пароль: 1</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="login">
                <span>Логин: </span>
                <input name="login" type="text" value="<?= $model['login'] ?>" /><br/>
            </div>
            <div class="password">
                <span>Пароль: </span>
                <input name="password" type="text" value="<?= $model['password'] ?>" /><br/>
            </div>
            <div class="err-mes">
                <?php if (isset($errMes)) {
                    echo $errMes;
                } ?>
            </div>
        </div><br/>
        <center><input type="submit" value="Сохранить" class="save" /></center>
    </form>
</div>