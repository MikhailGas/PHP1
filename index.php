<style>
    .wrapper{
        height: 100%;
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
      
    
    
?>
<div class="wrapper">
    <main></main>
    <footer>
        <h3><?=$year?> год</h3>
        <h3><?=showTime()?></h3>
        <p>Результат возведения числа <?=$arg?> в степень <?=$pow?>: <b><?=power($arg,$pow)?></b></p> 
    </footer>
</div>

<?php
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



?>
