<form action="" method="post" enctype="multipart/form-data" id="upload_form"> 
    <input type="file" name="my_file">
    <input type="submit" value="Загрузить">
    <?php
        echo $error;
        if($error){
            echo "<p>$error</p>";
        }
    ?>
</form>
