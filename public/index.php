<?php
include __DIR__ . '/../config/config.php';
include ENGINE_DIR . 'imageresize.php';
include ENGINE_DIR . 'DataDB.php';
$error = false;
$title = 'Главная';
$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
    if($_FILES['my_file']['name']) {
        
        
        if(!file_exists(IMG_DIR)) {
            mkdir(IMG_DIR);
        }
        if(getimagesize($_FILES['my_file']['tmp_name']) && filesize($_FILES['my_file']['tmp_name']) < 10000000){
            $name = $_FILES['my_file']['name'];
            $width = getimagesize($_FILES['my_file']['tmp_name'])[0];
            $height = getimagesize($_FILES['my_file']['tmp_name'])[1];
            $newWidth = 200;
            $newHeight = $height * $newWidth / $width;
            $path = 'img/';
            $path_preview = 'img/preview_pictures/';
            
            
            
            imageresize(PREVIEW_DIR . $name, $_FILES['my_file']['tmp_name'], $newWidth, $newHeight, 100);
            move_uploaded_file(
                $_FILES['my_file']['tmp_name'],
                IMG_DIR . $name
            );

            
            $sql = "INSERT INTO photos (name, path, path_preview, width, height) VALUES ('$name',  '$path'  ,  '$path_preview' , $width, $height)";
            if (!$res = mysqli_query($conn, $sql)) {
                var_dump(mysqli_error($conn));
            }
            
        }
        else {
            $error = "Файл не может быть загружен, так как не является изображением, либо размер превышает 10Мб";
        }
        header("Location:".$_SERVER['PHP_SELF']);
        
    }
  }


$sql = "SELECT id, name, path_preview, num_of_views FROM photos ORDER BY num_of_views DESC";
$data = request($conn, $sql);


include VIEWS_DIR . 'home.php';
mysqli_close($conn);

