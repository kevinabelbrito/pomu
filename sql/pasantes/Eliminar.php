<?php 

if (isset($_GET['id']))
{
	$id = htmlspecialchars($_GET['id']);
	if (!is_numeric($id))
	{
		header("location:../../admin/pasantes");
	}
	else
	{
		$model = new Crud;
		$model->deleteFrom = "pasantes";
		$model->condition = "id=$id";
		$model->Delete();
		header("location:../../admin/pasantes");
	}
	
}
else
{
	header("location:../../admin/pasantes");
}

?>