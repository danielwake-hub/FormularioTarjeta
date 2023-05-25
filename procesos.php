<?php
$nombre = $_POST['name'];
$numero = $_POST['number'];
$mes = $_POST['month'];
$año = $_POST['year'];
$cvv = $_POST['cvv'];

if(!empty($nombre) && !empty($numero) && !empty($mes) && !empty($año) && !empty($cvv)) {
    echo "Todo esta bien";
} else {
    echo "falta algo";
}

