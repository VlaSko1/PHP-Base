<h2>Новости</h2>
<?php if(!isset($news)): ?>
<h4>Новостей нет</h4>

<?php endif; ?>

<? foreach ($news as $item):?>
    <p><a href="/newspage/<?=$item['id']?>/"><?=$item['prev']?></a></p>

<? endforeach; // ?id = ?>
