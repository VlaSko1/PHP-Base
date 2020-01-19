<? if (!$auth): ?>
    <form action="/auth/login/" method="post">
        <input type="text" name="login", placeholder="Логин">
        <input type="password" name="pass", placeholder="Пароль">
        Save? <input type="checkbox" name="save">
        <input type="submit" name="send" value="Авторизация">
    </form>


<? else : ?>
    Добро пожаловать, <?=$user ?>! <a href="/auth/logout/">Выход</a> <br>

<? endif; ?>
<a href="/">Главная</a>
<a href="/catalog/">Каталог</a>
<a href="/feedback/">Отзывы</a>
<a href="/basket/">Корзина <span id="count" class="menu__basket"><?=$count?></span></a>
<? if (isAdmin()):?>
<a href="/admin/">Админка</a>
<?endif;?><br>