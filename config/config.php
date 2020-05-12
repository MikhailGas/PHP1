<?php
define("DOCUMENT_ROOT", __DIR__ . "/../");
define("ENGINE_DIR", DOCUMENT_ROOT . "engine/");
define("VIEWS_DIR", DOCUMENT_ROOT . "views/");
define("IMG_DIR", DOCUMENT_ROOT . "public/img/");
define("PREVIEW_DIR", DOCUMENT_ROOT . "public/img/preview_pictures/");

$menu = ['Главная' => 'index.php',
        'Контакты' => 'contacts.php'];

//database

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'shop');