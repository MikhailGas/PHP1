<?php
include __DIR__ . '/../config/config.php';
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'render.php';

$sql = "SELECT goods.id, product, description, price, category, img_small FROM goods 
        INNER JOIN category ON category_id = category.id
        INNER JOIN images ON goods.id = images.id";
$data = queryAll($sql);

echo render('main', ['data' => $data, 'title' => 'Главная', 'menu' => $menu]);

closeConnection();

