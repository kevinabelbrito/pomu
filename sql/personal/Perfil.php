<?php 

//Datos del personal
$id = $_GET['id'];
$model = new Crud();
$model->select = "*";
$model->from = "personal";
$model->condition = "id=$id";
$model->Read();
$filas = $model->rows;
$total = count($filas);

?>