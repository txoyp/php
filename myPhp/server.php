<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/10/14
 * Time: 13:51
 */

    $name = $_GET['name'];
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    if($name == ''){
        echo 'nameErr';
    }elseif($p1 == ''){
        echo 'p1Err';
    }
    elseif ($p2 == ''){
        echo 'p2Err';
    }elseif($p1 != $p2){
        echo 'error';
    }
    else{
        echo 'success';
    }
?>