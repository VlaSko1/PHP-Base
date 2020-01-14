<h2>Каталог товаров</h2>
<div class="products">
    <?foreach($resultProducts as $products):?>
        <form method="post" class="product">
            <a href="/product/<?=$products['id']?>/"><img src="/images/img/small/<?=$products['name']?>" alt = "<?=$products['name']?>"></a>
            <p><?=$products['description']?></p>
            <p>Цена: <?=$products['price']?></p>
            <p>Количество просмотров: <?=$products['likes']?></p>
            <input type="submit" class="buy" name="<?=$products['id']?>" value="Купить">
            <hr>
        </form>
    <?endforeach;?>
</div>