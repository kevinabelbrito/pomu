<?php 

$motivo = "vacaciones";
$model = new Crud;
$model->select = "*";
$model->from = "inactivos";
$model->condition = "motivo='$motivo'";
$model->Read();
$filas = $model->rows;
$total = count($filas);

?>