<?php
include __DIR__ . '/../config/config.php';
include ENGINE_DIR . 'imageresize.php';
$error = false;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if(isset($_FILES['my_file'])) {
        
        if(!file_exists(IMG_DIR)) {
            mkdir(IMG_DIR);
        }
        if(getimagesize($_FILES['my_file']['tmp_name']) && filesize($_FILES['my_file']['tmp_name']) < 10000000){
            $width = getimagesize($_FILES['my_file']['tmp_name'])[0];
            $height = getimagesize($_FILES['my_file']['tmp_name'])[1];
            $newWidth = 200;
            $newHeight = $height * $newWidth / $width;
            
            
            
            imageresize(PREVIEW_DIR . $_FILES['my_file']['name'], $_FILES['my_file']['tmp_name'], $newWidth, $newHeight, 100);
            move_uploaded_file(
                $_FILES['my_file']['tmp_name'],
                IMG_DIR . $_FILES['my_file']['name']
            );

            
            
        }
        else {
            $error = "Файл не может быть загружен, так как не является изображением, либо размер превышает 10Мб";
        }
        
        

        
    }
    $_FILES['my_file'] = '';
}


$directory = opendir(PREVIEW_DIR);
$filelist = [];
if($directory){
    while($item = readdir($directory)){
        
        if(($item <> '.') && ($item <> '..')){
            array_push($filelist, $item);
        }
        
    }
    
    closedir($directory);
}


include VIEWS_DIR . 'home.php';



