<h2>Подбробнее о заказе</h2>
<? if (isAdmin()) : ?>
<? if (empty($order['id'])): ?>
    <h4>Заказ удален</h4>
    <? else: ?>
<div class="order">
    <table style="border:1px solid black;">
        <tr>
            <th>№п/п</th><th>Название</th><th>Цена за единицу товара</th><th>Количество</th><th>Внешний вид</th>
        </tr>
        <? for($i = 0, $n = 1; $i < count($orderAllGoods); $i++, $n++):?>
            <tr>
                <td><?=$n?></td><td><?=$orderAllGoods[$i]['name']?></td><td><?=$orderAllGoods[$i]['price']?></td>
                <td><?=$orderAllGoods[$i]['quantity']?></td>
                <td><img style="max-width: 100px" src="/images/img/small/<?=$orderAllGoods[$i]['image']?>" alt="<?=$orderAllGoods[$i]['name']?>"></td>
            </tr>
        <? endfor; ?>

    </table>
    <br>
    <form action="/admin/detail/<?=$order['id']?>/" method="post">
        <p>Имя покупателя: <?=$order['name']?></p>
        <p>Телефон покупателя: <?=$order['phone']?></p>
        <p>Статус заказа: <?=$order['status']?></p>
        <p>Количество товаров: <?=$orderCount['count']?></p>
        <p>Суммарная стоимость товаров: <?=$orderGoods['sum']?></p>
        <select name="select" id="">
            <? foreach ($statuses as $status) :?>

                <option value="<?=$status['id'] ?>" <?=($order['status_id'] == $status['id'] ? 'selected' : null) ?>  ><?=$status['status'] ?></option>
            <? endforeach; ?>
        </select>
        <input type="text" hidden name="id" value="<?=$order['id']?>">
        <input type="submit" class="status"  value="Изменить статус заказа">
    </form>
    <hr>
    <br>
    <form action="/admin/detail/<?=$order['id']?>/" name="delete" method="post">
        <input type="submit"  value="Удалить заказ">
        <input type="text" hidden name="idDel" value="<?=$order['id']?>">
    </form>
</div>
<? endif; ?>

<? else: ?>
    <h4>Вы не являетесь администратором</h4>
<? endif; ?>