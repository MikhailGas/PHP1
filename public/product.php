<?php
include __DIR__ . '/../config/config.php';
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . 'base.php';

$id = get('id');
$sql = "SELECT goods.id, product, description, price, category, brand FROM goods 
        INNER JOIN category ON category_id = category.id 
        INNER JOIN brand ON brand_id = brand.id 
        WHERE goods.id={$id}";
$data = queryOne($sql);

echo render('product', ['data' => $data, 'title' => $data['category'], 'menu' => $menu])
?>