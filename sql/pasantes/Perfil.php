 <?php 

//Datos del pasante
$id = $_GET['id'];
$model = new Crud();
$model->select = "*";
$model->from = "pasantes";
$model->condition = "id=$id";
$model->Read();
$filas = $model->rows;
$total = count($filas);

  ?>