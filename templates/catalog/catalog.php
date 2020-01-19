<h2>Каталог товаров</h2>
<div class="products">
    <?foreach($resultProducts as $products):?>
        <div class="product">
            <a href="/catalog/product/<?=$products['id']?>/"><img src="/images/img/small/<?=$products['image']?>" alt = "<?=$products['name']?>"></a>
            <p><?=$products['name']?></p>
            <p>Цена: <?=$products['price']?></p>
            <p>Количество просмотров: <?=$products['views']?></p>
            <button class="buy" data-id="<?=$products['id']?>">Купить</button>
            <hr>
        </div>
    <?endforeach;?>
</div>

<script>
    let buttonsBuy = document.querySelectorAll(".buy");
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/buy/?id=' + id);
                const answer = await response.json();
                if(answer['err'] == true) {
                    document.getElementById('count').innerText = answer.count;
                }
            })();
        })
    })
</script>