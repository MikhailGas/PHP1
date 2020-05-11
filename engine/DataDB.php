<?php
    function getDataFromDB($conn, $sql){
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    function changeDataFromDB($conn, $sql){
        if (!$res = mysqli_query($conn, $sql)) {
            var_dump(mysqli_error($conn));
        }
    }

    function findIP($data, $ip, $id){
        foreach($data as $item){
            
            if($item['ip'] == $ip && $item['id_photo'] == $id){
            
                return true;
            }
        }
        return false;
    }

    
?>