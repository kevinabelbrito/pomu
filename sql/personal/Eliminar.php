<?php 

if (isset($_GET['id']))
{
	$id = htmlspecialchars($_GET['id']);
	if (!is_numeric($id))
	{
		header("location:../../admin/personal/lista.php");
	}
	else
	{
		$model = new Crud;
		$model->deleteFrom = "personal";
		$model->condition = "id=$id";
		$model->Delete();
		header("location:../../admin/personal/lista.php");
	}
	
}
else
{
	header("location:../../admin/personal/lista.php");
}

?>