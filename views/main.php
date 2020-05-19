<div class="gallery">
<?php foreach($data as $item): ?>
    <div class="gallery_item"> 
        <a href="<?="product.php?id={$item['id']}"?>">
            <img src="<?=$item['img_small']?>/ccccee" alt="photo">
        </a>
        <h3><?=$item['product']?></h3>
        <p><?=$item['description']?></p>
        <p><?=$item['category']?></p>
        <h2><?=$item['price']?></h2>
        <form action="" method="post">
            <button name="<?=$id?>">Купить</button>
        </form>
    </div>
    
<?php endforeach; ?>
</div>
