<h2>Админка</h2>
<h3>Список заказов</h3>

<? if (isAdmin()) : ?>

    <form action="/admin/admin/" method="post">
        <p>Отфильтровать заказ по статусу:</p>
        <select name="orderSelect" id="">
            <option value="0" >Все заказы</option>
            <? foreach ($statuses as $status) :?>

                <option value="<?=$status['id'] ?>" ><?=$status['status'] ?></option>
            <? endforeach; ?>
        </select>
        <input type="submit" value="Фильтр">
    </form>
<hr>
<? foreach ($orders as $order) : ?>
    <div class="order">
        <p>Имя покупателя: <?=$order['name']?></p>
        <p>Телефон покупателя: <?=$order['phone']?></p>
        <p>Статус заказа: <?=$order['status']?></p>
        <a href="/admin/detail/<?=$order['id']?>/"><button>Подбробнее о заказе</button></a>
        <hr>
    </div>

<? endforeach; ?>


<? else: ?>
<h4>Вы не являетесь администратором</h4>
<? endif; ?>
