<h2>Подробно о товаре</h2>
<div class="product">
    <img src="/images/img/big/<?=$resultProduct['image']?>" alt="<?=$resultProduct['name']?>">
    <p>Количество просмотров: <?=$resultProduct['views']?></p>
    <p><?=$resultProduct['description']?></p>
    <p>Цена: <?=$resultProduct['price']?></p>
    <button class="buy" data-id="<?=$resultProduct['id']?>">Купить</button>

</div>
<script>
    let buttonBuy = document.querySelector(".buy");
    buttonBuy.addEventListener('click', () => {
        let id = buttonBuy.getAttribute('data-id');
        (async () => {
            const response = await fetch('/api/buy/?id=' + id);
            const answer = await response.json();
            if (answer['err'] == true) {
                document.getElementById('count').innerText = answer.count;
            }
        })();
    })

</script>