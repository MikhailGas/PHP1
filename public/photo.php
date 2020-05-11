<?php
    $title = 'Фото';
    include __DIR__ . '/../config/config.php';
    include ENGINE_DIR . 'DataDB.php';
    
    

    if(isset($_GET['id'])){
        $conn = mysqli_connect("localhost", "root", "", "shop");
        if ($id = (int) mysqli_real_escape_string($conn, $_GET['id'])) {
            
            $sql = "SELECT id, name, path, width, height, num_of_views FROM photos WHERE id={$id}";
            $data = getDataFromDB($conn, $sql);
            
        }
        
        $path = $data[0]['path'];
        $name = $data[0]['name'];
        $width = $data[0]['width'];
        $height = $data[0]['height'];
        $num_of_views = $data[0]['num_of_views'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "SELECT * FROM ip";
        $data = getDataFromDB($conn, $sql);
        
        if(!findIP($data, $ip, $id)){
            $sql = "INSERT INTO `ip` (ip, id_photo) VALUES ('$ip', '$id')";
            changeDataFromDB($conn, $sql);
            $num_of_views++;
            $sql = "UPDATE photos SET num_of_views={$num_of_views} WHERE id={$id}";
            changeDataFromDB($conn, $sql);
        }
        
               
        mysqli_close($conn);
        unset($_GET['id']);
    }




    include VIEWS_DIR . 'photo.php';

    
?>