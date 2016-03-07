<?php 

if (isset($_GET['id']))
{
	$id = htmlspecialchars($_GET['id']);
	if (!is_numeric($id))
	{
		header("location:../../admin/reposo");
	}
	else
	{
		$model = new Crud;
		$model->deleteFrom = "inactivos";
		$model->condition = "id=$id";
		$model->Delete();
		header("location:../../admin/reposo");
	}
	
}
else
{
	header("location:../../admin/reposo");
}

?>