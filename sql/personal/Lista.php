 <?php 

$model = new Crud;
$model->select = "*";
$model->from = "personal";
$model->Read();
$filas = $model->rows;
$total = count($filas);

  ?>