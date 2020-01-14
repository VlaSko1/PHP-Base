<h2>Подробно о товаре</h2>
<form method="post" class="product__detailed">
    <img src="/images/img/big/<?=$resultProduct['name']?>" alt="<?=$resultProduct['name']?>">
    <p>Количество просмотров: <?=$resultProduct['likes']?></p>
    <p><?=$resultProduct['fulldescription']?></p>
    <p>Цена: <?=$resultProduct['price']?></p>
    <input type="submit" class="buy" name="<?=$resultProduct['id']?>" value="Купить">

</form>
