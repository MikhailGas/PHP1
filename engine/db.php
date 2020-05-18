<?php



function connection(){
    include CONFIG_DIR . 'config.php';
    static $conn;
    if(!isset($conn)){
        $conn = mysqli_connect(
            $connect['host'], 
            $connect['user'], 
            $connect['pass'], 
            $connect['db'] 
        );
    }
    return $conn;
}

function execute(string $sql) {
    return mysqli_query(connection(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(connection());
}




    
?>