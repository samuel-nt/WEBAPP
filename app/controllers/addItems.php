<?php

require_once("../models/addItems.php");
require_once ("../models/selects.php");
require_once ("../models/helpLimpiar.php");

function doAdd(){

    $a = new addItems();
    $a->nuevoItem();
}

/**
 * @param $vista
 * @return false|string
 */
function cargarView($vista){
    ob_start();
    include($vista);
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}