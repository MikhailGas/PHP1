<div class="gallery">
<?php foreach($data as $item): ?>
    <a href="<?="product.php?id={$item['id']}"?>">
        <div class="gallery_item"> 
            <h3><?=$item['product']?></h3>
            <p><?=$item['description']?></p>
            <p><?=$item['category']?></p>
            <h2><?=$item['price']?></h2>
        </div>
    </a>
<?php endforeach; ?>
</div>
