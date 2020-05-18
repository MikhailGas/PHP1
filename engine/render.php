<?php
function render(string $template, array $params = [])
{
    
    ob_start();
    extract($params);
        ob_start();
        include VIEWS_DIR . "{$template}.php";
        $content = ob_get_clean();
    include VIEWS_DIR . 'layout.php';
    return ob_get_clean();
}