<h2>Корзина</h2>
<h4 id="send" style="display: none">Заказ отправлен</h4>
<form action="/basket/addorder/" method="post" id="orderForm">
    <p>Оформите заказ:</p>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="phone" placeholder="Телефон" required>
    <input type="submit" value="Оформить заказ">
</form>
<h3 id="zero" style="display: none">Корзина пуста</h3>
<p id="total">Итого: <span id="summ"><?=$summ?></span></p>



<? foreach ($basket as $item): ?>
    <div id="item<?=$item['basket_id']?>">
        <h3><?=$item['name'] ?></h3>
        <img src="/images/img/small/<?=$item['image']?>" alt="<?=$item['name'] ?>"><br>
        <p>Цена: <?=$item['price']?></p>
        <p>Количество товаров: <span id="quantity<?=$item['basket_id']?>"><?=$item['quantity']?></span></p><br>
        <button class="delete" data-id="<?=$item['basket_id']?>">Удалить</button>
        <hr>
    </div>
<? endforeach; ?>

<script>
    getZero();
    getStorage();
    delStorage();
    // При отсутствиии товаров в корзине - выполняет действия: показывает "Корзина пуста", выполняет hideBlocks();
    function getZero() {
        if (document.getElementById('count').innerText == 0) {
            document.getElementById('zero').style.display = 'block';
            hideBlocks();
        } else {
            delStorage();
        };
    }
    // Убирает форму отправки заказа при вызове.
    function hideBlocks() {
        document.getElementById('total').style.display = 'none';
        document.getElementById('orderForm').style.display = 'none';

    }

    let buttonsBuy = document.querySelectorAll(".delete");
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/delete/?id=' + id);
                const answer = await response.json();
                if (answer['err'] == true) {
                    document.getElementById('count').innerText = answer.count;
                    document.getElementById('quantity' + id).innerText = answer['quantity'];
                    document.getElementById('summ').innerText = answer['summ'];
                    if (answer['quantity'] < 1) {
                        document.getElementById('item' + id).remove();
                        getZero();
                    }
                }
            })();
        })
    });
    window.onload = document.getElementById('orderForm').addEventListener('submit', () => {
        sessionStorage.setItem("sendForm", '1');
    } )
    // Проверяет есть ли сохраненные данные
    function getStorage() {
        if(sessionStorage.getItem('sendForm')){
            document.getElementById('send').style.display = 'block';
        }
    }

    // Вешает обработчик для удаления sessionStorage после перезагрузки страницы
    function delStorage() {
        window.onblur = delStorageNow();
    }
    // Удаляет запись в sessionStorage
    function delStorageNow() {
        sessionStorage.removeItem('sendForm')
    }

</script>
