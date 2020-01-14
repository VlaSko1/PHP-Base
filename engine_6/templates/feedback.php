<h2>Отзывы</h2>
<?=$message?><br>
<hr>
<form action="/feedback/add/" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="id" value="<?=$valueId?>" hidden><br>
    <input type="text" name="name" value="<?=$valueName?>" placeholder="Ваше имя"><br>
    <input type="text" name="message" value="<?=$valueMessage?>" placeholder="Ваш отзыв"><br>
    <input type="submit" value="<?=$buttonText?>">
</form><br>

<?foreach ($feedback as $value): ?>
    <div>
        <strong><?=$value['name']?></strong>: <?=$value['message']?>
        <a href="/feedback/edit/?id=<?=$value['id']?>">[править]</a>
        <a href="/feedback/delete/?id=<?=$value['id']?>&name=<?=$value['name']?>
        &message=<?=$value['message']?>">[удалить]</a>
    </div>

<?endforeach;?>