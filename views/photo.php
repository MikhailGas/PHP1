<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
            include VIEWS_DIR . 'header.php';
        ?>
    </header>
    <main>
        <h2 class="photo-name"><?=$name . '   ' . $width . ' X ' . $height?></h2>
        <img src="<?=$path . $name?>" alt="photo" class="photo">
        <p>Просмотров: <?=$num_of_views?></p>
    
    </main>
    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="modal_close()">×</span>
                <h2></h2>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
    <!--<script src="js/modal.js"></script>-->
</body>
</html>