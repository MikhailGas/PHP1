<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
            include VIEWS_DIR . 'header.php';
        ?>
    </header>
    <main>
    <?php
            include VIEWS_DIR . 'main.php';
        ?>
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
    <script src="js/modal.js"></script>
</body>
</html>