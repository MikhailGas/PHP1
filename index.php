<style>
    .wrapper{
        height: 100%;
    }
    .menu{
        display: flex;
        padding: 10px;
    }
    .menu__item{
        list-style-type: none;
        padding: 5px;
        font-size: 20px;
        font-weight: bold;
        position: relative;
    }
    .menu__item:hover{
        cursor: pointer;
        color: #ddd;
    }
    .menu__item:hover .drop_menu{
        display: block;
        color: black;
    }
    .drop_menu{
        position: absolute;
        z-index: 1000;
        background: #ccc;
        padding: 3px;
        display: none;
    }
    .drop_menu__item{
        list-style-type: none;
        
    }
    .lesson{
        display:flex;
        justify-content: space-between;
    }
    .element{
        border: 1px solid black;
        padding: 3px;
        min-width: 23%;
    }
    header {
        height: 100px;
        background: #cac;
    }
    main {
        min-height: 100%;
        background: #cbe;
        padding-bottom:100px;
        box-sizing: border-box;
    }
    footer {
        height:100px;
        background:#ccf;
        border: 1px solid black;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-left: 10;
        margin-top:-100px;
    }
    p {
        margin-left:7px;
    }
    h3 {
        margin-right:5px;
    }
</style>

<?php

    define("SUM",1);
    define("DIFF",2);
    define("MULT",3);
    define("DIV",4);
//  1. --------------------------------------------------------
    /*$a = 0;
    $b = 3;

    if ($a >= 0 && $b >= 0){
        echo ($a - $b);
    }
    elseif ($a < 0 && $b < 0){
        echo ($a * $b);
    }
    else {
        echo ($a + $b);
    }*/

//  3.---------------------------------------------------------
    function sum($arg1, $arg2){
        return $arg1 + $arg2;
    }
    function diff($arg1, $arg2){
        return $arg1 - $arg2;
    }
    function mult($arg1, $arg2){
        return $arg1 * $arg2;
    }
    function div($arg1, $arg2){
        return $arg1 / $arg2;
    }

//  4.----------------------------------------------------------

    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case 1:
                return sum($arg1, $arg2);
            break;
            case 2:
                return diff($arg1, $arg2);
            break;
            case 3:
                return mult($arg1, $arg2);
            break;
            case 4:
                return div($arg1, $arg2);
            break;
            default :
                return 'Неверная операция';
        }
    }

    //echo '<br>', mathOperation(2, 5, DIV);

// 5.--------------------------------------------------------
    $year = date('Y'); 
    $arg = 7;
    $pow = -2; 
      
    
    

//6. ---------------------------------------------------------
    

    function power($val, $pow){
        if($pow == 0) return 1;
        if($pow == 1) return $val;
        if ($pow > 0) return power($val, --$pow) * $val;
        else return 1 / (power($val, abs(++$pow)) * $val);
        
    }

//7. ----------------------------------------------------------


    function showTime(){
        $hour = date('H');
        $minute = date('i');
        define('HOUR','час');
        define('MINUTE','минут');
        if ($hour % 20 == 1) $stringHour = HOUR;
        elseif ($hour % 20 > 1 && $hour % 20 < 5) $stringHour = HOUR.'а';
        else $stringHour = HOUR.'ов';

        if ($minute % 20 == 1) $stringMinute = MINUTE.'а';
        elseif ($minute % 20 > 1 && $minute % 20 < 5) $stringMinute = MINUTE.'ы';
        else $stringMinute = MINUTE;

        return "$hour $stringHour $minute $stringMinute";
    }
//3.3.---------------------------------------------------------------------------

    $city = [
        'Московская' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
    ];
//3.7.-----------------------------------------------------------------------
    for($i = 0; $i <= 9; $s .= $i++){

    }
    echo $s;
