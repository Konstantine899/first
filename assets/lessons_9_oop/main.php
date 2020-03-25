<?php
    
    include("autoload.php");

    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    $calc = new Calculator($_POST['a'],$_POST['b']);

    echo $calc->{$op}();
    //print_r($_POST);
    

