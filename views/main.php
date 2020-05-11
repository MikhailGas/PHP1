<?php
    include VIEWS_DIR . 'upload.php';
?>
<div class="gallery">
<?php
    foreach($data as $item){
        echo '
            
                <div class="gallery_item"> 
                    <a href="photo.php?id=' . $item['id'] . '">
                        <img src="' . $item['path_preview'] . $item['name'].'"  alt="картинка" class="gallery_img">
                    </a>
                    <div class="num-views">' . $item['num_of_views']. '</div>
                </div>
           
        ';
    }
?>
</div>
