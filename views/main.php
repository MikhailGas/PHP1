<?php
    include VIEWS_DIR . 'upload.php';
?>
<div class="gallery">
<?php
    foreach($filelist as $file){
        echo '
        
            <div class="gallery_item">
                <a href="img/' . $file.'" target="_blank"><img src="img/preview_pictures/' . $file.'"  alt="картинка" class="gallery_img"></a>
            </div>
        ';
    }
?>
</div>
