<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php if (is_null($img)) :?>
            <h3>Такого изображения нет</h3>
        <?php else :?>
            <img src="/images/gallery_img/big/<?=$img?>" />
            <span class="view"><?=$views?></span>
        <?php endif; ?>
    </div>
</div>