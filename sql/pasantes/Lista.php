<?php 

$model = new Crud;
$model->select = "*";
$model->from = "pasantes";
$model->Read();
$filas = $model->rows;
$total = count($filas);

 ?>