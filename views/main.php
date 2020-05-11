<?php
    include VIEWS_DIR . 'upload.php';
?>
<div class="gallery">
<?php
    foreach($filelist as $file){
        echo '
        
            <div class="gallery_item" onclick="modal(' . "'" . $file . "'" . ')">
                <img src="img/preview_pictures/' . $file.'"  alt="картинка" class="gallery_img">
            </div>
        ';
    }
?>
</div>