?>
<div class="wrapper">
    <header>
        <ul class="menu">
            <?php
                //3.6.-------------------------------------------------------
                    $menu = [
                        'Главная' => '',
                        'Прайс' => [
                            'Бытовая техника',
                            'Оргтехника',
                            'Видеотехника'
                        ],
                        'Партнёрам' => '',
                        'Контакты' => ''
                    ];
                    foreach($menu as $key => $item){
                        if(gettype($item) == 'array'){
                            echo '<li class="menu__item">'.$key.'<ul class="drop_menu">';
                            foreach($item as $dropItem){
                                echo '<li class="drop_menu__item">'."$dropItem</li>";
                            }
                            echo '</ul></li>';
                        }
                        else echo '<li class="menu__item">'."$key</li>";
                    }
            ?>
            
        </ul>
    </header>
    <main>
        <div class="lesson">
            <div class="element">
            <?php
                //3.1.--------------------------------------------------------------
                    $x = 0;
                    while($x <= 100){
                        if($x % 3 == 0){
                            echo "<span>$x </span>";
                            
                        }
                        $x++;
                    }
            ?>
            </div>
            <div class="element">
            <?php
                //3.2.-----------------------------------------------------------------
                    $x = 0;
                    do {
                        if($x % 2 == 0) $description = 'четное';
                        else $description = 'нечетное';
                        if($x == 0) $description = 'ноль';
                        echo "<p>$x - $description</p>";
                        $x++;
                    } while ($x <= 10);
            ?>
            </div>
            <div class="element">
            <?php
                //3.3.------------------------------------------------------------------
                    foreach($city as $key => $value){
                        echo "<p>$key область:</p>";
                        if(gettype($value) == 'array'){
                            $string = implode(',', $value); 
                        } else $string = $value;
                        echo "<p>$string</p>";
                    }
                
            ?>
            </div>
            <div class="element">
            <?php
                //3.4.----------------------------------------------------------------------
                
                    function translate($string){
                        $liters = [
                            'а' => 'a', 'б' => 'b','в' => 'v','г' => 'g','д' => 'd','е' => 'e','ё' => 'yo','ж' => 'g','з' => 's','и' => 'i','й' => 'iy',
                            'к' => 'k', 'л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p','р' => 'r','с' => 's','т' => 't','у' => 'u','ф' => 'f',
                            'х' => 'h', 'ц' => 'c','ч' => 'ch','ш' => 'sh','щ' => 'sh','ь' => '','ы' => 'i','ъ' => '','э' => 'e','ю' => 'yu','я' => 'ya',' ' => ' '
                        ];
                        $string = mb_strtolower($string);
                                                
                        for($i = 0; $i <= mb_strlen($string); $i++){
                            $endString .= $liters[mb_substr($string, $i, 1)];
                        }
                        return $endString;
                    }
                    echo translate('НоВоГоДнЯя ёлка');
            ?>
            </div>
            
        </div>
        <div class="lesson">
            <div class="element">
                <?php
                    //3.5.---------------------------------------------------------------------
                        function spaceToUnderline($string){
                            $arrayLiters = preg_split("//u", $string , -1, PREG_SPLIT_NO_EMPTY);
                            for($i = 0; $i <= mb_strlen($string); $i++){
                                if(mb_substr($string, $i, 1) == ' ') $endString .= '_';
                                else $endString .= mb_substr($string, $i, 1);
                            }
                            return $endString;
                            
                        }
                        echo spaceToUnderline('Это просто текст');
                ?>
                
            </div>
            <div class="element">
                <?php
                    //3.8.--------------------------------------------------------------------------
                        foreach($city as $key => $value){
                            echo "<p>$key область:</p>";
                            if(gettype($value) == 'array'){
                                $value = array_filter($value, function($v){
                                    return mb_substr($v, 0, 1) == 'К';
                                });
                                $string = implode(',', $value); 
                            } else $string = $value;
                            echo "<p>$string</p>";
                        }
                ?>
            </div>
            <div class="element">
                <?php
                    //3.8.------------------------------------------------------------
                        echo spaceToUnderline(translate('Первая неделя'));
                ?>
            </div>
        </div>
    </main>
    <footer>
        <h3><?=$year?> год</h3>
        <h3><?=showTime()?></h3>
        <p>Результат возведения числа <?=$arg?> в степень <?=$pow?>: <b><?=power($arg,$pow)?></b></p> 
    </footer>
</div>
