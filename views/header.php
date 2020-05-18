<h1><?=$title?></h1>
<ul class="menu">
    <?php
        foreach($menu as $key => $item){
            echo '<li class="menu-item"><a href="'. $item . '" class="menu-link">'. $key . '</a></li>';
        }
    
    ?>
</ul>